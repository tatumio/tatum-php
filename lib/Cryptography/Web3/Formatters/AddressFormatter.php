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
use Tatum\Cryptography\Web3\Formatters\IntegerFormatter;

class AddressFormatter implements IFormatter {
    /**
     * format
     * to do: iban
     *
     * @param mixed $value
     * @return string
     */
    public static function format($value) {
        $value = (string) $value;

        if (Utils::isAddress($value)) {
            $value = mb_strtolower($value);

            if (Utils::isZeroPrefixed($value)) {
                return $value;
            }
            return "0x" . $value;
        }
        $value = IntegerFormatter::format($value, 40);

        return "0x" . $value;
    }
}
