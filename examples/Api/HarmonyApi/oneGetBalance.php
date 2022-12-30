<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Harmony#operation/OneGetBalance
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#onegetbalance
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$arg_address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

// Shard to read data from
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\OneBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetBalance($arg_address, $arg_shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->oneGetBalance(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->oneGetBalance(): " . $exc->getMessage() . PHP_EOL;
}