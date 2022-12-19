<?php

namespace Tatum\Cryptography\Network;

interface BitcoinCashNetworkInterface {
    /**
     * @return string
     */
    public function getCashAddressPrefix();
}
