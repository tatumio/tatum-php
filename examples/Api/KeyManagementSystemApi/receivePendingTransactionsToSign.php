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
$arg_kms_signature_ids = (new \Tatum\Model\KmsSignatureIds())
    
    // (optional) List of the signature Ids to be used to sign transactions.
    ->setSignatureIds(["6d78dad2-518f-4e76-8255-8f1df0de6886","26d3883e-4e17-48b3-a0ee-09a3e484ac83"]);

try {

    /** @var \Tatum\Model\PendingTransaction[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->keyManagementSystem()
        ->receivePendingTransactionsToSign($arg_chain, $arg_kms_signature_ids);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->keyManagementSystem()->receivePendingTransactionsToSign(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->keyManagementSystem()->receivePendingTransactionsToSign(): %s\n", 
        $exc->getMessage()
    );
}