<?php

namespace Tatum\Test;

use Tatum\Utils\Currency;
use Tatum\Wallet\Wallet;

class WalletTest extends TestCase
{
    public function testGenerateWallet()
    {
        $wallet = new Wallet();
        print_r($wallet->generateWallet());
    }
}
