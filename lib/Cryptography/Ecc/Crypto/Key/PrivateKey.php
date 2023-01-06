<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Crypto\Key;
!defined("TATUM-SDK") && exit();

/**
 * Copyright (C) 2012 Matyas Danter
 */

use Tatum\Cryptography\Ecc\Crypto\EcDH\EcDH;
use Tatum\Cryptography\Ecc\Crypto\EcDH\EcDHInterface;
use Tatum\Cryptography\Ecc\Math\GmpMathInterface;
use Tatum\Cryptography\Ecc\Primitives\CurveFpInterface;
use Tatum\Cryptography\Ecc\Primitives\GeneratorPoint;
use Tatum\Cryptography\Ecc\Primitives\PointInterface;

/**
 * This class serves as public - private key exchange for signature verification.
 */
class PrivateKey implements PrivateKeyInterface {
    /**
     * @var GeneratorPoint
     */
    private $generator;

    /**
     * @var \GMP
     */
    private $secretMultiplier;

    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * @param GmpMathInterface $adapter
     * @param GeneratorPoint $generator
     * @param \GMP $secretMultiplier
     */
    public function __construct(GmpMathInterface $adapter, GeneratorPoint $generator, \GMP $secretMultiplier) {
        $this->adapter = $adapter;
        $this->generator = $generator;
        $this->secretMultiplier = $secretMultiplier;
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Crypto\Key\PrivateKeyInterface::getPublicKey()
     */
    public function getPublicKey(): PublicKeyInterface {
        return new PublicKey($this->adapter, $this->generator, $this->generator->mul($this->secretMultiplier));
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Crypto\Key\PrivateKeyInterface::getPoint()
     */
    public function getPoint(): GeneratorPoint {
        return $this->generator;
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Crypto\Key\PrivateKeyInterface::getCurve()
     */
    public function getCurve(): CurveFpInterface {
        return $this->generator->getCurve();
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Crypto\Key\PrivateKeyInterface::getSecret()
     */
    public function getSecret(): \GMP {
        return $this->secretMultiplier;
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Crypto\Key\PrivateKeyInterface::createExchange()
     */
    public function createExchange(PublicKeyInterface $recipient = null): EcDHInterface {
        $ecdh = new EcDH($this->adapter);
        $ecdh->setSenderKey($this)->setRecipientKey($recipient);

        return $ecdh;
    }
}
