<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Harmony#operation/OneGetBlock
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#onegetblock
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Block hash or block number
$arg_hash = 6470657;

// Shard to read data from
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\EthBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetBlock($arg_hash, $arg_shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->oneGetBlock(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->oneGetBlock(): " . $exc->getMessage() . PHP_EOL;
}