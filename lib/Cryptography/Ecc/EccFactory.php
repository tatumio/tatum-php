<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Crypto\Signature\Signer;
use Tatum\Cryptography\Ecc\Curves\NistCurve;
use Tatum\Cryptography\Ecc\Curves\SecgCurve;
use Tatum\Cryptography\Ecc\Math\GmpMathInterface;
use Tatum\Cryptography\Ecc\Math\MathAdapterFactory;
use Tatum\Cryptography\Ecc\Primitives\CurveFp;
use Tatum\Cryptography\Ecc\Primitives\CurveFpInterface;
use Tatum\Cryptography\Ecc\Primitives\CurveParameters;

/**
 * Static factory class providing factory methods to work with NIST and SECG recommended curves.
 */
class EccFactory {
    /**
     * Selects and creates the most appropriate adapter for the running environment.
     *
     * @param bool $debug [optional] Set to true to get a trace of all mathematical operations
     *
     * @throws \RuntimeException
     * @return GmpMathInterface
     */
    public static function getAdapter(bool $debug = false): GmpMathInterface {
        return MathAdapterFactory::getAdapter($debug);
    }

    /**
     * Returns a factory to create NIST Recommended curves and generators.
     *
     * @param  GmpMathInterface $adapter [optional] Defaults to the return value of EccFactory::getAdapter().
     * @return NistCurve
     */
    public static function getNistCurves(GmpMathInterface $adapter = null): NistCurve {
        return new NistCurve($adapter ?: self::getAdapter());
    }

    /**
     * Returns a factory to return SECG Recommended curves and generators.
     *
     * @param  GmpMathInterface $adapter [optional] Defaults to the return value of EccFactory::getAdapter().
     * @return SecgCurve
     */
    public static function getSecgCurves(GmpMathInterface $adapter = null): SecgCurve {
        return new SecgCurve($adapter ?: self::getAdapter());
    }

    /**
     * Creates a new curve from arbitrary parameters.
     *
     * @param  int              $bitSize
     * @param  \GMP             $prime
     * @param  \GMP             $a
     * @param  \GMP             $b
     * @param  GmpMathInterface $adapter [optional] Defaults to the return value of EccFactory::getAdapter().
     * @return CurveFpInterface
     */
    public static function createCurve(
        int $bitSize,
        \GMP $prime,
        \GMP $a,
        \GMP $b,
        GmpMathInterface $adapter = null
    ): CurveFpInterface {
        return new CurveFp(new CurveParameters($bitSize, $prime, $a, $b), $adapter ?: self::getAdapter());
    }

    /**
     * @param  GmpMathInterface $adapter [optional] Defaults to the return value of EccFactory::getAdapteR()
     * @return Signer
     */
    public static function getSigner(GmpMathInterface $adapter = null): Signer {
        return new Signer($adapter ?: self::getAdapter());
    }
}
