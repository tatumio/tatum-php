<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/WithdrawalApi.md#completewithdrawal
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

// Blockchain transaction ID of created withdrawal
$arg_tx_id = 'tx_id_example';

try {
        $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->completeWithdrawal($arg_id, $arg_tx_id);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->withdrawal()->completeWithdrawal(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->withdrawal()->completeWithdrawal(): " . $exc->getMessage() . PHP_EOL;
}