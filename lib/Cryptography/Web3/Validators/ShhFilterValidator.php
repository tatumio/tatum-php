<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Validators;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\Validators\IValidator;
use Tatum\Cryptography\Web3\Validators\QuantityValidator;
use Tatum\Cryptography\Web3\Validators\HexValidator;
use Tatum\Cryptography\Web3\Validators\IdentityValidator;

class ShhFilterValidator {
    /**
     * validate
     *
     * @param array $value
     * @return bool
     */
    public static function validate($value) {
        if (!is_array($value)) {
            return false;
        }
        if (isset($value["to"]) && IdentityValidator::validate($value["to"]) === false) {
            return false;
        }
        if (!isset($value["topics"]) || !is_array($value["topics"])) {
            return false;
        }
        foreach ($value["topics"] as $topic) {
            if (is_array($topic)) {
                foreach ($topic as $subTopic) {
                    if (HexValidator::validate($subTopic) === false) {
                        return false;
                    }
                }
                continue;
            }
            if (HexValidator::validate($topic) === false) {
                if (!is_null($topic)) {
                    return false;
                }
            }
        }
        return true;
    }
}
