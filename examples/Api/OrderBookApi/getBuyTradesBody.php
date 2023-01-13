<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#getbuytradesbody
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_list_oder_book_active_buy_body = new \Tatum\Model\ListOderBookActiveBuyBody();

try {

    /** @var \Tatum\Model\Trade[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->orderBook()
        ->getBuyTradesBody($arg_list_oder_book_active_buy_body);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->orderBook()->getBuyTradesBody(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->orderBook()->getBuyTradesBody(): " . $exc->getMessage() . PHP_EOL;
}