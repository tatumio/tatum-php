<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/WithdrawalApi.md#storewithdrawal
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_withdrawal = (new \Tatum\Model\Withdrawal())
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    ->setAddress('mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7')
    ->setAmount('0.001')
    ->setAttr('12345')/* optional */
    ->setCompliant(false)/* optional */
    ->setFee('0.0005')
    ->setMultipleAmounts(null)/* optional */
    ->setPaymentId('12345')/* optional */
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\WithdrawalResponse $response */
    $response = $sdk->mainnet()
        ->api()
        ->withdrawal()
        ->storeWithdrawal($arg_withdrawal);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->withdrawal()->storeWithdrawal(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->withdrawal()->storeWithdrawal(): " . $exc->getMessage() . PHP_EOL;
}