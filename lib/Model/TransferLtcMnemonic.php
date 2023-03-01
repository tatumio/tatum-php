<?php

/**
 * TransferLtcMnemonic Model
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
 * TransferLtcMnemonic Model
 */
class TransferLtcMnemonic extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferLtcMnemonic";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1, "nl" => 1, "xl" => 10000]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant", null, ["r" => 0]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "multiple_amounts" => ["multipleAmounts", "string[]", null, "getMultipleAmounts", "setMultipleAmounts", null, ["r" => 0, "c" => 1]], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr", null, ["r" => 0, "nl" => 1, "xl" => 256]], 
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic", null, ["r" => 1, "nl" => 1, "xl" => 500]], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub", null, ["r" => 1, "nl" => 1, "xl" => 150]], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null, ["r" => 0, "nl" => 1, "xl" => 500]]
    ];

    /**
     * TransferLtcMnemonic
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get sender_account_id
     *
     * @return string|null
     */
    public function getSenderAccountId(): ?string {
        return $this->_data["sender_account_id"];
    }

    /**
     * Set sender_account_id
     * 
     * @param string $sender_account_id Sender account ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        return $this->_set("sender_account_id", $sender_account_id);
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
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
     * @param string $amount Amount to be withdrawn to blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get compliant
     *
     * @return bool|null
     */
    public function getCompliant(): ?bool {
        return $this->_data["compliant"];
    }

    /**
     * Set compliant
     * 
     * @param bool|null $compliant Compliance check, if withdrawal is not compliant, it will not be processed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        return $this->_set("compliant", $compliant);
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.0005 LTC is used. Minimum fee is 0.00001 LTC.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get multiple_amounts
     *
     * @return string[]|null
     */
    public function getMultipleAmounts(): ?array {
        return $this->_data["multiple_amounts"];
    }

    /**
     * Set multiple_amounts
     * 
     * @param string[]|null $multiple_amounts For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMultipleAmounts(?array $multiple_amounts) {
        return $this->_set("multiple_amounts", $multiple_amounts);
    }

    /**
     * Get attr
     *
     * @return string|null
     */
    public function getAttr(): ?string {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param string|null $attr Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(?string $attr) {
        return $this->_set("attr", $attr);
    }

    /**
     * Get mnemonic
     *
     * @return string|null
     */
    public function getMnemonic(): ?string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string $mnemonic Mnemonic seed - usually 12-24 words with access to whole wallet. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        return $this->_set("mnemonic", $mnemonic);
    }

    /**
     * Get xpub
     *
     * @return string|null
     */
    public function getXpub(): ?string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string $xpub Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mnemonic is used.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setXpub(string $xpub) {
        return $this->_set("xpub", $xpub);
    }

    /**
     * Get payment_id
     *
     * @return string|null
     */
    public function getPaymentId(): ?string {
        return $this->_data["payment_id"];
    }

    /**
     * Set payment_id
     * 
     * @param string|null $payment_id Identifier of the payment, shown for created Transaction within Tatum sender account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        return $this->_set("payment_id", $payment_id);
    }

    /**
     * Get sender_note
     *
     * @return string|null
     */
    public function getSenderNote(): ?string {
        return $this->_data["sender_note"];
    }

    /**
     * Set sender_note
     * 
     * @param string|null $sender_note Note visible to owner of withdrawing account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        return $this->_set("sender_note", $sender_note);
    }
}
