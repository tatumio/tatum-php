<?php

namespace Tatum\Test;

use Tatum\Utils\Currency;
use Tatum\Wallet\Wallet;

class WalletTest extends TestCase
{
    public function generateWallet()
    {
        print_r(Wallet::generateWallet(Currency::BTC));
    }
}
