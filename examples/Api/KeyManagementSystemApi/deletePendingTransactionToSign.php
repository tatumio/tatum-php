<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/KeyManagementSystemApi/#deletependingtransactiontosign
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

// ID of transaction
$arg_id = 'id_example';

// Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum ERC20 based currencies.
$arg_revert = true;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * DELETE /v3/kms/{id}
     */
    $sdk->mainnet()
        ->api()
        ->keyManagementSystem()
        ->deletePendingTransactionToSign($arg_id, $arg_revert);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->keyManagementSystem()->deletePendingTransactionToSign(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->keyManagementSystem()->deletePendingTransactionToSign(): %s\n", 
        $exc->getMessage()
    );
}