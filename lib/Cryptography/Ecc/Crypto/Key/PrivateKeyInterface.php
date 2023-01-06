<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Crypto\Key;
!defined("TATUM-SDK") && exit();

/**
 * Copyright (C) 2012 Matyas Danter
 */

use Tatum\Cryptography\Ecc\Crypto\EcDH\EcDHInterface;
use Tatum\Cryptography\Ecc\Primitives\GeneratorPoint;

/**
 * This is a contract for the PrivateKey portion of ECDSA.
 */
interface PrivateKeyInterface {
    /**
     * @return PublicKeyInterface
     */
    public function getPublicKey(): PublicKeyInterface;

    /**
     * @return GeneratorPoint
     */
    public function getPoint(): GeneratorPoint;

    /**
     * @return \GMP
     */
    public function getSecret(): \GMP;

    /**
     * @param  PublicKeyInterface $recipient
     * @return EcDHInterface
     */
    public function createExchange(PublicKeyInterface $recipient): EcDHInterface;
}
