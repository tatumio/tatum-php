<?php

namespace Tatum\Cryptography\Elliptic\Curve;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Elliptic\Curve\MontCurve\Point;
use Tatum\Cryptography\Elliptic\Utils;
use Tatum\Cryptography\Util\BN\BigNumber;

class MontCurve extends BaseCurve {
    public $a;
    public $b;
    public $i4;
    public $a24;

    function __construct($conf) {
        parent::__construct("mont", $conf);

        $this->a = (new BigNumber($conf["a"], 16))->toRed($this->red);
        $this->b = (new BigNumber($conf["b"], 16))->toRed($this->red);
        $this->i4 = (new BigNumber(4))->toRed($this->red)->redInvm();
        $this->a24 = $this->i4->redMul($this->a->redAdd($this->two));
    }

    public function validate($point) {
        $x = $point->normalize()->x;
        $x2 = $x->redSqr();
        $rhs = $x2
            ->redMul($x)
            ->redAdd($x2->redMul($this->a))
            ->redAdd($x);
        $y = $rhs->redSqr();

        return $y->redSqr()->cmp($rhs) === 0;
    }

    public function decodePoint($bytes, $enc = false) {
        return $this->point(Utils::toArray($bytes, $enc), 1);
    }

    public function point($x, $z) {
        return new Point($this, $x, $z);
    }

    public function pointFromJSON($obj, $red = null): \Tatum\Cryptography\Elliptic\Curve\BaseCurve\Point {
        return Point::fromJSON($this, $obj);
    }

    // Just for compatibility with Short curve
    public function jpoint($x, $y, $z, $t = null): \Tatum\Cryptography\Elliptic\Curve\BaseCurve\Point {
        return $this->point($x, $z);
    }
}

?>
