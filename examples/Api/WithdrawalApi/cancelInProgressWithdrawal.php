<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/WithdrawalApi.md#cancelinprogresswithdrawal
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// ID of created withdrawal
$arg_id = 'id_example';

// Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum based currencies when gas was consumed but transaction was reverted.
$arg_revert = true;

try {
    $sdk->mainnet()
        ->api()
        ->withdrawal()
        ->cancelInProgressWithdrawal($arg_id, $arg_revert);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->withdrawal()->cancelInProgressWithdrawal(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->withdrawal()->cancelInProgressWithdrawal(): " . $exc->getMessage() . PHP_EOL;
}