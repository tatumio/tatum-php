<?php

/**
 * MintNftMinter Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * MintNftMinter Model
 * 
 * @description <p>The <code>MintNftMinter</code> schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using the <b>NTF minter</b>, a special blockchain address provided by Tatum that will cover the minting fees.<br/>For more information, see \"Use your own smart contract to mint NFTs\" in <a href=\"#operation/NftMintErc721\">Mint an NFT</a>.</p><br/>
 */
class MintNftMinter extends AbstractModel {

    public const _D = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_ONE = 'ONE';
    protected static $_name = "MintNftMinter";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "minter" => ["minter", "string", null, "getMinter", "setMinter", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null, ["r" => 1, "xl" => 78]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 256]]
    ];

    /**
     * MintNftMinter
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
            self::CHAIN_BSC,
            self::CHAIN_CELO,
            self::CHAIN_ETH,
            self::CHAIN_KLAY,
            self::CHAIN_MATIC,
            self::CHAIN_ONE,
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
     * @param string $contract_address The blockchain address of the smart contract to build the NFT on
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get minter
     *
     * @return string
     */
    public function getMinter(): string {
        return $this->_data["minter"];
    }

    /**
     * Set minter
     * 
     * @param string $minter The blockchain address of the Tatum NFT minter; this is the address that you added as an NFT minter to your NFT smart contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMinter(string $minter) {
        return $this->_set("minter", $minter);
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
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
     * @return string
     */
    public function getUrl(): string {
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
}