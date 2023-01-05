<?php

/**
 * MintNftExpressAlgorand Model
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
 * MintNftExpressAlgorand Model
 * 
 * @description <p>The <code>MintNftExpressAlgorand</code> schema lets you mint NFTs on Algorand using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.<br/>For more information, see \"Use the pre-built smart contract provided by Tatum to mint NFTs\" in <a href=\"#operation/NftMintErc721\">Mint an NFT</a>.</p><br/>
 */
class MintNftExpressAlgorand extends AbstractModel {

    public const _D = null;
    public const CHAIN_ALGO = 'ALGO';
    protected static $_name = "MintNftExpressAlgorand";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 256]], 
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1, "nl" => 1, "xl" => 32]], 
        "attr" => ["attr", "\Tatum\Model\MintNftExpressAlgorandAttr", null, "getAttr", "setAttr", null, ["r" => 0]]
    ];

    /**
     * MintNftExpressAlgorand
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
            self::CHAIN_ALGO,
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

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name The name of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(string $name) {
        return $this->_set("name", $name);
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\MintNftExpressAlgorandAttr|null
     */
    public function getAttr(): ?\Tatum\Model\MintNftExpressAlgorandAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\MintNftExpressAlgorandAttr|null $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(?\Tatum\Model\MintNftExpressAlgorandAttr $attr) {
        return $this->_set("attr", $attr);
    }
}
