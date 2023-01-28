<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/KeyManagementSystemApi/#getpendingtransactionstosign
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

// Blockchain to get pending transactions for.
$arg_chain = 'chain_example';

// Signature IDs of the KMS which invokes this endpoint. If multiple, they should be separated by comma.
$arg_signatures = "6d78dad2-518f-4e76-8255-8f1df0de6884,6d78dad2-518f-4e76-8255-8f1df0de6885,6d78dad2-518f-4e76-8255-8f1df0de6886";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/kms/pending/{chain}
     * 
     * @var \Tatum\Model\PendingTransaction[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->keyManagementSystem()
        ->getPendingTransactionsToSign($arg_chain, $arg_signatures);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->keyManagementSystem()->getPendingTransactionsToSign(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->keyManagementSystem()->getPendingTransactionsToSign(): %s\n", 
        $exc->getMessage()
    );
}