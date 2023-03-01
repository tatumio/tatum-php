<?php

/**
 * TronInternalTx Model
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
 * TronInternalTx Model
 */
class TronInternalTx extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronInternalTx";
    protected static $_definition = [
        "tx_id" => ["tx_id", "string", null, "getTxId", "setTxId", null, ["r" => 1]], 
        "internal_tx_id" => ["internal_tx_id", "string", null, "getInternalTxId", "setInternalTxId", null, ["r" => 1]], 
        "to_address" => ["to_address", "string", null, "getToAddress", "setToAddress", null, ["r" => 1]], 
        "from_address" => ["from_address", "string", null, "getFromAddress", "setFromAddress", null, ["r" => 1]]
    ];

    /**
     * TronInternalTx
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_id
     *
     * @return string|null
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id Transaction ID.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get internal_tx_id
     *
     * @return string|null
     */
    public function getInternalTxId(): ?string {
        return $this->_data["internal_tx_id"];
    }

    /**
     * Set internal_tx_id
     * 
     * @param string $internal_tx_id Internal TX ID.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInternalTxId(string $internal_tx_id) {
        return $this->_set("internal_tx_id", $internal_tx_id);
    }

    /**
     * Get to_address
     *
     * @return string|null
     */
    public function getToAddress(): ?string {
        return $this->_data["to_address"];
    }

    /**
     * Set to_address
     * 
     * @param string $to_address Recipient address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setToAddress(string $to_address) {
        return $this->_set("to_address", $to_address);
    }

    /**
     * Get from_address
     *
     * @return string|null
     */
    public function getFromAddress(): ?string {
        return $this->_data["from_address"];
    }

    /**
     * Set from_address
     * 
     * @param string $from_address Sender address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAddress(string $from_address) {
        return $this->_set("from_address", $from_address);
    }
}
