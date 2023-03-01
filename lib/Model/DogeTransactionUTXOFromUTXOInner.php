<?php

/**
 * DogeTransactionUTXO_fromUTXO_inner Model
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
 * DogeTransactionUTXO_fromUTXO_inner Model
 */
class DogeTransactionUTXOFromUTXOInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "DogeTransactionUTXO_fromUTXO_inner";
    protected static $_definition = [
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 1]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 1, "n" => [0], "x" => [2147483647]]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 1, "nl" => 52, "xl" => 52]]
    ];

    /**
     * DogeTransactionUTXOFromUTXOInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_hash
     *
     * @return string
     */
    public function getTxHash(): ?string {
        return $this->_data["tx_hash"];
    }

    /**
     * Set tx_hash
     * 
     * @param string $tx_hash The transaction hash of the UTXO to be spent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxHash(string $tx_hash) {
        return $this->_set("tx_hash", $tx_hash);
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string $value The amount to send (in DOGE)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(string $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address The blockchain address to receive the assets
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get index
     *
     * @return float
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float $index The index of the UTXO to be spent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): ?string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key The private key of the blockchain address that holds the UTXO to be spent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
