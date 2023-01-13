<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#gethistoricaltradesbody
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_list_oder_book_history_body = (new \Tatum\Model\ListOderBookHistoryBody())
    ->setId('5e68c66581f2ee32bc354087')/* optional */
    ->setCustomerId('5e68c66581f2ee32bc354087')/* optional */
    ->setPageSize(10)
    ->setOffset(0)/* optional */
    ->setPair('BTC/EUR')/* optional */
    ->setCount(true)/* optional */
    ->setTypes(null)/* optional */
    ->setAmount(null)/* optional */
    ->setFill(null)/* optional */
    ->setPrice(null)/* optional */
    ->setCreated(null)/* optional */
    ->setSort(null)/* optional */;

try {
    /** @var \Tatum\Model\Trade[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->orderBook()
        ->getHistoricalTradesBody($arg_list_oder_book_history_body);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->orderBook()->getHistoricalTradesBody(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->orderBook()->getHistoricalTradesBody(): " . $exc->getMessage() . PHP_EOL;
}