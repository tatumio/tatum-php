<?php

/**
 * CreateTronTrc20Blockchain Model
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
 * CreateTronTrc20Blockchain Model
 */
class CreateTronTrc20Blockchain extends AbstractModel {

    public const _D = null;
    protected static $_name = "CreateTronTrc20Blockchain";
    protected static $_definition = [
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "total_supply" => ["totalSupply", "float", null, "getTotalSupply", "setTotalSupply", null, ["r" => 1, "n" => [0]]], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals", null, ["r" => 1, "n" => [0], "x" => [30]]]
    ];

    /**
     * CreateTronTrc20Blockchain
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string $from_private_key Private key of the address, from which the TRX will be sent.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }

    /**
     * Get recipient
     *
     * @return string|null
     */
    public function getRecipient(): ?string {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string $recipient Recipient address of created TRC20 tokens.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipient(string $recipient) {
        return $this->_set("recipient", $recipient);
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
     * @param string $name Name of the token.
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
     * @param string $symbol Symbol of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSymbol(string $symbol) {
        return $this->_set("symbol", $symbol);
    }

    /**
     * Get total_supply
     *
     * @return float|null
     */
    public function getTotalSupply(): ?float {
        return $this->_data["total_supply"];
    }

    /**
     * Set total_supply
     * 
     * @param float $total_supply Total supply of the tokens.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotalSupply(float $total_supply) {
        return $this->_set("total_supply", $total_supply);
    }

    /**
     * Get decimals
     *
     * @return float|null
     */
    public function getDecimals(): ?float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float $decimals Number of decimal places of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDecimals(float $decimals) {
        return $this->_set("decimals", $decimals);
    }
}
