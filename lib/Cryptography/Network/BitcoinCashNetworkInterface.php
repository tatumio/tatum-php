<?php

namespace Tatum\Cryptography\Network;
!defined("TATUM-SDK") && exit();

interface BitcoinCashNetworkInterface {
    /**
     * @return string
     */
    public function getCashAddressPrefix();
}
