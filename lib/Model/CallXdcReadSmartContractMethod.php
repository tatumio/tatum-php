<?php

/**
 * CallXdcReadSmartContractMethod Model
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
 * CallXdcReadSmartContractMethod Model
 */
class CallXdcReadSmartContractMethod extends AbstractModel {

    public const _D = null;
    protected static $_name = "CallXdcReadSmartContractMethod";
    protected static $_definition = [
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 42, "xl" => 43]], 
        "method_name" => ["methodName", "string", null, "getMethodName", "setMethodName", null, ["r" => 1, "nl" => 1, "xl" => 500]], 
        "method_abi" => ["methodABI", "object", null, "getMethodAbi", "setMethodAbi", null, ["r" => 1]], 
        "params" => ["params", "string[]", null, "getParams", "setParams", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * CallXdcReadSmartContractMethod
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string $contract_address The address of the smart contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get method_name
     *
     * @return string|null
     */
    public function getMethodName(): ?string {
        return $this->_data["method_name"];
    }

    /**
     * Set method_name
     * 
     * @param string $method_name Name of the method to invoke on smart contract.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMethodName(string $method_name) {
        return $this->_set("method_name", $method_name);
    }

    /**
     * Get method_abi
     *
     * @return object|null
     */
    public function getMethodAbi(): ?object {
        return $this->_data["method_abi"];
    }

    /**
     * Set method_abi
     * 
     * @param object $method_abi ABI of the method to invoke.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMethodAbi(object $method_abi) {
        return $this->_set("method_abi", $method_abi);
    }

    /**
     * Get params
     *
     * @return array|null
     */
    public function getParams(): ?array {
        return $this->_data["params"];
    }

    /**
     * Set params
     * 
     * @param string[] $params Parameters of the method to be invoked.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setParams(array $params) {
        return $this->_set("params", $params);
    }
}
