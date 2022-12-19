<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Formatters;

interface IFormatter {
    /**
     * format
     *
     * @param mixed $value
     * @return string
     */
    public static function format($value);
}
