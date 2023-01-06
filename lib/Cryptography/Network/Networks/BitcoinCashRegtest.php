<?php

namespace Tatum\Cryptography\Network\Networks;
!defined("TATUM-SDK") && exit();

class BitcoinCashRegtest extends BitcoinCashTestnet {
    /**
     * @var string
     */
    protected $cashAddressPrefix = "bchreg";

    /**
     * {@inheritdoc}
     * @see Network::$p2pMagic
     */
    protected $p2pMagic = "dab5bffa";
}
