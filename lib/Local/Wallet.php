<?php

/**
 * Hierarchical Deterministic (HD) Wallet utility
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Caller;
use Tatum\Local\Wallet as W;

/**
 * HD Wallet Utilities
 */
class Wallet {
    /**
     * Caller object
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_caller;

    /**
     * Wallet object list
     *
     * @var \Tatum\Local\Wallet\AbstractWallet[]
     */
    protected $_wallets = [];

    /**
     * HD Wallet Utility
     *
     * @param \Tatum\Sdk\Caller $caller Caller object
     */
    public function __construct(Caller $caller) {
        $this->_caller = $caller;
    }

    /**
     * Bitcoin wallet
     *
     * @return \Tatum\Local\Wallet\Bitcoin
     */
    public function bitcoin(): \Tatum\Local\Wallet\Bitcoin {
        if (!isset($this->_wallets[W\Bitcoin::class])) {
            $this->_wallets[W\Bitcoin::class] = new W\Bitcoin($this->_caller);
        }

        return $this->_wallets[W\Bitcoin::class];
    }

    /**
     * Bitcoin Cash wallet
     *
     * @return \Tatum\Local\Wallet\BitcoinCash
     */
    public function bitcoinCash(): \Tatum\Local\Wallet\BitcoinCash {
        if (!isset($this->_wallets[W\BitcoinCash::class])) {
            $this->_wallets[W\BitcoinCash::class] = new W\BitcoinCash($this->_caller);
        }

        return $this->_wallets[W\BitcoinCash::class];
    }

    /**
     * Litecoin wallet
     *
     * @return \Tatum\Local\Wallet\Litecoin
     */
    public function litecoin(): \Tatum\Local\Wallet\Litecoin {
        if (!isset($this->_wallets[W\Litecoin::class])) {
            $this->_wallets[W\Litecoin::class] = new W\Litecoin($this->_caller);
        }

        return $this->_wallets[W\Litecoin::class];
    }

    /**
     * Dogecoin wallet
     *
     * @return \Tatum\Local\Wallet\Dogecoin
     */
    public function dogecoin(): \Tatum\Local\Wallet\Dogecoin {
        if (!isset($this->_wallets[W\Dogecoin::class])) {
            $this->_wallets[W\Dogecoin::class] = new W\Dogecoin($this->_caller);
        }

        return $this->_wallets[W\Dogecoin::class];
    }

    /**
     * Ethereum wallet
     *
     * @return \Tatum\Local\Wallet\Ethereum
     */
    public function ethereum(): \Tatum\Local\Wallet\Ethereum {
        if (!isset($this->_wallets[W\Ethereum::class])) {
            $this->_wallets[W\Ethereum::class] = new W\Ethereum($this->_caller);
        }

        return $this->_wallets[W\Ethereum::class];
    }

    /**
     * Polygon wallet
     *
     * @return \Tatum\Local\Wallet\Polygon
     */
    public function polygon(): \Tatum\Local\Wallet\Polygon {
        if (!isset($this->_wallets[W\Polygon::class])) {
            $this->_wallets[W\Polygon::class] = new W\Polygon($this->_caller);
        }

        return $this->_wallets[W\Polygon::class];
    }

    /**
     * BNB Smart Chain wallet
     *
     * @return \Tatum\Local\Wallet\Bsc
     */
    public function bsc(): \Tatum\Local\Wallet\Bsc {
        if (!isset($this->_wallets[W\Bsc::class])) {
            $this->_wallets[W\Bsc::class] = new W\Bsc($this->_caller);
        }

        return $this->_wallets[W\Bsc::class];
    }

    /**
     * Harmony.ONE wallet
     *
     * @return \Tatum\Local\Wallet\Harmony
     */
    public function harmony(): \Tatum\Local\Wallet\Harmony {
        if (!isset($this->_wallets[W\Harmony::class])) {
            $this->_wallets[W\Harmony::class] = new W\Harmony($this->_caller);
        }

        return $this->_wallets[W\Harmony::class];
    }

    /**
     * Klaytn wallet
     *
     * @return \Tatum\Local\Wallet\Klaytn
     */
    public function klaytn(): \Tatum\Local\Wallet\Klaytn {
        if (!isset($this->_wallets[W\Klaytn::class])) {
            $this->_wallets[W\Klaytn::class] = new W\Klaytn($this->_caller);
        }

        return $this->_wallets[W\Klaytn::class];
    }

    /**
     * Tron wallet
     *
     * @return \Tatum\Local\Wallet\Tron
     */
    public function tron(): \Tatum\Local\Wallet\Tron {
        if (!isset($this->_wallets[W\Tron::class])) {
            $this->_wallets[W\Tron::class] = new W\Tron($this->_caller);
        }

        return $this->_wallets[W\Tron::class];
    }

    /**
     * Celo wallet
     *
     * @return \Tatum\Local\Wallet\Celo
     */
    public function celo(): \Tatum\Local\Wallet\Celo {
        if (!isset($this->_wallets[W\Celo::class])) {
            $this->_wallets[W\Celo::class] = new W\Celo($this->_caller);
        }

        return $this->_wallets[W\Celo::class];
    }

    /**
     * XDC (XinFin) wallet
     *
     * @return \Tatum\Local\Wallet\Xdc
     */
    public function xdc(): \Tatum\Local\Wallet\Xdc {
        if (!isset($this->_wallets[W\Xdc::class])) {
            $this->_wallets[W\Xdc::class] = new W\Xdc($this->_caller);
        }

        return $this->_wallets[W\Xdc::class];
    }

    /**
     * KCS (KuCoin Token) wallet
     *
     * @return \Tatum\Local\Wallet\Kcs
     */
    public function kcs(): \Tatum\Local\Wallet\Kcs {
        if (!isset($this->_wallets[W\Kcs::class])) {
            $this->_wallets[W\Kcs::class] = new W\Kcs($this->_caller);
        }

        return $this->_wallets[W\Kcs::class];
    }

    /**
     * VeChain wallet
     *
     * @return \Tatum\Local\Wallet\VeChain
     */
    public function vechain(): \Tatum\Local\Wallet\VeChain {
        if (!isset($this->_wallets[W\VeChain::class])) {
            $this->_wallets[W\VeChain::class] = new W\VeChain($this->_caller);
        }

        return $this->_wallets[W\VeChain::class];
    }
}
