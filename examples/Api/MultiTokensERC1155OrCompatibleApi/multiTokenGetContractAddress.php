<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetcontractaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Blockchain to work with
$arg_chain = 'chain_example';

// Transaction hash
$arg_hash = "0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7";

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\MultiTokenGetContractAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetContractAddress($arg_chain, $arg_hash, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->multiTokensERC1155OrCompatible()->multiTokenGetContractAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->multiTokensERC1155OrCompatible()->multiTokenGetContractAddress(): %s\n", 
        $exc->getMessage()
    );
}