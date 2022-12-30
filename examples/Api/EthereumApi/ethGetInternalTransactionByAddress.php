<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Ethereum#operation/EthGetInternalTransactionByAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/EthereumApi.md#ethgetinternaltransactionbyaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$arg_address = '0x8ce4e40889a13971681391aad29e88efaf91f784';

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain next page of the data.
$arg_offset = 0;

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthTxInternal[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetInternalTransactionByAddress($arg_address, $arg_page_size, $arg_offset, $arg_x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->ethereum()->ethGetInternalTransactionByAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->ethereum()->ethGetInternalTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}