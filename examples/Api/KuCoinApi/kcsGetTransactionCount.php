<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/KuCoin#operation/KcsGetTransactionCount
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KuCoinApi.md#kcsgettransactioncount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// address
$arg_address = '0xdac17f958d2ee523a2206206994597c13d831ec7';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGetTransactionCount($arg_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->kuCoin()->kcsGetTransactionCount(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->kuCoin()->kcsGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}