<?php

namespace Tatum\Cryptography\Network\Networks;

class BitcoinRegtest extends BitcoinTestnet {
    protected $p2pMagic = "dab5bffa";
}
