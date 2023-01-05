<?php

/**
 * GenerateCustodialWalletBatchPayer Model
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
 * GenerateCustodialWalletBatchPayer Model
 */
class GenerateCustodialWalletBatchPayer extends AbstractModel {

    public const _D = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_CELO = 'CELO';
    protected static $_name = "GenerateCustodialWalletBatchPayer";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "fees_covered" => ["feesCovered", "bool", null, "getFeesCovered", "setFeesCovered", null, ["r" => 1]], 
        "batch_count" => ["batchCount", "float", null, "getBatchCount", "setBatchCount", null, ["r" => 1, "n" => [0], "x" => [270]]], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner", null, ["r" => 1, "nl" => 42, "xl" => 43]]
    ];

    /**
     * GenerateCustodialWalletBatchPayer
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
            self::CHAIN_ETH,
            self::CHAIN_MATIC,
            self::CHAIN_BSC,
            self::CHAIN_ONE,
            self::CHAIN_CELO,
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
     * @param string $chain Blockchain to work with.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get fees_covered
     *
     * @return bool
     */
    public function getFeesCovered(): bool {
        return $this->_data["fees_covered"];
    }

    /**
     * Set fees_covered
     * 
     * @param bool $fees_covered If set to true, blockchain fees will be covered from credits.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeesCovered(bool $fees_covered) {
        return $this->_set("fees_covered", $fees_covered);
    }

    /**
     * Get batch_count
     *
     * @return float
     */
    public function getBatchCount(): float {
        return $this->_data["batch_count"];
    }

    /**
     * Set batch_count
     * 
     * @param float $batch_count Number of addresses to generate.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBatchCount(float $batch_count) {
        return $this->_set("batch_count", $batch_count);
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string $owner Owner of the addresses.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwner(string $owner) {
        return $this->_set("owner", $owner);
    }
}
