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

class BigNumberFormatter implements IFormatter {
    /**
     * format
     *
     * @param mixed $value
     * @return string
     */
    public static function format($value) {
        $value = Utils::toString($value);
        $bn = Utils::toBn($value);

        return $bn;
    }
}
