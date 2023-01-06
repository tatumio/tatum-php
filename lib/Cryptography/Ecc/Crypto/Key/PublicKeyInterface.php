<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Crypto\Key;
!defined("TATUM-SDK") && exit();

/**
 * Copyright (C) 2012 Matyas Danter
 */

use Tatum\Cryptography\Ecc\Primitives\CurveFpInterface;
use Tatum\Cryptography\Ecc\Primitives\PointInterface;
use Tatum\Cryptography\Ecc\Primitives\GeneratorPoint;

/**
 * This is the contract for the PublicKey portion of ECDSA.
 */
interface PublicKeyInterface {
    /**
     * @return CurveFpInterface
     */
    public function getCurve(): CurveFpInterface;

    /**
     * @return PointInterface
     */
    public function getPoint(): PointInterface;

    /**
     * @return GeneratorPoint
     */
    public function getGenerator(): GeneratorPoint;
}
