<?php

/**
 * Transaction utility
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Caller;
use Tatum\Local\Transaction as Tx;

/**
 * Transaction
 */
class Transaction {
    /**
     * Caller object
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_caller;

    /**
     * Transaction object list
     *
     * @var \Tatum\Local\Transaction\AbstractTransaction[]
     */
    protected $_transactions = [];

    /**
     * Transactions Utility
     *
     * @param \Tatum\Sdk\Config $caller Caller object
     */
    public function __construct(Caller $caller) {
        $this->_caller = $caller;
    }

    /**
     * Bitcoin Transaction
     *
     * @return \Tatum\Local\Transaction\Bitcoin
     */
    public function bitcoin(): Tx\Bitcoin {
        if (!isset($this->_transactions[Tx\Bitcoin::class])) {
            $this->_transactions[Tx\Bitcoin::class] = new Tx\Bitcoin($this->_caller);
        }

        return $this->_transactions[Tx\Bitcoin::class];
    }

    /**
     * Bitcoin Cash Transaction
     *
     * @return \Tatum\Local\Transaction\BitcoinCash
     */
    public function bitcoinCash(): Tx\BitcoinCash {
        if (!isset($this->_transactions[Tx\BitcoinCash::class])) {
            $this->_transactions[Tx\BitcoinCash::class] = new Tx\BitcoinCash($this->_caller);
        }

        return $this->_transactions[Tx\BitcoinCash::class];
    }

    /**
     * Litecoin Transaction
     *
     * @return \Tatum\Local\Transaction\Litecoin
     */
    public function litecoin(): Tx\Litecoin {
        if (!isset($this->_transactions[Tx\Litecoin::class])) {
            $this->_transactions[Tx\Litecoin::class] = new Tx\Litecoin($this->_caller);
        }

        return $this->_transactions[Tx\Litecoin::class];
    }

    /**
     * Dogecoin Transaction
     *
     * @return \Tatum\Local\Transaction\Dogecoin
     */
    public function dogecoin(): Tx\Dogecoin {
        if (!isset($this->_transactions[Tx\Dogecoin::class])) {
            $this->_transactions[Tx\Dogecoin::class] = new Tx\Dogecoin($this->_caller);
        }

        return $this->_transactions[Tx\Dogecoin::class];
    }

    /**
     * Ethereum Transaction
     *
     * @return \Tatum\Local\Transaction\Ethereum
     */
    public function ethereum(): Tx\Ethereum {
        if (!isset($this->_transactions[Tx\Ethereum::class])) {
            $this->_transactions[Tx\Ethereum::class] = new Tx\Ethereum($this->_caller);
        }

        return $this->_transactions[Tx\Ethereum::class];
    }
}
