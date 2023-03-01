<?php

/**
 * Error400_data_inner Model
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
 * Error400_data_inner Model
 */
class Error400DataInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "Error400_data_inner";
    protected static $_definition = [
        "target" => ["target", "array<string,mixed>", null, "getTarget", "setTarget", null, ["r" => 1, "c" => 1]], 
        "value" => ["value", "float", null, "getValue", "setValue", null, ["r" => 0]], 
        "property" => ["property", "string", null, "getProperty", "setProperty", null, ["r" => 0]], 
        "constraints" => ["constraints", "array<string,mixed>", null, "getConstraints", "setConstraints", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * Error400DataInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get target
     *
     * @return array<string,mixed>
     */
    public function getTarget(): ?array {
        return $this->_data["target"];
    }

    /**
     * Set target
     * 
     * @param array<string,mixed> $target Request object present in the body of the HTTP request
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTarget(array $target) {
        return $this->_set("target", $target);
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
     * @param float|null $value Value of the target object which validation is wrong. Can be of any data type, example here is using type number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?float $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get property
     *
     * @return string|null
     */
    public function getProperty(): ?string {
        return $this->_data["property"];
    }

    /**
     * Set property
     * 
     * @param string|null $property Property name of the target object which validation is wrong
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProperty(?string $property) {
        return $this->_set("property", $property);
    }

    /**
     * Get constraints
     *
     * @return array<string,mixed>|null
     */
    public function getConstraints(): ?array {
        return $this->_data["constraints"];
    }

    /**
     * Set constraints
     * 
     * @param array<string,mixed>|null $constraints Object of failed constraints for the target object. Key is the constraint, value is detailed description of the failed constraint.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setConstraints(?array $constraints) {
        return $this->_set("constraints", $constraints);
    }
}
