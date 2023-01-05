<?php

/**
 * CreateFutureTrade Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

/**
 * CreateFutureTrade Model
 */
class CreateFutureTrade extends AbstractModel {

    public const _D = null;
    public const TYPE_BUY = 'FUTURE_BUY';
    public const TYPE_SELL = 'FUTURE_SELL';
    protected static $_name = "CreateFutureTrade";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "price" => ["price", "string", null, "getPrice", "setPrice", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "pair" => ["pair", "string", null, "getPair", "setPair", null, ["r" => 1, "p" => "/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", "nl" => 3, "xl" => 30]], 
        "currency1_account_id" => ["currency1AccountId", "string", null, "getCurrency1AccountId", "setCurrency1AccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "currency2_account_id" => ["currency2AccountId", "string", null, "getCurrency2AccountId", "setCurrency2AccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "fee_account_id" => ["feeAccountId", "string", null, "getFeeAccountId", "setFeeAccountId", null, ["r" => 0, "nl" => 24, "xl" => 24]], 
        "fee" => ["fee", "float", null, "getFee", "setFee", null, ["r" => 0, "n" => [0], "x" => [100]]], 
        "attr" => ["attr", "\Tatum\Model\CreateFutureTradeAttr", null, "getAttr", "setAttr", null, ["r" => 1]]
    ];

    /**
     * CreateFutureTrade
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
            self::TYPE_BUY,
            self::TYPE_SELL,
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
     * @param string $type Type of future the trade, FUTURE_BUY, FUTURE_SELL
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice(): string {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param string $price Price to buy / sell
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrice(string $price) {
        return $this->_set("price", $price);
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount of the trade to be bought / sold
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get pair
     *
     * @return string
     */
    public function getPair(): string {
        return $this->_data["pair"];
    }

    /**
     * Set pair
     * 
     * @param string $pair Trading pair
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPair(string $pair) {
        return $this->_set("pair", $pair);
    }

    /**
     * Get currency1_account_id
     *
     * @return string
     */
    public function getCurrency1AccountId(): string {
        return $this->_data["currency1_account_id"];
    }

    /**
     * Set currency1_account_id
     * 
     * @param string $currency1_account_id ID of the account of the currency 1 trade currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency1AccountId(string $currency1_account_id) {
        return $this->_set("currency1_account_id", $currency1_account_id);
    }

    /**
     * Get currency2_account_id
     *
     * @return string
     */
    public function getCurrency2AccountId(): string {
        return $this->_data["currency2_account_id"];
    }

    /**
     * Set currency2_account_id
     * 
     * @param string $currency2_account_id ID of the account of the currency 2 trade currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency2AccountId(string $currency2_account_id) {
        return $this->_set("currency2_account_id", $currency2_account_id);
    }

    /**
     * Get fee_account_id
     *
     * @return string|null
     */
    public function getFeeAccountId(): ?string {
        return $this->_data["fee_account_id"];
    }

    /**
     * Set fee_account_id
     * 
     * @param string|null $fee_account_id ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeAccountId(?string $fee_account_id) {
        return $this->_set("fee_account_id", $fee_account_id);
    }

    /**
     * Get fee
     *
     * @return float|null
     */
    public function getFee(): ?float {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param float|null $fee Percentage of the trade amount to be paid as a fee.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?float $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\CreateFutureTradeAttr
     */
    public function getAttr(): \Tatum\Model\CreateFutureTradeAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\CreateFutureTradeAttr $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(\Tatum\Model\CreateFutureTradeAttr $attr) {
        return $this->_set("attr", $attr);
    }
}
