<?php

namespace Tatum\Cryptography\Network\Networks;
!defined("TATUM-SDK") && exit();

class BitcoinRegtest extends BitcoinTestnet {
    protected $p2pMagic = "dab5bffa";
}
