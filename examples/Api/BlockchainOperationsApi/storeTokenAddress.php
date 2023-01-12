<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#storetokenaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// On Algorand, this is the asset ID; on TRON, this is the token ID; on the other blockchains, this is the address of the smart contract.
$arg_address = '0x687422eEA2cB73B5d3e242bA5456b782919AFc85';

// The name of the token (the token symbol)
$arg_name = 'MY_TOKEN';

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeTokenAddress($arg_address, $arg_name);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->storeTokenAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->storeTokenAddress(): " . $exc->getMessage() . PHP_EOL;
}