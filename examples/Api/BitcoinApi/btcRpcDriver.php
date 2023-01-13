<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#btcrpcdriver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_btc_rpc_driver_request = (new \Tatum\Model\BtcRpcDriverRequest())
    ->setJsonrpc('1.0')/* optional */
    ->setId('test')/* optional */
    ->setMethod('getblockcount')/* optional */
    ->setParams([])/* optional */;

try {
    /** @var object $response */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoin()
        ->btcRpcDriver($arg_btc_rpc_driver_request);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bitcoin()->btcRpcDriver(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bitcoin()->btcRpcDriver(): " . $exc->getMessage() . PHP_EOL;
}