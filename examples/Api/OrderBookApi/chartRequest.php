<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#chartrequest
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_chart_request = (new \Tatum\Model\ChartRequest())
    
    // Trading pair
    ->setPair('BTC/EUR')
    
    // Start interval in UTC millis.
    ->setFrom(1613654998398)
    
    // End interval in UTC millis.
    ->setTo(1613654998398)
    
    // Time frame of the chart.
    ->setTimeFrame('MIN_5');

try {

    /** @var \Tatum\Model\Chart[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->orderBook()
        ->chartRequest($arg_chart_request);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->orderBook()->chartRequest(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->orderBook()->chartRequest(): %s\n", 
        $exc->getMessage()
    );
}