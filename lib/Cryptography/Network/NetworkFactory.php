<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Network;
!defined("TATUM-SDK") && exit();

class NetworkFactory {
    /**
     * @return NetworkInterface
     * @throws \Exception
     */
    public static function bitcoin(): NetworkInterface {
        return new Networks\Bitcoin();
    }

    /**
     * @return NetworkInterface
     * @throws \Exception
     */
    public static function bitcoinTestnet(): NetworkInterface {
        return new Networks\BitcoinTestnet();
    }

    /**
     * @return NetworkInterface
     * @throws \Exception
     */
    public static function bitcoinRegtest(): NetworkInterface {
        return new Networks\BitcoinRegtest();
    }

    /**
     * @return Networks\BitcoinCash
     * @throws \Exception
     */
    public static function bitcoinCash() {
        return new Networks\BitcoinCash();
    }

    /**
     * @return Networks\BitcoinCashTestnet
     * @throws \Exception
     */
    public static function bitcoinCashTestnet() {
        return new Networks\BitcoinCashTestnet();
    }

    /**
     * @return Networks\BitcoinCashRegtest
     * @throws \Exception
     */
    public static function bitcoinCashRegtest() {
        return new Networks\BitcoinCashRegtest();
    }

    /**
     * @return NetworkInterface
     */
    public static function litecoin(): NetworkInterface {
        return new Networks\Litecoin();
    }

    /**
     * @return Networks\LitecoinTestnet
     */
    public static function litecoinTestnet(): NetworkInterface {
        return new Networks\LitecoinTestnet();
    }

    /**
     * @return Networks\Viacoin
     */
    public static function viacoin(): NetworkInterface {
        return new Networks\Viacoin();
    }

    /**
     * @return Networks\ViacoinTestnet
     */
    public static function viacoinTestnet(): NetworkInterface {
        return new Networks\ViacoinTestnet();
    }

    /**
     * @return Networks\Dogecoin
     */
    public static function dogecoin(): NetworkInterface {
        return new Networks\Dogecoin();
    }

    /**
     * @return Networks\DogecoinTestnet
     */
    public static function dogecoinTestnet(): NetworkInterface {
        return new Networks\DogecoinTestnet();
    }

    /**
     * @return Networks\Dash
     */
    public static function dash(): NetworkInterface {
        return new Networks\Dash();
    }

    /**
     * @return Networks\DashTestnet
     */
    public static function dashTestnet(): NetworkInterface {
        return new Networks\DashTestnet();
    }

    /**
     * @return NetworkInterface
     */
    public static function zcash() {
        return new Networks\Zcash();
    }
}
