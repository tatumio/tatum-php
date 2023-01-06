<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Contracts\Types;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\Utils;
use Tatum\Cryptography\Web3\Contracts\SolidityType;
use Tatum\Cryptography\Web3\Contracts\Types\IType;
use Tatum\Cryptography\Web3\Formatters\IntegerFormatter;
use Tatum\Cryptography\Web3\Formatters\BigNumberFormatter;

class Integer extends SolidityType implements IType {
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
        return preg_match('/^int([0-9]{1,})?(\[([0-9]*)\])*$/', $name) === 1;
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
     *
     * @param mixed $value
     * @param string $name
     * @return string
     */
    public function inputFormat($value, $name) {
        return IntegerFormatter::format($value);
    }

    /**
     * outputFormat
     *
     * @param mixed $value
     * @param string $name
     * @return string
     */
    public function outputFormat($value, $name) {
        $match = [];

        if (preg_match('/^[0]+([a-f0-9]+)$/', $value, $match) === 1) {
            // due to value without 0x prefix, we will parse as decimal
            $value = "0x" . $match[1];
        }
        return BigNumberFormatter::format($value);
    }
}
