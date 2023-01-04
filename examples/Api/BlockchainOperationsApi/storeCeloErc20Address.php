<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/storeCeloErc20Address
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#storeceloerc20address
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// ERC-20 contract address
$arg_address = '0x687422eEA2cB73B5d3e242bA5456b782919AFc85';

// ERC-20 symbol name.
$arg_name = 'MY_TOKEN';

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeCeloErc20Address($arg_address, $arg_name);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->storeCeloErc20Address(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->storeCeloErc20Address(): " . $exc->getMessage() . PHP_EOL;
}