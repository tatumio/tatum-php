<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/VirtualCurrency#operation/getCurrency
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VirtualCurrencyApi.md#getcurrency
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_name = 'name_example';

try {
    /** @var \Tatum\Model\VC $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualCurrency()
        ->getCurrency($arg_name);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->virtualCurrency()->getCurrency(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->virtualCurrency()->getCurrency(): " . $exc->getMessage() . PHP_EOL;
}