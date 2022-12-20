<?php

/**
 * EthGasEstimationDetails Model
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
 * EthGasEstimationDetails Model
 * 
 * @description Detailed estimations for safe (under 30 minutes), standard (under 5 minutes) and fast (under 2 minutes) transaction times.
 */
class EthGasEstimationDetails extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "EthGasEstimationDetails";
    protected static $_definition = [
        "safe" => ["safe", "string", null, "getSafe", "setSafe"], 
        "standard" => ["standard", "string", null, "getStandard", "setStandard"], 
        "fast" => ["fast", "string", null, "getFast", "setFast"], 
        "base_fee" => ["baseFee", "string", null, "getBaseFee", "setBaseFee"]
    ];

    /**
     * EthGasEstimationDetails
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["safe"=>null, "standard"=>null, "fast"=>null, "base_fee"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['safe'])) {
            $ip[] = "'safe' can't be null";
        }
        if (is_null($this->_data['standard'])) {
            $ip[] = "'standard' can't be null";
        }
        if (is_null($this->_data['fast'])) {
            $ip[] = "'fast' can't be null";
        }
        if (is_null($this->_data['base_fee'])) {
            $ip[] = "'base_fee' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get safe
     *
     * @return string
     */
    public function getSafe(): string {
        return $this->_data["safe"];
    }

    /**
     * Set safe
     * 
     * @param string $safe Safe gas price in wei.
     * @return $this
     */
    public function setSafe(string $safe) {
        $this->_data['safe'] = $safe;

        return $this;
    }

    /**
     * Get standard
     *
     * @return string
     */
    public function getStandard(): string {
        return $this->_data["standard"];
    }

    /**
     * Set standard
     * 
     * @param string $standard Standard gas price in wei.
     * @return $this
     */
    public function setStandard(string $standard) {
        $this->_data['standard'] = $standard;

        return $this;
    }

    /**
     * Get fast
     *
     * @return string
     */
    public function getFast(): string {
        return $this->_data["fast"];
    }

    /**
     * Set fast
     * 
     * @param string $fast Fast gas price in wei.
     * @return $this
     */
    public function setFast(string $fast) {
        $this->_data['fast'] = $fast;

        return $this;
    }

    /**
     * Get base_fee
     *
     * @return string
     */
    public function getBaseFee(): string {
        return $this->_data["base_fee"];
    }

    /**
     * Set base_fee
     * 
     * @param string $base_fee Base fee for EIP-1559 transactions in wei.
     * @return $this
     */
    public function setBaseFee(string $base_fee) {
        $this->_data['base_fee'] = $base_fee;

        return $this;
    }
}