<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\Point;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Primitives\PointInterface;
use Tatum\Cryptography\Ecc\Primitives\CurveFpInterface;

interface PointSerializerInterface {
    /**
     *
     * @param  PointInterface $point
     * @return string
     */
    public function serialize(PointInterface $point): string;

    /**
     * @param  CurveFpInterface $curve  Curve that contains the serialized point
     * @param  string           $string
     * @return PointInterface
     */
    public function unserialize(CurveFpInterface $curve, string $string): PointInterface;
}
