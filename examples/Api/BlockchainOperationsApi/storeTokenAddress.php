<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#storetokenaddress
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

// On Algorand, this is the asset ID; on TRON, this is the token ID; on the other blockchains, this is the address of the smart contract.
$arg_address = "0x687422eEA2cB73B5d3e242bA5456b782919AFc85";

// The name of the token (the token symbol)
$arg_name = "MY_TOKEN";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/token/{name}/{address}
     */
    $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeTokenAddress($arg_address, $arg_name);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->storeTokenAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->storeTokenAddress(): %s\n", 
        $exc->getMessage()
    );
}