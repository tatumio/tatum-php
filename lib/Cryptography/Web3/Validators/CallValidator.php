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
use Tatum\Cryptography\Web3\Validators\TagValidator;
use Tatum\Cryptography\Web3\Validators\HexValidator;

class CallValidator {
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
        if (isset($value["from"]) && AddressValidator::validate($value["from"]) === false) {
            return false;
        }
        if (!isset($value["to"])) {
            return false;
        }
        if (AddressValidator::validate($value["to"]) === false) {
            return false;
        }
        if (isset($value["gas"]) && QuantityValidator::validate($value["gas"]) === false) {
            return false;
        }
        if (isset($value["gasPrice"]) && QuantityValidator::validate($value["gasPrice"]) === false) {
            return false;
        }
        if (isset($value["value"]) && QuantityValidator::validate($value["value"]) === false) {
            return false;
        }
        if (isset($value["data"]) && HexValidator::validate($value["data"]) === false) {
            return false;
        }
        if (isset($value["nonce"]) && QuantityValidator::validate($value["nonce"]) === false) {
            return false;
        }
        return true;
    }
}
