<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Validators;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\Validators\IValidator;

class BooleanValidator {
    /**
     * validate
     *
     * @param mixed $value
     * @return bool
     */
    public static function validate($value) {
        return is_bool($value);
    }
}
