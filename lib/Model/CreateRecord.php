<?php

/**
 * CreateRecord Model
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
 * CreateRecord Model
 */
class CreateRecord extends AbstractModel {

    public const _D = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_EGLD = 'EGLD';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_XDC = 'XDC';
    protected static $_name = "CreateRecord";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 1, "nl" => 1, "xl" => 130000]], 
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 66, "xl" => 66]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 0, "nl" => 42, "xl" => 62]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 0, "nl" => 42, "xl" => 42]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]], 
        "from_shard_id" => ["fromShardID", "float", null, "getFromShardId", "setFromShardId", null, ["r" => 0, "n" => [0], "x" => [4]]], 
        "to_shard_id" => ["toShardID", "float", null, "getToShardId", "setToShardId", null, ["r" => 0, "n" => [0], "x" => [4]]], 
        "eth_fee" => ["ethFee", "\Tatum\Model\CustomFee", null, "getEthFee", "setEthFee", null, ["r" => 0]]
    ];

    /**
     * CreateRecord
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getChainAllowableValues(): ?array {
        return [
            self::CHAIN_BSC,
            self::CHAIN_EGLD,
            self::CHAIN_ETH,
            self::CHAIN_KLAY,
            self::CHAIN_MATIC,
            self::CHAIN_ONE,
            self::CHAIN_XDC,
        ];
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string $data The data to be stored on the blockchain
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(string $data) {
        return $this->_set("data", $data);
    }

    /**
     * Get chain
     *
     * @return string|null
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to store the data on
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get from_private_key
     *
     * @return string|null
     */
    public function getFromPrivateKey(): ?string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
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
     * @param string|null $from (Elrond only; required) The blockchain address from which the transaction will be made<br/>This is a mandatory parameter for Elrond. Do not use it with any other blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(?string $from) {
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
     * @param string|null $to The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(?string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }

    /**
     * Get from_shard_id
     *
     * @return float|null
     */
    public function getFromShardId(): ?float {
        return $this->_data["from_shard_id"];
    }

    /**
     * Set from_shard_id
     * 
     * @param float|null $from_shard_id (Harmony only) The ID of the shard from which the data should be read
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromShardId(?float $from_shard_id) {
        return $this->_set("from_shard_id", $from_shard_id);
    }

    /**
     * Get to_shard_id
     *
     * @return float|null
     */
    public function getToShardId(): ?float {
        return $this->_data["to_shard_id"];
    }

    /**
     * Set to_shard_id
     * 
     * @param float|null $to_shard_id (Harmony only) The ID of the shard to which the data should be recorded
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setToShardId(?float $to_shard_id) {
        return $this->_set("to_shard_id", $to_shard_id);
    }

    /**
     * Get eth_fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getEthFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["eth_fee"];
    }

    /**
     * Set eth_fee
     * 
     * @param \Tatum\Model\CustomFee|null $eth_fee eth_fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEthFee(?\Tatum\Model\CustomFee $eth_fee) {
        return $this->_set("eth_fee", $eth_fee);
    }
}
