<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Validators;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\Validators\IValidator;

class IdentityValidator {
    /**
     * validate
     * To do: check identity length.
     * Spec: 60 bytes, see https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_newidentity
     * But returned value is 64 bytes.
     *
     * @param string $value
     * @return bool
     */
    public static function validate($value) {
        if (!is_string($value)) {
            return false;
        }
        return preg_match('/^0x[a-fA-F0-9]*$/', $value) >= 1;
    }
}
