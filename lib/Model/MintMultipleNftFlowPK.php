<?php

/**
 * MintMultipleNftFlowPK Model
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
 * MintMultipleNftFlowPK Model
 */
class MintMultipleNftFlowPK extends AbstractModel {

    public const _D = null;
    public const CHAIN_FLOW = 'FLOW';
    protected static $_name = "MintMultipleNftFlowPK";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "to" => ["to", "string[]", null, "getTo", "setTo", null, ["r" => 1, "c" => 1]], 
        "url" => ["url", "string[]", null, "getUrl", "setUrl", null, ["r" => 1, "c" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 36, "xl" => 36]], 
        "account" => ["account", "string", null, "getAccount", "setAccount", null, ["r" => 1, "nl" => 18, "xl" => 18]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]]
    ];

    /**
     * MintMultipleNftFlowPK
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
            self::CHAIN_FLOW,
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
     * @return array|null
     */
    public function getTo(): ?array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string[] $to Blockchain address to send NFT token to.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(array $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get url
     *
     * @return array|null
     */
    public function getUrl(): ?array {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string[] $url The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(array $url) {
        return $this->_set("url", $url);
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
     * @param string $contract_address Address of NFT token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get account
     *
     * @return string|null
     */
    public function getAccount(): ?string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string $account Blockchain address of the sender account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccount(string $account) {
        return $this->_set("account", $account);
    }

    /**
     * Get private_key
     *
     * @return string|null
     */
    public function getPrivateKey(): ?string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key Private key of sender address. Private key, mnemonic and index or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
