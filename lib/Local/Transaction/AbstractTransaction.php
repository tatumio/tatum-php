<?php

declare(strict_types=1);

/**
 * Abstract Transaction
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Caller;

abstract class AbstractTransaction {
    /**
     * Caller object
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_caller;

    /**
     * Local Wallet Constructor
     *
     * @param \Tatum\Sdk\Caller $caller Caller object
     */
    public function __construct(Caller $caller) {
        $this->_caller = $caller;
    }
}
