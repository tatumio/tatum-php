<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Transaction#operation/getTransactionsByCustomerId
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TransactionApi.md#gettransactionsbycustomerid
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transaction_filter_customer = new \Tatum\Model\TransactionFilterCustomer();

// Max number of items per page is 50. Either count or pageSize is accepted.
$arg_page_size = 10;

// Offset to obtain the next page of data.
$arg_offset = 0;

// Get total transaction count based on the filter. Either count or pageSize is accepted.
$arg_count = true;

try {
    /** @var \Tatum\Model\GetTransactionsByAccountId200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->getTransactionsByCustomerId($arg_transaction_filter_customer, $arg_page_size, $arg_offset, $arg_count);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->transaction()->getTransactionsByCustomerId(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->transaction()->getTransactionsByCustomerId(): " . $exc->getMessage() . PHP_EOL;
}