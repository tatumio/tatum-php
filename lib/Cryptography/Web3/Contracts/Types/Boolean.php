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

class Boolean extends SolidityType implements IType {
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
        return preg_match('/^bool(\[([0-9]*)\])*$/', $name) === 1;
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
        if (!is_bool($value)) {
            throw new InvalidArgumentException("The value to inputFormat function must be boolean.");
        }
        $value = (int) $value;

        return "000000000000000000000000000000000000000000000000000000000000000" . $value;
    }

    /**
     * outputFormat
     *
     * @param mixed $value
     * @param string $name
     * @return string
     */
    public function outputFormat($value, $name) {
        $value = (int) mb_substr($value, 63, 1);

        return (bool) $value;
    }
}
