<?php

namespace Tatum\Cryptography\Ecc\Math;
!defined("TATUM-SDK") && exit();

class MathAdapterFactory {
    /**
     * @var GmpMathInterface
     */
    private static $forcedAdapter = null;

    /**
     * @param  \Tatum\Cryptography\Ecc\Math\GmpMathInterface|null  $adapter
     */
    public static function forceAdapter(GmpMathInterface $adapter = null) {
        self::$forcedAdapter = $adapter;
    }

    /**
     * @param  bool  $debug
     *
     * @return \Tatum\Cryptography\Ecc\Math\GmpMathInterface
     */
    public static function getAdapter(bool $debug = false): GmpMathInterface {
        if (self::$forcedAdapter !== null) {
            return self::$forcedAdapter;
        }

        $adapter = new GmpMath();

        return self::wrapAdapter($adapter, $debug);
    }

    /**
     * @param  GmpMathInterface  $adapter
     * @param  bool              $debug
     * @return \Tatum\Cryptography\Ecc\Math\GmpMathInterface
     */
    private static function wrapAdapter(GmpMathInterface $adapter, bool $debug): GmpMathInterface {
        if ($debug === true) {
            return new DebugDecorator($adapter);
        }

        return $adapter;
    }
}
