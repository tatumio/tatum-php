<?php

/**
 * MintNftTron Model
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
 * MintNftTron Model
 * 
 * @description <p>The <code>MintNftTron</code> schema lets you mint NFTs natively on TRON and sign the transaction with your private key.<br/>For more information, see \"Minting NFTs natively on a blockchain\" in <a href=\"#operation/NftMintErc721\">Mint an NFT</a>.</p><br/>
 */
class MintNftTron extends AbstractModel {

    public const _D = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "MintNftTron";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null, ["r" => 1, "xl" => 78]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 256]], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null, ["r" => 1]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "author_addresses" => ["authorAddresses", "string[]", null, "getAuthorAddresses", "setAuthorAddresses", null, ["r" => 0, "c" => 1]], 
        "cashback_values" => ["cashbackValues", "string[]", null, "getCashbackValues", "setCashbackValues", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * MintNftTron
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
            self::CHAIN_TRON,
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
     * @param string $to The blockchain address to send the NFT to
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address The blockchain address of the smart contract to build the NFT on
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get token_id
     *
     * @return string|null
     */
    public function getTokenId(): ?string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id The ID of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(string $token_id) {
        return $this->_set("token_id", $token_id);
    }

    /**
     * Get url
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
    }

    /**
     * Get fee_limit
     *
     * @return float|null
     */
    public function getFeeLimit(): ?float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit The maximum amount to be paid as the transaction fee (in TRX)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        return $this->_set("fee_limit", $fee_limit);
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
     * @param string $from_private_key The private key of the blockchain address that will pay the fee for the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }

    /**
     * Get author_addresses
     *
     * @return string[]|null
     */
    public function getAuthorAddresses(): ?array {
        return $this->_data["author_addresses"];
    }

    /**
     * Set author_addresses
     * 
     * @param string[]|null $author_addresses The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, TRX
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorAddresses(?array $author_addresses) {
        return $this->_set("author_addresses", $author_addresses);
    }

    /**
     * Get cashback_values
     *
     * @return string[]|null
     */
    public function getCashbackValues(): ?array {
        return $this->_data["cashback_values"];
    }

    /**
     * Set cashback_values
     * 
     * @param string[]|null $cashback_values The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCashbackValues(?array $cashback_values) {
        return $this->_set("cashback_values", $cashback_values);
    }
}
