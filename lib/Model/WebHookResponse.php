<?php

/**
 * WebHook_response Model
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
 * WebHook_response Model
 * 
 * @description Response from the server in case the webhook was unsuccessful
 */
class WebHookResponse extends AbstractModel {

    public const _D = null;
    protected static $_name = "WebHook_response";
    protected static $_definition = [
        "code" => ["code", "float", null, "getCode", "setCode", null, ["r" => 0]], 
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 0]], 
        "network_error" => ["networkError", "bool", null, "getNetworkError", "setNetworkError", null, ["r" => 1]]
    ];

    /**
     * WebHookResponse
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get code
     *
     * @return float|null
     */
    public function getCode(): ?float {
        return $this->_data["code"];
    }

    /**
     * Set code
     * 
     * @param float|null $code HTTP Status
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCode(?float $code) {
        return $this->_set("code", $code);
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
     * @param string|null $data Response from the server
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?string $data) {
        return $this->_set("data", $data);
    }

    /**
     * Get network_error
     *
     * @return bool
     */
    public function getNetworkError(): ?bool {
        return $this->_data["network_error"];
    }

    /**
     * Set network_error
     * 
     * @param bool $network_error Flag indicating whether an error has been caused by the network
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNetworkError(bool $network_error) {
        return $this->_set("network_error", $network_error);
    }
}
