<?php

/**
 * CreateTronTrc10BlockchainKMS Model
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
 * CreateTronTrc10BlockchainKMS Model
 */
class CreateTronTrc10BlockchainKMS extends AbstractModel {

    public const _D = null;
    protected static $_name = "CreateTronTrc10BlockchainKMS";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "abbreviation" => ["abbreviation", "string", null, "getAbbreviation", "setAbbreviation", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "description" => ["description", "string", null, "getDescription", "setDescription", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "total_supply" => ["totalSupply", "float", null, "getTotalSupply", "setTotalSupply", null, ["r" => 1, "n" => [0]]], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals", null, ["r" => 1, "n" => [0], "x" => [5]]]
    ];

    /**
     * CreateTronTrc10BlockchainKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Sender address of TRON account in Base58 format.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
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
     * Get recipient
     *
     * @return string
     */
    public function getRecipient(): string {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string $recipient Recipient address of created TRC 10 tokens.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipient(string $recipient) {
        return $this->_set("recipient", $recipient);
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
     * @param string $name Name of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(string $name) {
        return $this->_set("name", $name);
    }

    /**
     * Get abbreviation
     *
     * @return string
     */
    public function getAbbreviation(): string {
        return $this->_data["abbreviation"];
    }

    /**
     * Set abbreviation
     * 
     * @param string $abbreviation Abbreviation of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAbbreviation(string $abbreviation) {
        return $this->_set("abbreviation", $abbreviation);
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string $description Description of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDescription(string $description) {
        return $this->_set("description", $description);
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
     * @param string $url URL of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
    }

    /**
     * Get total_supply
     *
     * @return float
     */
    public function getTotalSupply(): float {
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
     * @return float
     */
    public function getDecimals(): float {
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