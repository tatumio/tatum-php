<?php

/**
 * EstimateFeeTransferFromCustodial Model
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
 * EstimateFeeTransferFromCustodial Model
 */
class EstimateFeeTransferFromCustodial extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_XDC = 'XDC';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_MATIC = 'MATIC';
    public const TYPE_TRANSFER_CUSTODIAL = 'TRANSFER_CUSTODIAL';
    protected static $_name = "EstimateFeeTransferFromCustodial";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "sender" => ["sender", "string", null, "getSender", "setSender", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "token_type" => ["tokenType", "float", null, "getTokenType", "setTokenType", null, ["r" => 1, "n" => [0], "x" => [3]]]
    ];

    /**
     * EstimateFeeTransferFromCustodial
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
            self::CHAIN_CELO,
            self::CHAIN_ETH,
            self::CHAIN_BSC,
            self::CHAIN_XDC,
            self::CHAIN_KLAY,
            self::CHAIN_ONE,
            self::CHAIN_MATIC,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_TRANSFER_CUSTODIAL,
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
     * @param string $chain Blockchain to estimate fee for.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender(): string {
        return $this->_data["sender"];
    }

    /**
     * Set sender
     * 
     * @param string $sender Sender address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSender(string $sender) {
        return $this->_set("sender", $sender);
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
     * @param string $recipient Blockchain address to send assets
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipient(string $recipient) {
        return $this->_set("recipient", $recipient);
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
     * @param string $contract_address Contract address of the token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get custodial_address
     *
     * @return string
     */
    public function getCustodialAddress(): string {
        return $this->_data["custodial_address"];
    }

    /**
     * Set custodial_address
     * 
     * @param string $custodial_address Contract address of custodial wallet contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        return $this->_set("custodial_address", $custodial_address);
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent in native asset, ERC20 or ERC1155
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get token_type
     *
     * @return float
     */
    public function getTokenType(): float {
        return $this->_data["token_type"];
    }

    /**
     * Set token_type
     * 
     * @param float $token_type Type of the token to transfer from gas pump wallet. 0 - ERC20, 1 - ERC721, 2 - ERC1155, 3 - native asset
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenType(float $token_type) {
        return $this->_set("token_type", $token_type);
    }
}