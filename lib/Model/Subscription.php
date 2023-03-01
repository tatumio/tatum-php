<?php

/**
 * Subscription Model
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
 * Subscription Model
 */
class Subscription extends AbstractModel {

    public const _D = null;
    public const TYPE_ADDRESS_TRANSACTION = 'ADDRESS_TRANSACTION';
    public const TYPE_CONTRACT_LOG_EVENT = 'CONTRACT_LOG_EVENT';
    public const TYPE_ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION = 'ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION';
    public const TYPE_ACCOUNT_PENDING_BLOCKCHAIN_TRANSACTION = 'ACCOUNT_PENDING_BLOCKCHAIN_TRANSACTION';
    public const TYPE_CUSTOMER_TRADE_MATCH = 'CUSTOMER_TRADE_MATCH';
    public const TYPE_CUSTOMER_PARTIAL_TRADE_MATCH = 'CUSTOMER_PARTIAL_TRADE_MATCH';
    public const TYPE_TRANSACTION_IN_THE_BLOCK = 'TRANSACTION_IN_THE_BLOCK';
    public const TYPE_KMS_FAILED_TX = 'KMS_FAILED_TX';
    public const TYPE_KMS_COMPLETED_TX = 'KMS_COMPLETED_TX';
    public const TYPE_ACCOUNT_BALANCE_LIMIT = 'ACCOUNT_BALANCE_LIMIT';
    public const TYPE_TRANSACTION_HISTORY_REPORT = 'TRANSACTION_HISTORY_REPORT';
    protected static $_name = "Subscription";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1]], 
        "attr" => ["attr", "object", null, "getAttr", "setAttr", null, ["r" => 0]]
    ];

    /**
     * Subscription
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getTypeAllowableValues(): ?array {
        return [
            self::TYPE_ADDRESS_TRANSACTION,
            self::TYPE_CONTRACT_LOG_EVENT,
            self::TYPE_ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION,
            self::TYPE_ACCOUNT_PENDING_BLOCKCHAIN_TRANSACTION,
            self::TYPE_CUSTOMER_TRADE_MATCH,
            self::TYPE_CUSTOMER_PARTIAL_TRADE_MATCH,
            self::TYPE_TRANSACTION_IN_THE_BLOCK,
            self::TYPE_KMS_FAILED_TX,
            self::TYPE_KMS_COMPLETED_TX,
            self::TYPE_ACCOUNT_BALANCE_LIMIT,
            self::TYPE_TRANSACTION_HISTORY_REPORT,
        ];
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of the subscription.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the subscription
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get attr
     *
     * @return object|null
     */
    public function getAttr(): ?object {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param object|null $attr Additional attributes based on the subscription type.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(?object $attr) {
        return $this->_set("attr", $attr);
    }
}
