<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods;
!defined("TATUM-SDK") && exit();

interface IRPC {
    /**
     * __toString
     *
     * @return array
     */
    public function __toString();

    /**
     * toPayload
     *
     * @return array
     */
    public function toPayload();
}
