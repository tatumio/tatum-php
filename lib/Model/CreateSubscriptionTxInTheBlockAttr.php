<?php

/**
 * CreateSubscriptionTxInTheBlock_attr Model
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
 * CreateSubscriptionTxInTheBlock_attr Model
 * 
 * @description Additional attributes based on the subscription type.
 */
class CreateSubscriptionTxInTheBlockAttr extends AbstractModel {

    public const _D = null;
    protected static $_name = "CreateSubscriptionTxInTheBlock_attr";
    protected static $_definition = [
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 500]]
    ];

    /**
     * CreateSubscriptionTxInTheBlockAttr
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get url
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url URL of the endpoint, where HTTP POST request will be sent, when outgoing ledger transaction is included in the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
    }
}
