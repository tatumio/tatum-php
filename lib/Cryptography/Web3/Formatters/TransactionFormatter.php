<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Formatters;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Utils;
use Tatum\Cryptography\Web3\Formatters\IFormatter;
use Tatum\Cryptography\Web3\Formatters\HexFormatter;
use Tatum\Cryptography\Web3\Formatters\QuantityFormatter;

class TransactionFormatter implements IFormatter {
    /**
     * format
     *
     * @param mixed $value
     * @return string
     */
    public static function format($value) {
        if (isset($value["gas"])) {
            $value["gas"] = QuantityFormatter::format($value["gas"]);
        }
        if (isset($value["gasPrice"])) {
            $value["gasPrice"] = QuantityFormatter::format($value["gasPrice"]);
        }
        if (isset($value["value"])) {
            $value["value"] = QuantityFormatter::format($value["value"]);
        }
        if (isset($value["data"])) {
            $value["data"] = HexFormatter::format($value["data"]);
        }
        if (isset($value["nonce"])) {
            $value["nonce"] = QuantityFormatter::format($value["nonce"]);
        }
        return $value;
    }
}
