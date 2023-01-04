<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/OrderBook#operation/getBuyTrades
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#getbuytrades
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Max number of items per page is 50.
$arg_page_size = 10;

// Account ID. If present, list current active buy trades for that account.
$arg_id = '5e68c66581f2ee32bc354087';

// Customer ID. If present, list current active buy trades for that customer.
$arg_customer_id = '5e68c66581f2ee32bc354087';

// Offset to obtain next page of the data.
$arg_offset = 0;

// Trade pair. If present, list current active buy trades for that pair.
$arg_pair = 'BTC/EUR';

// Get the total trade pair count based on the filter. Either count or pageSize is accepted.
$arg_count = true;

// Trade type.
$arg_trade_type = 'BUY';

try {
    /** @var \Tatum\Model\Trade[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->orderBook()
        ->getBuyTrades($arg_page_size, $arg_id, $arg_customer_id, $arg_offset, $arg_pair, $arg_count, $arg_trade_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->orderBook()->getBuyTrades(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->orderBook()->getBuyTrades(): " . $exc->getMessage() . PHP_EOL;
}