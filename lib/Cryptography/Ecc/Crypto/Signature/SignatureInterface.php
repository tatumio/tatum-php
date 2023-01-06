<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Crypto\Signature;
!defined("TATUM-SDK") && exit();

/**
 * Copyright (C) 2012 Matyas Danter
 */

/**
 * This is the contract for describing a signature used in ECDSA.
 */
interface SignatureInterface {
    /**
     * Returns the r parameter of the signature.
     *
     * @return \GMP
     */
    public function getR(): \GMP;

    /**
     * Returns the s parameter of the signature.
     *
     * @return \GMP
     */
    public function getS(): \GMP;
}
