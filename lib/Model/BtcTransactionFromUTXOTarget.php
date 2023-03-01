<?php

/**
 * BtcTransactionFromUTXOTarget Model
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
 * BtcTransactionFromUTXOTarget Model
 */
class BtcTransactionFromUTXOTarget extends AbstractModel {

    public const _D = null;
    protected static $_name = "BtcTransactionFromUTXOTarget";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "value" => ["value", "float", null, "getValue", "setValue", null, ["r" => 1, "n" => [0]]]
    ];

    /**
     * BtcTransactionFromUTXOTarget
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address The blockchain address to receive the assets
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get value
     *
     * @return float|null
     */
    public function getValue(): ?float {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param float $value The amount to receive (in BTC)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(float $value) {
        return $this->_set("value", $value);
    }
}
