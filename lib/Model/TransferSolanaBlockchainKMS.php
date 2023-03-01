<?php

/**
 * TransferSolanaBlockchainKMS Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * TransferSolanaBlockchainKMS Model
 */
class TransferSolanaBlockchainKMS extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferSolanaBlockchainKMS";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 43, "xl" => 44]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 43, "xl" => 44]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "fee_payer" => ["feePayer", "string", null, "getFeePayer", "setFeePayer", null, ["r" => 0, "nl" => 43, "xl" => 44]], 
        "fee_payer_signature_id" => ["feePayerSignatureId", "string", 'uuid', "getFeePayerSignatureId", "setFeePayerSignatureId", null, ["r" => 0]]
    ];

    /**
     * TransferSolanaBlockchainKMS
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Blockchain address to send assets from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get to
     *
     * @return string|null
     */
    public function getTo(): ?string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Blockchain address to send assets to
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent in SOL.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get signature_id
     *
     * @return string|null
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }

    /**
     * Get fee_payer
     *
     * @return string|null
     */
    public function getFeePayer(): ?string {
        return $this->_data["fee_payer"];
    }

    /**
     * Set fee_payer
     * 
     * @param string|null $fee_payer Blockchain address to pay the fee for the transaction from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeePayer(?string $fee_payer) {
        return $this->_set("fee_payer", $fee_payer);
    }

    /**
     * Get fee_payer_signature_id
     *
     * @return string|null
     */
    public function getFeePayerSignatureId(): ?string {
        return $this->_data["fee_payer_signature_id"];
    }

    /**
     * Set fee_payer_signature_id
     * 
     * @param string|null $fee_payer_signature_id Identifier of the private key used for paying the gas costs in signing application. Defaults to the signatureId.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeePayerSignatureId(?string $fee_payer_signature_id) {
        return $this->_set("fee_payer_signature_id", $fee_payer_signature_id);
    }
}
