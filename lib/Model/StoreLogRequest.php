<?php

/**
 * StoreLog_request Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

use InvalidArgumentException as IAE;

/**
 * StoreLog_request Model
 */
class StoreLogRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "StoreLog_request";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData"], 
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "from_shard_id" => ["fromShardID", "float", null, "getFromShardId", "setFromShardId"], 
        "to_shard_id" => ["toShardID", "float", null, "getToShardId", "setToShardId"], 
        "eth_fee" => ["ethFee", "\Tatum\Model\CustomFee", null, "getEthFee", "setEthFee"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"]
    ];

    /**
     * StoreLogRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["data"=>null, "chain"=>null, "from_private_key"=>null, "from"=>null, "to"=>null, "nonce"=>null, "from_shard_id"=>null, "to_shard_id"=>null, "eth_fee"=>null, "fee_currency"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['data'])) {
            $ip[] = "'data' can't be null";
        }
        if ((mb_strlen($this->_data['data']) > 130000)) {
            $ip[] = "'data' length must be <= 130000";
        }
        if ((mb_strlen($this->_data['data']) < 1)) {
            $ip[] = "'data' length must be >= 1";
        }
        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
        }
        if (!is_null($this->_data['from']) && (mb_strlen($this->_data['from']) > 62)) {
            $ip[] = "'from' length must be <= 62";
        }
        if (!is_null($this->_data['from']) && (mb_strlen($this->_data['from']) < 42)) {
            $ip[] = "'from' length must be >= 42";
        }
        if (!is_null($this->_data['to']) && (mb_strlen($this->_data['to']) > 42)) {
            $ip[] = "'to' length must be <= 42";
        }
        if (!is_null($this->_data['to']) && (mb_strlen($this->_data['to']) < 42)) {
            $ip[] = "'to' length must be >= 42";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        if (!is_null($this->_data['from_shard_id']) && ($this->_data['from_shard_id'] > 4)) {
            $ip[] = "'from_shard_id' must be <= 4";
        }
        if (!is_null($this->_data['from_shard_id']) && ($this->_data['from_shard_id'] < 0)) {
            $ip[] = "'from_shard_id' must be >= 0";
        }
        if (!is_null($this->_data['to_shard_id']) && ($this->_data['to_shard_id'] > 4)) {
            $ip[] = "'to_shard_id' must be <= 4";
        }
        if (!is_null($this->_data['to_shard_id']) && ($this->_data['to_shard_id'] < 0)) {
            $ip[] = "'to_shard_id' must be >= 0";
        }
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_CELO,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData(): string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string $data The data to be stored on the blockchain
     * @return $this
     */
    public function setData(string $data) {
        if ((mb_strlen($data) > 130000)) {
            throw new IAE('StoreLogRequest.setData: $data length must be <= 130000');
        }
        if ((mb_strlen($data) < 1)) {
            throw new IAE('StoreLogRequest.setData: $data length must be >= 1');
        }
        $this->_data['data'] = $data;

        return $this;
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to store the data on
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("StoreLogRequest.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('StoreLogRequest.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('StoreLogRequest.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
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
     * @return $this
     */
    public function setFrom(?string $from) {
        if (!is_null($from) && (mb_strlen($from) > 62)) {
            throw new IAE('StoreLogRequest.setFrom: $from length must be <= 62');
        }
        if (!is_null($from) && (mb_strlen($from) < 42)) {
            throw new IAE('StoreLogRequest.setFrom: $from length must be >= 42');
        }
        $this->_data['from'] = $from;

        return $this;
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
     * @return $this
     */
    public function setTo(?string $to) {
        if (!is_null($to) && (mb_strlen($to) > 42)) {
            throw new IAE('StoreLogRequest.setTo: $to length must be <= 42');
        }
        if (!is_null($to) && (mb_strlen($to) < 42)) {
            throw new IAE('StoreLogRequest.setTo: $to length must be >= 42');
        }
        $this->_data['to'] = $to;

        return $this;
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
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('StoreLogRequest.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
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
     * @return $this
     */
    public function setFromShardId(?float $from_shard_id) {
        if (!is_null($from_shard_id) && ($from_shard_id > 4)) {
            throw new IAE('StoreLogRequest.setFromShardId: $from_shard_id must be <=4');
        }
        if (!is_null($from_shard_id) && ($from_shard_id < 0)) {
            throw new IAE('StoreLogRequest.setFromShardId: $from_shard_id must be >=0');
        }
        $this->_data['from_shard_id'] = $from_shard_id;

        return $this;
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
     * @return $this
     */
    public function setToShardId(?float $to_shard_id) {
        if (!is_null($to_shard_id) && ($to_shard_id > 4)) {
            throw new IAE('StoreLogRequest.setToShardId: $to_shard_id must be <=4');
        }
        if (!is_null($to_shard_id) && ($to_shard_id < 0)) {
            throw new IAE('StoreLogRequest.setToShardId: $to_shard_id must be >=0');
        }
        $this->_data['to_shard_id'] = $to_shard_id;

        return $this;
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
     * @return $this
     */
    public function setEthFee(?\Tatum\Model\CustomFee $eth_fee) {
        $this->_data['eth_fee'] = $eth_fee;

        return $this;
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("StoreLogRequest.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

        return $this;
    }
}