<?php

namespace Tatum;

use Tatum\Connector;

class Service
{
    /**
     * @return mixed
     */
    public static function getApiVersion()
    {
        return Connector::get('tatum/version');
    }
}
