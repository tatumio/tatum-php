<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/ExchangeRateApi.md#getexchangerate
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The fiat or crypto asset to exchange
$arg_currency = 'BTC';

// The target fiat asset to get the exchange rate for
$arg_base_pair = 'USD';

try {

    /** @var \Tatum\Model\ExchangeRate $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->exchangeRate()
        ->getExchangeRate($arg_currency, $arg_base_pair);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->exchangeRate()->getExchangeRate(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->exchangeRate()->getExchangeRate(): " . $exc->getMessage() . PHP_EOL;
}