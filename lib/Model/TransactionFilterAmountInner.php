<?php

/**
 * TransactionFilter_amount_inner Model
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
 * TransactionFilter_amount_inner Model
 */
class TransactionFilterAmountInner extends AbstractModel {

    public const _D = null;
    public const OP_GTE = 'gte';
    public const OP_LTE = 'lte';
    public const OP_GT = 'gt';
    public const OP_LT = 'lt';
    public const OP_EQ = 'eq';
    public const OP_NEQ = 'neq';
    protected static $_name = "TransactionFilter_amount_inner";
    protected static $_definition = [
        "op" => ["op", "string", null, "getOp", "setOp", null, ["r" => 1, "e" => 1]], 
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 1]]
    ];

    /**
     * TransactionFilterAmountInner
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
    public function getOpAllowableValues(): array {
        return [
            self::OP_GTE,
            self::OP_LTE,
            self::OP_GT,
            self::OP_LT,
            self::OP_EQ,
            self::OP_NEQ,
        ];
    }

    /**
     * Get op
     *
     * @return string
     */
    public function getOp(): string {
        return $this->_data["op"];
    }

    /**
     * Set op
     * 
     * @param string $op Filtering operation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOp(string $op) {
        return $this->_set("op", $op);
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue(): string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string $value Value of the operation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(string $value) {
        return $this->_set("value", $value);
    }
}