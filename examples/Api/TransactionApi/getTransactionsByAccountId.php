<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Transaction#operation/getTransactionsByAccountId
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TransactionApi.md#gettransactionsbyaccountid
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transaction_filter = new \Tatum\Model\TransactionFilter();

// Max number of items per page is 50. Either count or pageSize is accepted.
$arg_page_size = 10;

// Offset to obtain the next page of data.
$arg_offset = 0;

// Get the total transaction count based on the filter. Either count or pageSize is accepted.
$arg_count = true;

try {
    /** @var \Tatum\Model\GetTransactionsByAccountId200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->getTransactionsByAccountId($arg_transaction_filter, $arg_page_size, $arg_offset, $arg_count);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->transaction()->getTransactionsByAccountId(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->transaction()->getTransactionsByAccountId(): " . $exc->getMessage() . PHP_EOL;
}