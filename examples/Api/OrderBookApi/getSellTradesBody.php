<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/OrderBookApi/#getselltradesbody
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

$arg_list_oder_book_active_sell_body = (new \Tatum\Model\ListOderBookActiveSellBody())
    
    // (optional) Account ID. If present, list current active sell trades for that account.
    ->setId('5e68c66581f2ee32bc354087')
    
    // (optional) Customer ID. If present, list current active buy trades for that customer.
    ->setCustomerId('5e68c66581f2ee32bc354087')
    
    // Max number of items per page is 50.
    ->setPageSize(10)
    
    // (optional) Offset to obtain next page of the data.
    ->setOffset(0)
    
    // (optional) Trade pair. If present, list current active sell trades for that pair.
    ->setPair('BTC/EUR')
    
    // (optional) Get the total trade pair count based on the filter. Either count or pageSize is accepted.
    ->setCount(true)
    
    // (optional) Trade type.
    ->setTradeType('SELL')
    
    // (optional) Amount of the trade. AND is used between filter options.
    ->setAmount(null)
    
    // (optional) Fill of the trade. AND is used between filter options.
    ->setFill(null)
    
    // (optional) Price of the trade. AND is used between filter options.
    ->setPrice(null)
    
    // (optional) Created date of the trade. AND is used between filter options.
    ->setCreated(null)
    
    // (optional) Sorts the result by selected property. The priority of the items is determined by order of the so...
    ->setSort(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/trade/sell
     * 
     * @var \Tatum\Model\Trade[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->orderBook()
        ->getSellTradesBody($arg_list_oder_book_active_sell_body);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->orderBook()->getSellTradesBody(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->orderBook()->getSellTradesBody(): %s\n", 
        $exc->getMessage()
    );
}