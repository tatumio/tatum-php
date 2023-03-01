<?php

/**
 * MintNftExpressSolana Model
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
 * MintNftExpressSolana Model
 * 
 * @description <p>The <code>MintNftExpressSolana</code> schema lets you mint NFTs on Solana using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.<br/>For more information, see \"Use the pre-built smart contract provided by Tatum to mint NFTs\" in <a href=\"#operation/NftMintErc721\">Mint an NFT</a>.</p><br/>
 */
class MintNftExpressSolana extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "MintNftExpressSolana";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 43, "xl" => 44]], 
        "metadata" => ["metadata", "\Tatum\Model\SolanaNftExpressMetadata", null, "getMetadata", "setMetadata", null, ["r" => 1]]
    ];

    /**
     * MintNftExpressSolana
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
            self::CHAIN_SOL,
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
     * @return string
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
     * Get metadata
     *
     * @return \Tatum\Model\SolanaNftExpressMetadata
     */
    public function getMetadata(): ?\Tatum\Model\SolanaNftExpressMetadata {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param \Tatum\Model\SolanaNftExpressMetadata $metadata metadata
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMetadata(\Tatum\Model\SolanaNftExpressMetadata $metadata) {
        return $this->_set("metadata", $metadata);
    }
}
