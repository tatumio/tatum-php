<?php

/**
 * FeeAndChange Model
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
 * FeeAndChange Model
 */
class FeeAndChange extends AbstractModel {

    public const _D = null;
    protected static $_name = "FeeAndChange";
    protected static $_definition = [
        "change_address" => ["changeAddress", "string", null, "getChangeAddress", "setChangeAddress", null, ["r" => 1]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0]]
    ];

    /**
     * FeeAndChange
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get change_address
     *
     * @return string
     */
    public function getChangeAddress(): ?string {
        return $this->_data["change_address"];
    }

    /**
     * Set change_address
     * 
     * @param string $change_address Address, where unspent funds will be transferred.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChangeAddress(string $change_address) {
        return $this->_set("change_address", $change_address);
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee to be paid.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }
}
