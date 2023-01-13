<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VirtualCurrencyApi.md#createcurrency
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_virtual_currency = (new \Tatum\Model\VirtualCurrency())
    ->setName('VC_VIRTUAL')
    ->setSupply('1000000')
    ->setBasePair('BTC')
    ->setBaseRate(1)/* optional */
    ->setCustomer(null)/* optional */
    ->setDescription('My Virtual Token description.')/* optional */
    ->setAccountCode('AC_1011_B')/* optional */
    ->setAccountNumber('1234567890')/* optional */
    ->setAccountingCurrency('USD')/* optional */;

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk->mainnet()
        ->api()
        ->virtualCurrency()
        ->createCurrency($arg_virtual_currency);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->virtualCurrency()->createCurrency(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->virtualCurrency()->createCurrency(): " . $exc->getMessage() . PHP_EOL;
}