<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Contracts\Types;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Contracts\SolidityType;
use Tatum\Cryptography\Web3\Contracts\Types\IType;
use Tatum\Cryptography\Web3\Utils;
use Tatum\Cryptography\Web3\Formatters\IntegerFormatter;

class Address extends SolidityType implements IType {
    /**
     * construct
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * isType
     *
     * @param string $name
     * @return bool
     */
    public function isType($name) {
        return preg_match('/^address(\[([0-9]*)\])*$/', $name) === 1;
    }

    /**
     * isDynamicType
     *
     * @return bool
     */
    public function isDynamicType() {
        return false;
    }

    /**
     * inputFormat
     * to do: iban
     *
     * @param mixed $value
     * @param string $name
     * @return string
     */
    public function inputFormat($value, $name) {
        $value = (string) $value;

        if (Utils::isAddress($value)) {
            $value = mb_strtolower($value);

            if (Utils::isZeroPrefixed($value)) {
                $value = Utils::stripZero($value);
            }
        }
        $value = IntegerFormatter::format($value);

        return $value;
    }

    /**
     * outputFormat
     *
     * @param mixed $value
     * @param string $name
     * @return string
     */
    public function outputFormat($value, $name) {
        return "0x" . mb_substr($value, 24, 40);
    }
}
