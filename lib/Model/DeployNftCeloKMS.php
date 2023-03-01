<?php

/**
 * DeployNftCeloKMS Model
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
 * DeployNftCeloKMS Model
 */
class DeployNftCeloKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "DeployNftCeloKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol", null, ["r" => 1, "nl" => 1, "xl" => 30]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]], 
        "provenance" => ["provenance", "bool", null, "getProvenance", "setProvenance", null, ["r" => 0]], 
        "cashback" => ["cashback", "bool", null, "getCashback", "setCashback", null, ["r" => 0]], 
        "public_mint" => ["publicMint", "bool", null, "getPublicMint", "setPublicMint", null, ["r" => 0]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1, "e" => 1]]
    ];

    /**
     * DeployNftCeloKMS
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
            self::CHAIN_CELO,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getFeeCurrencyAllowableValues(): ?array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
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
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName(): ?string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name Name of the NFT token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(string $name) {
        return $this->_set("name", $name);
    }

    /**
     * Get symbol
     *
     * @return string|null
     */
    public function getSymbol(): ?string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol Symbol of the NFT token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSymbol(string $symbol) {
        return $this->_set("symbol", $symbol);
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
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
     * Get provenance
     *
     * @return bool|null
     */
    public function getProvenance(): ?bool {
        return $this->_data["provenance"];
    }

    /**
     * Set provenance
     * 
     * @param bool|null $provenance True if the contract is provenance percentage royalty type. False by default. <a href=\"https://github.com/tatumio/smart-contracts\" target=\"_blank\">Details and sources available here.</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProvenance(?bool $provenance) {
        return $this->_set("provenance", $provenance);
    }

    /**
     * Get cashback
     *
     * @return bool|null
     */
    public function getCashback(): ?bool {
        return $this->_data["cashback"];
    }

    /**
     * Set cashback
     * 
     * @param bool|null $cashback True if the contract is fixed price royalty type. False by default. <a href=\"https://github.com/tatumio/smart-contracts\" target=\"_blank\">Details and sources available here.</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCashback(?bool $cashback) {
        return $this->_set("cashback", $cashback);
    }

    /**
     * Get public_mint
     *
     * @return bool|null
     */
    public function getPublicMint(): ?bool {
        return $this->_data["public_mint"];
    }

    /**
     * Set public_mint
     * 
     * @param bool|null $public_mint True if the contract is publicMint type. False by default.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPublicMint(?bool $public_mint) {
        return $this->_set("public_mint", $public_mint);
    }

    /**
     * Get fee_currency
     *
     * @return string|null
     */
    public function getFeeCurrency(): ?string {
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
