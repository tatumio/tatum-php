<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#gethistoricaltrades
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

// Account ID. If present, only closed trades for given account will be present.
$arg_id = "5e68c66581f2ee32bc354087";

// Trade pair. If present, only closed trades on given trade pair will be present.
$arg_pair = "BTC/ETH";

// Offset to obtain next page of the data.
$arg_offset = 0;

// Get the total trade pair count based on the filter. Either count or pageSize is accepted.
$arg_count = true;

// Trade types.
$arg_types = array('types_example');

try {

    /** @var \Tatum\Model\Trade[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->orderBook()
        ->getHistoricalTrades($arg_page_size, $arg_id, $arg_pair, $arg_offset, $arg_count, $arg_types);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->orderBook()->getHistoricalTrades(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->orderBook()->getHistoricalTrades(): %s\n", 
        $exc->getMessage()
    );
}