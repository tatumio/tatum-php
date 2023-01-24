<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#gaspumpaddressesactivatedornot
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// The blockchain to work with
$arg_chain = "ETH";

// The blockchain address that owns the gas pump address to check; can be referred to as "master address"
$arg_owner = 'owner_example';

// The index of the gas pump address to check
$arg_index = 3.4;

try {

    /**
     * GET /v3/gas-pump/activated/{chain}/{owner}/{index}
     * 
     * @var \Tatum\Model\Activated $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->gasPumpAddressesActivatedOrNot($arg_chain, $arg_owner, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->gasPumpAddressesActivatedOrNot(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->gasPumpAddressesActivatedOrNot(): %s\n", 
        $exc->getMessage()
    );
}