<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#oneformataddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Address in HEX (ETH compatible) format.
$arg_address = '0xa7673161CbfE0116A4De9E341f8465940c2211d4';

try {
    /** @var \Tatum\Model\GeneratedAddressOne $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneFormatAddress($arg_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->oneFormatAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->oneFormatAddress(): " . $exc->getMessage() . PHP_EOL;
}