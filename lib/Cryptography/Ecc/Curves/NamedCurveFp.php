<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Curves;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Math\GmpMathInterface;
use Tatum\Cryptography\Ecc\Primitives\CurveFp;
use Tatum\Cryptography\Ecc\Primitives\CurveParameters;

class NamedCurveFp extends CurveFp {
    /**
     * @var string
     */
    private $name;

    /**
     * @param string           $name
     * @param CurveParameters  $parameters
     * @param GmpMathInterface $adapter
     */
    public function __construct(string $name, CurveParameters $parameters, GmpMathInterface $adapter) {
        $this->name = $name;

        parent::__construct($parameters, $adapter);
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
}
