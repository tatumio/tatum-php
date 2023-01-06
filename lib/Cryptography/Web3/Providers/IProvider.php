<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Providers;
!defined("TATUM-SDK") && exit();

interface IProvider {
    /**
     * send
     *
     * @param \Tatum\Cryptography\Web3\Methods\Method $method
     * @param callable $callback
     * @return void
     */
    public function send($method, $callback);

    /**
     * batch
     *
     * @param bool $status
     * @return void
     */
    public function batch($status);

    /**
     * execute
     *
     * @param callable $callback
     * @return void
     */
    public function execute($callback);
}
