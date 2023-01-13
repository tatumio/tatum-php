<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KeyManagementSystemApi.md#deletependingtransactiontosign
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// ID of transaction
$arg_id = 'id_example';

// Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum ERC20 based currencies.
$arg_revert = true;

try {

    $sdk
        ->mainnet()
        ->api()
        ->keyManagementSystem()
        ->deletePendingTransactionToSign($arg_id, $arg_revert);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->keyManagementSystem()->deletePendingTransactionToSign(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->keyManagementSystem()->deletePendingTransactionToSign(): " . $exc->getMessage() . PHP_EOL;
}