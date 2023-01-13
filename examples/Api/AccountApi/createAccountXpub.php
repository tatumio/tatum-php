<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#createaccountxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_account_xpub = (new \Tatum\Model\CreateAccountXpub())
    ->setCurrency('BTC')
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid')
    ->setCustomer(null)/* optional */
    ->setCompliant(false)/* optional */
    ->setAccountCode('AC_1011_B')/* optional */
    ->setAccountingCurrency('USD')/* optional */
    ->setAccountNumber('123456')/* optional */;

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->createAccountXpub($arg_create_account_xpub);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->account()->createAccountXpub(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->account()->createAccountXpub(): " . $exc->getMessage() . PHP_EOL;
}