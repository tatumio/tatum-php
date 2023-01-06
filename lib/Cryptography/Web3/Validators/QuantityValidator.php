<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Validators;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\Validators\IValidator;

class QuantityValidator {
    /**
     * validate
     *
     * @param string $value
     * @return bool
     */
    public static function validate($value) {
        // maybe change is_int and is_float and preg_match future
        return is_int($value) || is_float($value) || preg_match('/^0x[a-fA-F0-9]*$/', $value) >= 1;
    }
}
