<?php

/**
 * BuyAssetOnMarketplaceTronKMS Model
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
 * BuyAssetOnMarketplaceTronKMS Model
 */
class BuyAssetOnMarketplaceTronKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "BuyAssetOnMarketplaceTronKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "buyer" => ["buyer", "string", null, "getBuyer", "setBuyer", null, ["r" => 0, "nl" => 42, "xl" => 42]], 
        "listing_id" => ["listingId", "string", null, "getListingId", "setListingId", null, ["r" => 1, "nl" => 1, "xl" => 200]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address", null, ["r" => 0, "nl" => 34, "xl" => 34]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 0, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 0, "nl" => 64, "xl" => 64]], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null, ["r" => 1, "n" => [0]]]
    ];

    /**
     * BuyAssetOnMarketplaceTronKMS
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
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Address of the marketplace smart contract.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Address of the recipient of the fee for the trade.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get buyer
     *
     * @return string|null
     */
    public function getBuyer(): ?string {
        return $this->_data["buyer"];
    }

    /**
     * Set buyer
     * 
     * @param string|null $buyer In case of the ERC20 listing, it's possible to buy on behalf of someone else. This value is the address of the buyer, which should approve spending of the ERC20 tokens for the Marketplace contract. This could be used for a buying from the custodial wallet address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBuyer(?string $buyer) {
        return $this->_set("buyer", $buyer);
    }

    /**
     * Get listing_id
     *
     * @return string
     */
    public function getListingId(): ?string {
        return $this->_data["listing_id"];
    }

    /**
     * Set listing_id
     * 
     * @param string $listing_id ID of the listing. It's up to the developer to generate unique ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setListingId(string $listing_id) {
        return $this->_set("listing_id", $listing_id);
    }

    /**
     * Get signature_id
     *
     * @return string
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
     * Get erc20_address
     *
     * @return string|null
     */
    public function getErc20Address(): ?string {
        return $this->_data["erc20_address"];
    }

    /**
     * Set erc20_address
     * 
     * @param string|null $erc20_address Optional address of the TRC20 token, which will be used as a selling currency of the NFT.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        return $this->_set("erc20_address", $erc20_address);
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
     * @param string|null $amount Amount of the assets to be sent. For ERC-721 tokens, enter 1.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?string $amount) {
        return $this->_set("amount", $amount);
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
     * @param string|null $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(?string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
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
}
