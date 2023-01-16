<?php

/**
 * GasPumpTrxOut Model
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
 * GasPumpTrxOut Model
 */
class GasPumpTrxOut extends AbstractModel {

    public const _D = null;
    protected static $_name = "GasPumpTrxOut";
    protected static $_definition = [
        "valid" => ["valid", "\Tatum\Model\ValidGasPumpAddress[]", null, "getValid", "setValid", null, ["r" => 0, "c" => 1]], 
        "invalid" => ["invalid", "\Tatum\Model\InvalidGasPumpAddress[]", null, "getInvalid", "setInvalid", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * GasPumpTrxOut
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get valid
     *
     * @return \Tatum\Model\ValidGasPumpAddress[]|null
     */
    public function getValid(): ?array {
        return $this->_data["valid"];
    }

    /**
     * Set valid
     * 
     * @param \Tatum\Model\ValidGasPumpAddress[]|null $valid Activated gas pump addresses
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValid(?array $valid) {
        return $this->_set("valid", $valid);
    }

    /**
     * Get invalid
     *
     * @return \Tatum\Model\InvalidGasPumpAddress[]|null
     */
    public function getInvalid(): ?array {
        return $this->_data["invalid"];
    }

    /**
     * Set invalid
     * 
     * @param \Tatum\Model\InvalidGasPumpAddress[]|null $invalid Not activated gas pump addresses
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInvalid(?array $invalid) {
        return $this->_set("invalid", $invalid);
    }
}