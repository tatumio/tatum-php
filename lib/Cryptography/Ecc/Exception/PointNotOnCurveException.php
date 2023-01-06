<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Exception;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Primitives\CurveFpInterface;

class PointNotOnCurveException extends PointException {
    public function __construct(\GMP $x, \GMP $y, CurveFpInterface $curve) {
        parent::__construct(
            "Curve " . $curve . " does not contain point (" . gmp_strval($x, 10) . ", " . gmp_strval($y, 10) . ")"
        );
    }
}
