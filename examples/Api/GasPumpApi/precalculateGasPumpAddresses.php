<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#precalculategaspumpaddresses
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_gas_pump = new \Tatum\Model\CreateGasPump();

try {

    /** @var string[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->precalculateGasPumpAddresses($arg_create_gas_pump);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->precalculateGasPumpAddresses(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->precalculateGasPumpAddresses(): " . $exc->getMessage() . PHP_EOL;
}