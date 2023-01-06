<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Crypto\Signature;
!defined("TATUM-SDK") && exit();

/**
 * Copyright (C) 2012 Matyas Danter
 */

/**
 * Plain Old PHP Object that stores the signature r,s for ECDSA
 */
class Signature implements SignatureInterface {
    /**
     * @var \GMP
     */
    private $r;

    /**
     *
     * @var \GMP
     */
    private $s;

    /**
     * Initialize a new instance with values
     *
     * @param \GMP $r
     * @param \GMP $s
     */
    public function __construct(\GMP $r, \GMP $s) {
        $this->r = $r;
        $this->s = $s;
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Crypto\Signature\SignatureInterface::getR()
     */
    public function getR(): \GMP {
        return $this->r;
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Crypto\Signature\SignatureInterface::getS()
     */
    public function getS(): \GMP {
        return $this->s;
    }
}
