<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/TransactionApi/#sendtransactionbatch
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

$arg_batch_create_transaction = (new \Tatum\Model\BatchCreateTransaction())
    
    // Internal sender account ID within Tatum platform
    ->setSenderAccountId('5e6645712b55823de7ea82f1')
    
    // (optional) Array of block seals.
    ->setTransaction(null);

try {

    /**
     * POST /v3/ledger/transaction/batch
     * 
     * @var string[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->transaction()
        ->sendTransactionBatch($arg_batch_create_transaction);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->transaction()->sendTransactionBatch(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->transaction()->sendTransactionBatch(): %s\n", 
        $exc->getMessage()
    );
}