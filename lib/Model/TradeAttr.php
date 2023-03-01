<?php

/**
 * Trade_attr Model
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
 * Trade_attr Model
 * 
 * @description Additional attributes for the future type.
 */
class TradeAttr extends AbstractModel {

    public const _D = null;
    protected static $_name = "Trade_attr";
    protected static $_definition = [
        "seal_date" => ["sealDate", "float", null, "getSealDate", "setSealDate", null, ["r" => 1, "n" => [0]]], 
        "percent_block" => ["percentBlock", "float", null, "getPercentBlock", "setPercentBlock", null, ["r" => 0, "n" => [0], "x" => [100]]], 
        "percent_penalty" => ["percentPenalty", "float", null, "getPercentPenalty", "setPercentPenalty", null, ["r" => 0, "n" => [0], "x" => [100]]]
    ];

    /**
     * TradeAttr
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get seal_date
     *
     * @return float
     */
    public function getSealDate(): ?float {
        return $this->_data["seal_date"];
    }

    /**
     * Set seal_date
     * 
     * @param float $seal_date Time in UTC when the future will be filled.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSealDate(float $seal_date) {
        return $this->_set("seal_date", $seal_date);
    }

    /**
     * Get percent_block
     *
     * @return float|null
     */
    public function getPercentBlock(): ?float {
        return $this->_data["percent_block"];
    }

    /**
     * Set percent_block
     * 
     * @param float|null $percent_block Percentage of the future amount which the selling or buying account must have available for the future’s creation. This amount will be blocked until the future is filled or expires.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPercentBlock(?float $percent_block) {
        return $this->_set("percent_block", $percent_block);
    }

    /**
     * Get percent_penalty
     *
     * @return float|null
     */
    public function getPercentPenalty(): ?float {
        return $this->_data["percent_penalty"];
    }

    /**
     * Set percent_penalty
     * 
     * @param float|null $percent_penalty If one of the parties doesn’t have the full amount of the future at the time of expiration filled, the party will be penalized.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPercentPenalty(?float $percent_penalty) {
        return $this->_set("percent_penalty", $percent_penalty);
    }
}
