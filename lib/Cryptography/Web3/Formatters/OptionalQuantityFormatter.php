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
use Tatum\Cryptography\Web3\Validators\TagValidator;
use Tatum\Cryptography\Web3\Formatters\QuantityFormatter;

class OptionalQuantityFormatter implements IFormatter {
    /**
     * format
     *
     * @param mixed $value
     * @return string
     */
    public static function format($value) {
        if (TagValidator::validate($value)) {
            return $value;
        }
        return QuantityFormatter::format($value);
    }
}
