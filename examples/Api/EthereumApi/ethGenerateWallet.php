<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Ethereum#operation/EthGenerateWallet
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/EthereumApi.md#ethgeneratewallet
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Mnemonic to use for generating extended public and private keys.
$arg_mnemonic = 'mnemonic_example';

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\Wallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGenerateWallet($arg_mnemonic, $arg_x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->ethereum()->ethGenerateWallet(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->ethereum()->ethGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}