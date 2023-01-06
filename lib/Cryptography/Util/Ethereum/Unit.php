<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Util\Ethereum;
!defined("TATUM-SDK") && exit();

/**
 * Ethereum units convertion utility
 */
class Unit {
    const WEI = "wei";
    const KWEI = "kwei";
    const BABBAGE = "babbage";
    const FEMTOETHER = "femtoether";
    const MWEI = "mwei";
    const LOVELACE = "lovelace";
    const PICOETHER = "picoether";
    const GWEI = "gwei";
    const SHANNON = "shannon";
    const NANOETHER = "nanoether";
    const NANO = "nano";
    const SZABO = "szabo";
    const MICROETHER = "microether";
    const MICRO = "micro";
    const FINNEY = "finney";
    const MILLIETHER = "milliether";
    const MILLI = "milli";
    const ETHER = "ether";
    const KETHER = "kether";
    const GRAND = "grand";
    const EINSTEIN = "einstein";
    const METHER = "mether";
    const GETHER = "gether";
    const TETHER = "tether";

    /**
     * Unit map
     *
     * @var array
     */
    protected $_unitMap = [
        self::WEI => "1",
        self::KWEI => "1000",
        self::BABBAGE => "1000",
        self::FEMTOETHER => "1000",
        self::MWEI => "1000000",
        self::LOVELACE => "1000000",
        self::PICOETHER => "1000000",
        self::GWEI => "1000000000",
        self::SHANNON => "1000000000",
        self::NANOETHER => "1000000000",
        self::NANO => "1000000000",
        self::SZABO => "1000000000000",
        self::MICROETHER => "1000000000000",
        self::MICRO => "1000000000000",
        self::FINNEY => "1000000000000000",
        self::MILLIETHER => "1000000000000000",
        self::MILLI => "1000000000000000",
        self::ETHER => "1000000000000000000",
        self::KETHER => "1000000000000000000000",
        self::GRAND => "1000000000000000000000",
        self::EINSTEIN => "1000000000000000000000",
        self::METHER => "1000000000000000000000000",
        self::GETHER => "1000000000000000000000000000",
        self::TETHER => "1000000000000000000000000000000"
    ];

    /**
     * Class instance
     *
     * @var Unit
     */
    protected static $_instance = null;

    /**
     * Unit utils
     */
    protected function __construct() {
    }

    /**
     * Get a Singleton instance of Ether Converter
     *
     * @return Unit
     */
    protected static function _get() {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Convert amount to Wei
     *
     * @param string $amount Amount
     * @param string $unit   Unit
     *
     * @throws \UnexpectedValueException
     * @return string
     */
    public static function fromWei(string $amount, string $unit = self::ETHER): string {
        if ($unit == self::WEI) {
            return $amount;
        }

        return bcdiv($amount, self::_get()->_getValueOfUnit($unit), self::_get()->_getDivisionScale($amount, $unit));
    }

    /**
     * Convert amount from Wei
     *
     * @param string $amount Amount
     * @param string $unit   Unit
     *
     * @throws \UnexpectedValueException
     * @return string
     */
    public static function toWei(string $amount, string $unit = self::ETHER): string {
        if ($unit == self::WEI) {
            return $amount;
        }

        return bcmul($amount, self::_get()->_getValueOfUnit($unit));
    }

    /**
     * Get unit value
     *
     * @param string $unit
     *
     * @throws \UnexpectedValueException
     * @return string
     */
    protected function _getValueOfUnit(string $unit = self::ETHER): string {
        if (!isset($this->_unitMap[$unit])) {
            $this->_throwUnitException($unit);
        }

        return $this->_unitMap[$unit];
    }

    /**
     * Get the division scale
     *
     * @param string $amount Amount
     * @param string $unit   Unit
     *
     * @throws \UnexpectedValueException
     * @return int
     */
    protected function _getDivisionScale(string $amount, string $unit): int {
        if (!isset($this->_unitMap[$unit])) {
            $this->_throwUnitException($unit);
        }

        $zeroes = substr_count($this->_unitMap[$unit], "0");
        $decimals = strlen($amount) - strpos($amount, ".") - 1;

        return $zeroes + $decimals;
    }

    /**
     * Unexcepted unit exception
     *
     * @throws \UnexpectedValueException
     */
    protected function _throwUnitException(string $unit): void {
        $message = sprintf(
            'Unit "%s" doesn\'t exist, please use the one of the following units: %s',
            $unit,
            implode(",", array_keys($this->_unitMap))
        );

        throw new \UnexpectedValueException($message);
    }
}
