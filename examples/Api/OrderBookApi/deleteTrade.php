<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/OrderBookApi/#deletetrade
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

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

// Trade ID
$arg_id = "5e68c66581f2ee32bc354087";

try {

    /**
     * DELETE /v3/trade/{id}
     */
    $sdk->mainnet()
        ->api()
        ->orderBook()
        ->deleteTrade($arg_id);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->orderBook()->deleteTrade(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->orderBook()->deleteTrade(): %s\n", 
        $exc->getMessage()
    );
}