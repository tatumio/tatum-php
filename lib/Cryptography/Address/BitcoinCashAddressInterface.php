<?php

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Address\AddressInterface;
use Tatum\Cryptography\Network\BitcoinCashNetworkInterface;

interface BitcoinCashAddressInterface extends AddressInterface {
    /**
     * @param BitcoinCashNetworkInterface $network
     * @return string
     */
    public function getPrefix(BitcoinCashNetworkInterface $network);
}
