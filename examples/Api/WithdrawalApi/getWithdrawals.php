<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Withdrawal#operation/GetWithdrawals
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/WithdrawalApi.md#getwithdrawals
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Max number of items per page is 50.
$arg_page_size = 10;

// Currency of the withdrawal
$arg_currency = 'BTC';

// Status of the withdrawal
$arg_status = 'Done';

// Offset to obtain next page of the data.
$arg_offset = 0;

try {
    /** @var \Tatum\Model\WithdrawalObject[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->getWithdrawals($arg_page_size, $arg_currency, $arg_status, $arg_offset);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->withdrawal()->getWithdrawals(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->withdrawal()->getWithdrawals(): " . $exc->getMessage() . PHP_EOL;
}