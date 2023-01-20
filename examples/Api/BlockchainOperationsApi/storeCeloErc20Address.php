<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#storeceloerc20address
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// ERC-20 contract address
$arg_address = "0x687422eEA2cB73B5d3e242bA5456b782919AFc85";

// ERC-20 symbol name.
$arg_name = "MY_TOKEN";

try {

    /**
     * POST /v3/offchain/celo/erc20/{name}/{address}
     */
    $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeCeloErc20Address($arg_address, $arg_name);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->storeCeloErc20Address(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->storeCeloErc20Address(): %s\n", 
        $exc->getMessage()
    );
}