<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#unblockamountwithtransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockage ID
$arg_id = "5e6be89ee6aa436299950c3f";

$arg_unblock_amount = (new \Tatum\Model\UnblockAmount())
    ->setRecipientAccountId('5e6645712b55823de7ea82f2')
    ->setAmount('5')
    ->setAnonymous(false)/* optional */
    ->setCompliant(false)/* optional */
    ->setTransactionCode('1_01_EXTERNAL_CODE')/* optional */
    ->setPaymentId('9625')/* optional */
    ->setRecipientNote('Private note')/* optional */
    ->setBaseRate(1)/* optional */
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\TransactionResult $response */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->unblockAmountWithTransaction($arg_id, $arg_unblock_amount);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->account()->unblockAmountWithTransaction(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->account()->unblockAmountWithTransaction(): " . $exc->getMessage() . PHP_EOL;
}