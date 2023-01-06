<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Random;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Math\GmpMathInterface;
use Tatum\Cryptography\Ecc\Util\NumberSize;

class RandomNumberGenerator implements RandomNumberGeneratorInterface {
    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * RandomNumberGenerator constructor.
     * @param GmpMathInterface $adapter
     */
    public function __construct(GmpMathInterface $adapter) {
        $this->adapter = $adapter;
    }

    /**
     * @param \GMP $max
     * @return \GMP
     */
    public function generate(\GMP $max): \GMP {
        $numBits = NumberSize::bnNumBits($this->adapter, $max);
        $numBytes = (int) ceil($numBits / 8);
        // Generate an integer of size >= $numBits
        $bytes = random_bytes($numBytes);
        $value = $this->adapter->stringToInt($bytes);

        $mask = gmp_sub(gmp_pow(2, $numBits), 1);
        $integer = gmp_and($value, $mask);

        return $integer;
    }
}
