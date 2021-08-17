<?php

namespace Tatum\Ledger;

use Tatum\Connector;

class Account
{
    /**
     * @return mixed
     */
    public static function creatAccount()
    {
        return Connector::post('ledger/account', ['currency' => 'BTC']);
    }
}
