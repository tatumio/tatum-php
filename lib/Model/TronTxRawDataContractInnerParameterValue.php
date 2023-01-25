<?php

/**
 * TronTx_rawData_contract_inner_parameter_value Model
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
 * TronTx_rawData_contract_inner_parameter_value Model
 */
class TronTxRawDataContractInnerParameterValue extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronTx_rawData_contract_inner_parameter_value";
    protected static $_definition = [
        "data" => ["data", "string", 'hex', "getData", "setData", null, ["r" => 0]], 
        "amount" => ["amount", "float", null, "getAmount", "setAmount", null, ["r" => 0]], 
        "owner_address" => ["owner_address", "string", null, "getOwnerAddress", "setOwnerAddress", null, ["r" => 0]], 
        "to_address" => ["to_address", "string", null, "getToAddress", "setToAddress", null, ["r" => 0]], 
        "owner_address_base58" => ["ownerAddressBase58", "string", null, "getOwnerAddressBase58", "setOwnerAddressBase58", null, ["r" => 0]], 
        "to_address_base58" => ["toAddressBase58", "string", null, "getToAddressBase58", "setToAddressBase58", null, ["r" => 0]]
    ];

    /**
     * TronTxRawDataContractInnerParameterValue
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data The amount transferred within the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?string $data) {
        return $this->_set("data", $data);
    }

    /**
     * Get amount
     *
     * @return float|null
     */
    public function getAmount(): ?float {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param float|null $amount The amount transferred within the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?float $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get owner_address
     *
     * @return string|null
     */
    public function getOwnerAddress(): ?string {
        return $this->_data["owner_address"];
    }

    /**
     * Set owner_address
     * 
     * @param string|null $owner_address Address of the sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwnerAddress(?string $owner_address) {
        return $this->_set("owner_address", $owner_address);
    }

    /**
     * Get to_address
     *
     * @return string|null
     */
    public function getToAddress(): ?string {
        return $this->_data["to_address"];
    }

    /**
     * Set to_address
     * 
     * @param string|null $to_address Address of the recipient.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setToAddress(?string $to_address) {
        return $this->_set("to_address", $to_address);
    }

    /**
     * Get owner_address_base58
     *
     * @return string|null
     */
    public function getOwnerAddressBase58(): ?string {
        return $this->_data["owner_address_base58"];
    }

    /**
     * Set owner_address_base58
     * 
     * @param string|null $owner_address_base58 Address of the sender in Base58 encoding.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwnerAddressBase58(?string $owner_address_base58) {
        return $this->_set("owner_address_base58", $owner_address_base58);
    }

    /**
     * Get to_address_base58
     *
     * @return string|null
     */
    public function getToAddressBase58(): ?string {
        return $this->_data["to_address_base58"];
    }

    /**
     * Set to_address_base58
     * 
     * @param string|null $to_address_base58 Address of the recipient in Base58 encoding.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setToAddressBase58(?string $to_address_base58) {
        return $this->_set("to_address_base58", $to_address_base58);
    }
}
