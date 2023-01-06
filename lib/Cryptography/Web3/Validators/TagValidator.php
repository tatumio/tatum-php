<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Validators;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\Validators\IValidator;
use Tatum\Cryptography\Web3\Utils;

class TagValidator implements IValidator {
    /**
     * validate
     *
     * @param string $value
     * @return bool
     */
    public static function validate($value) {
        $value = Utils::toString($value);
        $tags = ["latest", "earliest", "pending"];

        return in_array($value, $tags);
    }
}
