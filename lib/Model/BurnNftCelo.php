<?php

/**
 * BurnNftCelo Model
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

/**
 * BurnNftCelo Model
 */
class BurnNftCelo extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "BurnNftCelo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null, ["r" => 1, "xl" => 78]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 66, "xl" => 66]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1, "e" => 1]]
    ];

    /**
     * BurnNftCelo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_CELO,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
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
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get token_id
     *
     * @return string
     */
    public function getTokenId(): string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id ID of token to be destroyed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(string $token_id) {
        return $this->_set("token_id", $token_id);
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Address of NFT token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
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
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
    }
}
