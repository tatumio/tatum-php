<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Random;
!defined("TATUM-SDK") && exit();

interface RandomNumberGeneratorInterface {
    /**
     * Generate a random number between 0 and the specified upper boundary.
     * @param \GMP $max - Upper boundary, inclusive
     * @return \GMP
     */
    public function generate(\GMP $max): \GMP;
}
