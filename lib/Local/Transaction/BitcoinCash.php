<?php
/**
 * Bitcoin Cash Transaction
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Address\BitcoinCash\AddressCreator;
use Tatum\Cryptography\Script\ScriptFactory;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Transaction\SignatureHash\BitcoinCash\SigHash;
use Tatum\Local\Transaction\Bitcoin\Transfer;

class BitcoinCash extends Bitcoin {
    /**
     * Sign Bitcoin Cash transaction
     *
     * @param \Tatum\Local\Transaction\Bitcoin\Transfer $transfer Transfer object
     * @return string
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function sign(Transfer $transfer): string {
        return parent::sign($transfer);
    }

    /**
     * Network interface for Bitcoin Cash
     *
     * @return \Tatum\Cryptography\Network\NetworkInterface;
     */
    protected function _getNetwork(): NetworkInterface {
        return $this->_caller->config()->isMainNet()
            ? NetworkFactory::bitcoinCash()
            : NetworkFactory::bitcoinCashTestnet();
    }

    /**
     * Get script interface based on address
     *
     * @param string $address Address
     * @return \Tatum\Cryptography\Script\ScriptInterface
     */
    protected function _getScriptPubKey($address): ScriptInterface {
        return ScriptFactory::scriptPubKey()->payToPubKeyHash((new AddressCreator())->fromString($address)->getHash());
    }

    /**
     * Get signature type
     *
     * @return int
     */
    protected function _getSignatureType(): int {
        return SigHash::ALL | SigHash::BITCOINCASH;
    }
}
