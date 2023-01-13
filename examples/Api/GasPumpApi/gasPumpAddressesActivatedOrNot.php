<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#gaspumpaddressesactivatedornot
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The blockchain to work with
$arg_chain = "ETH";

// The blockchain address that owns the gas pump address to check; can be referred to as "master address"
$arg_owner = "'owner_example'";

// The index of the gas pump address to check
$arg_index = 3.4;

try {
    /** @var \Tatum\Model\Activated $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->gasPumpAddressesActivatedOrNot($arg_chain, $arg_owner, $arg_index);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->gasPumpAddressesActivatedOrNot(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->gasPumpAddressesActivatedOrNot(): " . $exc->getMessage() . PHP_EOL;
}