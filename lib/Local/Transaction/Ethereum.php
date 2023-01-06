<?php

/**
 * Ethereum Transaction
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Model;
use Tatum\Cryptography\Transaction\Ethereum\Transaction;
use Tatum\Local\Wallet;
use Tatum\Cryptography\Util\Ethereum\Unit;

class Ethereum extends AbstractTransaction {
    /**
     * Sign transaction
     *
     * @param \Tatum\Model\TransferEthBlockchain $transaction Blockchain transaction
     *
     * @return string Hex-encoded signed transaction
     */
    public function sign(Model\TransferEthBlockchain $transaction): string {
        // Fetch the sender address
        $fromAddress = (new Wallet($this->_caller))
            ->ethereum()
            ->generateAddressFromPrivateKey((new Model\PrivKey())->setKey($transaction->getFromPrivateKey()))
            ->getAddress();

        // Prepare the nonce
        $nonce =
            null === $transaction->getNonce()
                ? // Fetch transaction count with API call
                intval(
                    $this->_caller
                        ->api()
                        ->ethereum()
                        ->ethGetTransactionCount($fromAddress)
                )
                : // Use the nonce provided
                $transaction->getNonce();
        $data = $transaction->getData() ?: "";

        // Prepare the transaction payload
        $txPayload = [
            "nonce" => $nonce,
            "from" => $fromAddress,
            "to" => $transaction->getTo(),
            "gas" =>
                null != $transaction->getFee() && $transaction->getFee()->getGasLimit() > 0
                    ? $this->_weiToHex(Unit::toWei($transaction->getFee()->getGasLimit(), Unit::GWEI))
                    : $this->_weiToHex(strlen($data) * 68 + 21000),
            "gasPrice" =>
                null != $transaction->getFee() && $transaction->getFee()->getGasPrice() > 0
                    ? $this->_weiToHex(Unit::toWei($transaction->getFee()->getGasPrice(), Unit::GWEI))
                    : $this->_weiToHex(
                        $this->_fetchGasPriceWei($fromAddress, $transaction->getTo(), $transaction->getAmount())
                    ),
            "value" => $this->_weiToHex(Unit::toWei($transaction->getAmount(), Unit::ETHER)),
            "data" => $this->_stringToHex($data),
            "chainId" => $this->_caller->config()->isMainNet() ? 1 : 3
        ];

        // Sign the transaction
        return "0x" . (new Transaction($txPayload))->sign($transaction->getFromPrivateKey());
    }

    /**
     * Fetch the gas price in WEI
     *
     * @param string $from   Sender address
     * @param string $to     Recipient address
     * @param string $amount Amount
     * @return string Gas price in Wei
     */
    protected function _fetchGasPriceWei(string $from, string $to, $amount): string {
        $ethGasEstimation = $this->_caller
            ->api()
            ->blockchainFees()
            ->ethEstimateGas(
                (new Model\EthEstimateGas())
                    ->setFrom($from)
                    ->setTo($to)
                    ->setAmount($amount)
            );

        return Unit::toWei($ethGasEstimation->getGasPrice(), Unit::GWEI);
    }

    /**
     * Wei to Hex
     *
     * @param string $wei Value in WEI
     * @return string
     */
    public function _weiToHex($wei): string {
        return "0x" . dechex($wei);
    }

    /**
     * Hex to Wei
     *
     * @param string $hex Wei value as hexidecimal string
     * @return int|float
     */
    public function _hexToWei($hex) {
        return hexdec(substr($hex, 2));
    }

    /**
     * String to Hex
     *
     * @param string $string
     * @return string
     */
    public function _stringToHex(string $string): string {
        return "0x" . bin2hex($string);
    }

    /**
     * Hex to string
     *
     * @param string $hex
     * @return string
     */
    public function _hexToString(string $hex): string {
        return hex2bin(substr($hex, 2));
    }
}
