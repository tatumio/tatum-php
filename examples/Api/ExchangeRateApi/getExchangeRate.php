<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/ExchangeRateApi/#getexchangerate
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// The fiat or crypto asset to exchange
$arg_currency = "BTC";

// The target fiat asset to get the exchange rate for
$arg_base_pair = "USD";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/tatum/rate/{currency}
     * 
     * @var \Tatum\Model\ExchangeRate $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->exchangeRate()
        ->getExchangeRate($arg_currency, $arg_base_pair);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->exchangeRate()->getExchangeRate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->exchangeRate()->getExchangeRate(): %s\n", 
        $exc->getMessage()
    );
}