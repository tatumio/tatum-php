<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/VeChain#operation/VetGetTransactionReceipt
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VeChainApi.md#vetgettransactionreceipt
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$arg_hash = '0x24f691abab680972437028af22bc7a43c3fbe8d6d7eefc420dea2daf554758a7';

try {
    /** @var \Tatum\Model\VetTxReceipt $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGetTransactionReceipt($arg_hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->veChain()->vetGetTransactionReceipt(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->veChain()->vetGetTransactionReceipt(): " . $exc->getMessage() . PHP_EOL;
}