<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MaliciousAddressApi.md#checkmalicousaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain Address to check
$arg_address = '0x002Bf459dC58584D58886169EA0E80f3Ca95FFAF';

try {

    /** @var \Tatum\Model\CheckMalicousAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->maliciousAddress()
        ->checkMalicousAddress($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->maliciousAddress()->checkMalicousAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->maliciousAddress()->checkMalicousAddress(): " . $exc->getMessage() . PHP_EOL;
}