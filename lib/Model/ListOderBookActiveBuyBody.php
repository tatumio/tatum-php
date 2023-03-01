<?php

/**
 * ListOderBookActiveBuyBody Model
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
 * ListOderBookActiveBuyBody Model
 */
class ListOderBookActiveBuyBody extends AbstractModel {

    public const _D = null;
    public const TRADE_TYPE_FUTURE_BUY = 'FUTURE_BUY';
    public const TRADE_TYPE_BUY = 'BUY';
    public const SORT_PRICE_ASC = 'PRICE_ASC';
    public const SORT_PRICE_DESC = 'PRICE_DESC';
    public const SORT_CREATED_ASC = 'CREATED_ASC';
    public const SORT_CREATED_DESC = 'CREATED_DESC';
    public const SORT_AMOUNT_ASC = 'AMOUNT_ASC';
    public const SORT_AMOUNT_DESC = 'AMOUNT_DESC';
    public const SORT_FILL_ASC = 'FILL_ASC';
    public const SORT_FILL_DESC = 'FILL_DESC';
    public const SORT_FEE_ASC = 'FEE_ASC';
    public const SORT_FEE_DESC = 'FEE_DESC';
    protected static $_name = "ListOderBookActiveBuyBody";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "customer_id" => ["customerId", "string", null, "getCustomerId", "setCustomerId", null, ["r" => 0]], 
        "page_size" => ["pageSize", "float", null, "getPageSize", "setPageSize", null, ["r" => 1, "n" => [1], "x" => [50]]], 
        "offset" => ["offset", "float", null, "getOffset", "setOffset", null, ["r" => 0]], 
        "pair" => ["pair", "string", null, "getPair", "setPair", null, ["r" => 0, "p" => "/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", "nl" => 3, "xl" => 30]], 
        "count" => ["count", "bool", null, "getCount", "setCount", null, ["r" => 0]], 
        "trade_type" => ["tradeType", "string", null, "getTradeType", "setTradeType", null, ["r" => 0, "e" => 1]], 
        "amount" => ["amount", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getAmount", "setAmount", null, ["r" => 0, "c" => 1]], 
        "fill" => ["fill", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getFill", "setFill", null, ["r" => 0, "c" => 1]], 
        "price" => ["price", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getPrice", "setPrice", null, ["r" => 0, "c" => 1]], 
        "created" => ["created", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getCreated", "setCreated", null, ["r" => 0, "c" => 1]], 
        "sort" => ["sort", "string[]", null, "getSort", "setSort", null, ["r" => 0, "e" => 1, "c" => 1]]
    ];

    /**
     * ListOderBookActiveBuyBody
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
    public function getTradeTypeAllowableValues(): ?array {
        return [
            self::TRADE_TYPE_FUTURE_BUY,
            self::TRADE_TYPE_BUY,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getSortAllowableValues(): ?array {
        return [
            self::SORT_PRICE_ASC,
            self::SORT_PRICE_DESC,
            self::SORT_CREATED_ASC,
            self::SORT_CREATED_DESC,
            self::SORT_AMOUNT_ASC,
            self::SORT_AMOUNT_DESC,
            self::SORT_FILL_ASC,
            self::SORT_FILL_DESC,
            self::SORT_FEE_ASC,
            self::SORT_FEE_DESC,
        ];
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
     * @param string|null $id Account ID. If present, list current active sell trades for that account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get customer_id
     *
     * @return string|null
     */
    public function getCustomerId(): ?string {
        return $this->_data["customer_id"];
    }

    /**
     * Set customer_id
     * 
     * @param string|null $customer_id Customer ID. If present, list current active buy trades for that customer.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustomerId(?string $customer_id) {
        return $this->_set("customer_id", $customer_id);
    }

    /**
     * Get page_size
     *
     * @return float|null
     */
    public function getPageSize(): ?float {
        return $this->_data["page_size"];
    }

    /**
     * Set page_size
     * 
     * @param float $page_size Max number of items per page is 50.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageSize(float $page_size) {
        return $this->_set("page_size", $page_size);
    }

    /**
     * Get offset
     *
     * @return float|null
     */
    public function getOffset(): ?float {
        return $this->_data["offset"];
    }

    /**
     * Set offset
     * 
     * @param float|null $offset Offset to obtain next page of the data.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOffset(?float $offset) {
        return $this->_set("offset", $offset);
    }

    /**
     * Get pair
     *
     * @return string|null
     */
    public function getPair(): ?string {
        return $this->_data["pair"];
    }

    /**
     * Set pair
     * 
     * @param string|null $pair Trade pair. If present, list current active sell trades for that pair.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPair(?string $pair) {
        return $this->_set("pair", $pair);
    }

    /**
     * Get count
     *
     * @return bool|null
     */
    public function getCount(): ?bool {
        return $this->_data["count"];
    }

    /**
     * Set count
     * 
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCount(?bool $count) {
        return $this->_set("count", $count);
    }

    /**
     * Get trade_type
     *
     * @return string|null
     */
    public function getTradeType(): ?string {
        return $this->_data["trade_type"];
    }

    /**
     * Set trade_type
     * 
     * @param string|null $trade_type Trade type.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTradeType(?string $trade_type) {
        return $this->_set("trade_type", $trade_type);
    }

    /**
     * Get amount
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getAmount(): ?array {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $amount Amount of the trade. AND is used between filter options.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?array $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get fill
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getFill(): ?array {
        return $this->_data["fill"];
    }

    /**
     * Set fill
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $fill Fill of the trade. AND is used between filter options.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFill(?array $fill) {
        return $this->_set("fill", $fill);
    }

    /**
     * Get price
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getPrice(): ?array {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $price Price of the trade. AND is used between filter options.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrice(?array $price) {
        return $this->_set("price", $price);
    }

    /**
     * Get created
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getCreated(): ?array {
        return $this->_data["created"];
    }

    /**
     * Set created
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $created Created date of the trade. AND is used between filter options.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreated(?array $created) {
        return $this->_set("created", $created);
    }

    /**
     * Get sort
     *
     * @return string[]|null
     */
    public function getSort(): ?array {
        return $this->_data["sort"];
    }

    /**
     * Set sort
     * 
     * @param string[]|null $sort Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSort(?array $sort) {
        return $this->_set("sort", $sort);
    }
}
