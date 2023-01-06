<?php
/**
 * BTC Transaction
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Transaction;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use Tatum\Cryptography\Bitcoin as BTC;
use Tatum\Cryptography\Address\AddressCreator;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Key\Factory\PrivateKeyFactory;
use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Script\ScriptFactory;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Transaction\OutPoint;
use Tatum\Cryptography\Transaction\TransactionOutput;
use Tatum\Cryptography\Transaction\TransactionFactory;
use Tatum\Cryptography\Transaction\Factory\Signer;
use Tatum\Cryptography\Transaction\SignatureHash\SigHash;
use Tatum\Local\Transaction\Bitcoin\Transfer;

class Bitcoin extends AbstractTransaction {
    /**
     * Sign UTXO transaction
     *
     * @param \Tatum\Local\Transaction\Bitcoin\Transfer $transfer Transfer object
     *
     * @return string
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function sign(Transfer $transfer): string {
        if (!count($transfer->getSources())) {
            throw new InvalidArgumentException("Transaction - Sources list must not be empty");
        }

        if (!count($transfer->getTargets())) {
            throw new InvalidArgumentException("Transaction - Targets list must not be empty");
        }

        if ($transfer->getFee() <= 0) {
            throw new InvalidArgumentException("Transaction - fee must be greater than 0");
        }

        BTC::setNetwork($this->_getNetwork());

        // Transaction factory
        $tx = TransactionFactory::build()
            ->version(1)
            ->locktime(0);

        // Transaction data
        $signData = [];
        $totalBalance = 0;
        $totalSpending = 0;

        // Go through the sources
        foreach ($transfer->getSources() as $fromObject) {
            [$privateKey, $tHash, $tIndex, $tValue] = $fromObject;

            if ($tValue > 0) {
                $totalBalance += $tValue;
                $signData[] = [$privateKey, $tValue];

                $tx->spendOutPoint(new OutPoint(Buffer::hex($tHash, 32), $tIndex));
            }
        }

        // Prepare the output
        foreach ($transfer->getTargets() as $target) {
            [$tAddress, $tValue] = $target;

            $tx->output($this->_toSatoshi($tValue), $this->_getScriptPubKey($tAddress));
            $totalSpending += $this->_toSatoshi($tValue);
        }

        // Total spending
        $totalSpending += $this->_toSatoshi($transfer->getFee());

        // Insufficient funds
        if ($totalBalance < $totalSpending) {
            throw new InvalidArgumentException(
                sprintf("Balance %s must be greater than amount to spend %s", $totalBalance, $totalSpending)
            );
        }

        // Dust collection
        if ($totalBalance > $totalSpending && null !== $transfer->getChangeAddress()) {
            $tx->output($totalBalance - $totalSpending, $this->_getScriptPubKey($transfer->getChangeAddress()));
        }

        // Prepare signer
        $signer = new Signer($tx->get());
        $scriptFactory = new ScriptFactory();
        $privateKeyFactory = new PrivateKeyFactory();

        // Sign transaction
        foreach ($signData as $signIndex => [$signPrivateKey, $signValue]) {
            // Get the private key
            $privateKey = $privateKeyFactory->fromWif($signPrivateKey);

            // Prepare transaction output
            $txOutput = new TransactionOutput(
                $signValue,
                $scriptFactory->scriptPubKey()->payToPubKeyHash($privateKey->getPubKeyHash())
            );

            // Sign output
            $signer->sign($signIndex, $privateKey, $txOutput);
            $signer->input($signIndex, $txOutput)->sign($privateKey, $this->_getSignatureType());
        }

        return $signer->get()->getHex();
    }

    /**
     * Network interface for Bitcoin
     *
     * @return \Tatum\Cryptography\Network\NetworkInterface
     */
    protected function _getNetwork(): NetworkInterface {
        return $this->_caller->config()->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet();
    }

    /**
     * Get script interface based on address
     *
     * @param string $address Address
     * @return \Tatum\Cryptography\Script\ScriptInterface
     */
    protected function _getScriptPubKey(string $address): ScriptInterface {
        return (new AddressCreator())->fromString($address)->getScriptPubKey();
    }

    /**
     * Get signature type
     *
     * @return int
     */
    protected function _getSignatureType(): int {
        return SigHash::ALL | SigHash::ANYONECANPAY;
    }

    /**
     * Convert value to Satoshi
     *
     * @return int
     */
    protected function _toSatoshi($val) {
        return (int) bcmul(sprintf("%.8f", (float) $val), 100000000, 0);
    }
}
