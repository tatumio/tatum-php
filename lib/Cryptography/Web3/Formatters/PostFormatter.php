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
use Tatum\Cryptography\Web3\Formatters\QuantityFormatter;

class PostFormatter implements IFormatter {
    /**
     * format
     *
     * @param mixed $value
     * @return string
     */
    public static function format($value) {
        if (isset($value["priority"])) {
            $value["priority"] = QuantityFormatter::format($value["priority"]);
        }
        if (isset($value["ttl"])) {
            $value["ttl"] = QuantityFormatter::format($value["ttl"]);
        }
        return $value;
    }
}
