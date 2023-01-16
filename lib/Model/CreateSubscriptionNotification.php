<?php

/**
 * CreateSubscriptionNotification Model
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
 * CreateSubscriptionNotification Model
 */
class CreateSubscriptionNotification extends AbstractModel {

    public const _D = null;
    public const TYPE_ADDRESS_TRANSACTION = 'ADDRESS_TRANSACTION';
    protected static $_name = "CreateSubscriptionNotification";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "attr" => ["attr", "\Tatum\Model\CreateSubscriptionNotificationAttr", null, "getAttr", "setAttr", null, ["r" => 1]]
    ];

    /**
     * CreateSubscriptionNotification
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
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_ADDRESS_TRANSACTION,
        ];
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
     * @param string $type Type of the subscription.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\CreateSubscriptionNotificationAttr
     */
    public function getAttr(): \Tatum\Model\CreateSubscriptionNotificationAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\CreateSubscriptionNotificationAttr $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(\Tatum\Model\CreateSubscriptionNotificationAttr $attr) {
        return $this->_set("attr", $attr);
    }
}