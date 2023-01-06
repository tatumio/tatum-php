<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Contracts\Types;
!defined("TATUM-SDK") && exit();

interface IType {
    /**
     * isType
     *
     * @param string $name
     * @return bool
     */
    public function isType($name);

    /**
     * isDynamicType
     *
     * @return bool
     */
    public function isDynamicType();

    /**
     * inputFormat
     *
     * @param mixed $value
     * @param string $name
     * @return string
     */
    public function inputFormat($value, $name);
}
