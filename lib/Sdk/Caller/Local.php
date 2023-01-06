<?php

/**
 * Tatum SDK Caller - Local
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */
namespace Tatum\Sdk\Caller;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Caller;
use Tatum\Local as L;

class Local {
    /**
     * Caller object
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_caller;

    /**
     * Local: Wallet
     *
     * @var \Tatum\Local\Wallet
     */
    protected $_wallet;

    /**
     * Local: Transaction
     *
     * @var \Tatum\Local\Transaction
     */
    protected $_transaction;

    /**
     * SDK caller
     *
     * @param \Tatum\Sdk\Caller $caller Caller object
     */
    public function __construct(Caller $caller) {
        $this->_caller = $caller;
    }

    /**
     * Local HD-wallet operations
     *
     * @return \Tatum\Local\Wallet
     */
    public function wallet(): L\Wallet {
        if (null === $this->_wallet) {
            $this->_wallet = new L\Wallet($this->_caller);
        }

        return $this->_wallet;
    }

    /**
     * Local transaction operations
     *
     * @return \Tatum\Local\Transaction
     */
    public function transaction(): L\Transaction {
        if (null === $this->_transaction) {
            $this->_transaction = new L\Transaction($this->_caller);
        }

        return $this->_transaction;
    }
}
