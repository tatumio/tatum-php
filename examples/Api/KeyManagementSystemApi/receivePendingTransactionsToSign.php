<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KeyManagementSystemApi.md#receivependingtransactionstosign
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to get pending transactions for.
$arg_chain = 'chain_example';

// Signature IDs of the KMS which invokes this endpoint.
$arg_kms_signature_ids = new \Tatum\Model\KmsSignatureIds();

try {
    /** @var \Tatum\Model\PendingTransaction[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->keyManagementSystem()
        ->receivePendingTransactionsToSign($arg_chain, $arg_kms_signature_ids);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->keyManagementSystem()->receivePendingTransactionsToSign(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->keyManagementSystem()->receivePendingTransactionsToSign(): " . $exc->getMessage() . PHP_EOL;
}