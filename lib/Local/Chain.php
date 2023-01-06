<?php

/**
 * Supported chains list
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local;
!defined("TATUM-SDK") && exit();

class Chain {
    /**
     * Bitcoin
     */
    const BTC = "BTC";

    /**
     * Bitcoin Cash
     */
    const BCH = "BCH";

    /**
     * Litecoin
     */
    const LTC = "LTC";

    /**
     * Dogecoin
     */
    const DOGE = "DOGE";

    /**
     * Ethereum
     */
    const ETH = "ETH";

    /**
     * Polygon
     */
    const POLYGON = "POLYGON";

    /**
     * Celo
     */
    const CELO = "CELO";

    /**
     * KCS
     */
    const KCS = "KCS";

    /**
     * HARMONY
     */
    const HARMONY = "HARMONY";

    /**
     * KLAY
     */
    const KLAY = "KLAY";

    /**
     * BNB Smart Chain
     */
    const BSC = "BSC";

    /**
     * EGLD
     */
    const EGLD = "EGLD";

    /**
     * ADA
     */
    const ADA = "ADA";

    /**
     * NEO
     */
    const NEO = "NEO";

    /**
     * VET
     */
    const VET = "VET";

    /**
     * XinFin
     */
    const XDC = "XDC";

    /**
     * Tron
     */
    const TRON = "TRON";

    /**
     * Solana
     *
     * @no-xpub
     */
    const SOL = "SOL";

    /**
     * Binance Beacon Chain
     *
     * @no-wallet
     */
    const BNB = "BNB";

    /**
     * Flow
     */
    const FLOW = "FLOW";

    /**
     * XRP
     */
    const XRP = "XRP";

    /**
     * Stellar
     *
     * @no-wallet
     */
    const XLM = "XLM";

    /**
     * Reflection cache
     *
     * @var array
     */
    protected static $_cache = [];

    /**
     * Get the supported EVM chains
     *
     * @return string[]
     */
    public static function getEvmChains(): array {
        return [self::ETH, self::POLYGON, self::BSC, self::HARMONY, self::KLAY, self::CELO, self::XDC, self::KCS];
    }

    /**
     * Get all supported chains
     *
     * @return string[]
     */
    public static function getAllChains(): array {
        if (!count(self::$_cache)) {
            self::$_cache = array_values((new \ReflectionClass(self::class))->getConstants());
        }

        return self::$_cache;
    }
}
