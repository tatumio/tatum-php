<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/VirtualCurrency#operation/mintCurrency
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VirtualCurrencyApi.md#mintcurrency
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_virtual_currency_operation = new \Tatum\Model\VirtualCurrencyOperation();

try {
    /** @var \Tatum\Model\TransactionResult $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualCurrency()
        ->mintCurrency($arg_virtual_currency_operation);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->virtualCurrency()->mintCurrency(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->virtualCurrency()->mintCurrency(): " . $exc->getMessage() . PHP_EOL;
}