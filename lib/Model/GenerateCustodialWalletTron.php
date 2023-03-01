<?php

/**
 * GenerateCustodialWalletTron Model
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
 * GenerateCustodialWalletTron Model
 */
class GenerateCustodialWalletTron extends AbstractModel {

    public const _D = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "GenerateCustodialWalletTron";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null, ["r" => 1, "n" => [0]]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "enable_fungible_tokens" => ["enableFungibleTokens", "bool", null, "getEnableFungibleTokens", "setEnableFungibleTokens", null, ["r" => 1]], 
        "enable_non_fungible_tokens" => ["enableNonFungibleTokens", "bool", null, "getEnableNonFungibleTokens", "setEnableNonFungibleTokens", null, ["r" => 1]], 
        "enable_semi_fungible_tokens" => ["enableSemiFungibleTokens", "bool", null, "getEnableSemiFungibleTokens", "setEnableSemiFungibleTokens", null, ["r" => 1]], 
        "enable_batch_transactions" => ["enableBatchTransactions", "bool", null, "getEnableBatchTransactions", "setEnableBatchTransactions", null, ["r" => 1]]
    ];

    /**
     * GenerateCustodialWalletTron
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
    public function getChainAllowableValues(): ?array {
        return [
            self::CHAIN_TRON,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to work with.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): ?float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit Fee in TRX to be paid.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        return $this->_set("fee_limit", $fee_limit);
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): ?string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of account, from which the transaction will be initiated.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }

    /**
     * Get enable_fungible_tokens
     *
     * @return bool
     */
    public function getEnableFungibleTokens(): ?bool {
        return $this->_data["enable_fungible_tokens"];
    }

    /**
     * Set enable_fungible_tokens
     * 
     * @param bool $enable_fungible_tokens If address should support ERC20 tokens, it should be marked as true.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableFungibleTokens(bool $enable_fungible_tokens) {
        return $this->_set("enable_fungible_tokens", $enable_fungible_tokens);
    }

    /**
     * Get enable_non_fungible_tokens
     *
     * @return bool
     */
    public function getEnableNonFungibleTokens(): ?bool {
        return $this->_data["enable_non_fungible_tokens"];
    }

    /**
     * Set enable_non_fungible_tokens
     * 
     * @param bool $enable_non_fungible_tokens If address should support ERC721 tokens, it should be marked as true.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableNonFungibleTokens(bool $enable_non_fungible_tokens) {
        return $this->_set("enable_non_fungible_tokens", $enable_non_fungible_tokens);
    }

    /**
     * Get enable_semi_fungible_tokens
     *
     * @return bool
     */
    public function getEnableSemiFungibleTokens(): ?bool {
        return $this->_data["enable_semi_fungible_tokens"];
    }

    /**
     * Set enable_semi_fungible_tokens
     * 
     * @param bool $enable_semi_fungible_tokens If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableSemiFungibleTokens(bool $enable_semi_fungible_tokens) {
        return $this->_set("enable_semi_fungible_tokens", $enable_semi_fungible_tokens);
    }

    /**
     * Get enable_batch_transactions
     *
     * @return bool
     */
    public function getEnableBatchTransactions(): ?bool {
        return $this->_data["enable_batch_transactions"];
    }

    /**
     * Set enable_batch_transactions
     * 
     * @param bool $enable_batch_transactions If address should support batch transfers of the assets, it should be marked as true.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableBatchTransactions(bool $enable_batch_transactions) {
        return $this->_set("enable_batch_transactions", $enable_batch_transactions);
    }
}
