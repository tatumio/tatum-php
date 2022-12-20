<?php

/**
 * Data Model
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

use InvalidArgumentException as IAE;

/**
 * Data Model
 */
class Data extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Data";
    protected static $_definition = [
        "data" => ["data", "\Tatum\Model\DataData", null, "getData", "setData"]
    ];

    /**
     * Data
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["data"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['data'])) {
            $ip[] = "'data' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get data
     *
     * @return \Tatum\Model\DataData
     */
    public function getData(): \Tatum\Model\DataData {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\DataData $data data
     * @return $this
     */
    public function setData(\Tatum\Model\DataData $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}