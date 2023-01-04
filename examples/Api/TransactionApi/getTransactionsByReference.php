<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Transaction#operation/getTransactionsByReference
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TransactionApi.md#gettransactionsbyreference
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_reference = 'reference_example';

try {
    /** @var \Tatum\Model\Transaction[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->getTransactionsByReference($arg_reference);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->transaction()->getTransactionsByReference(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->transaction()->getTransactionsByReference(): " . $exc->getMessage() . PHP_EOL;
}