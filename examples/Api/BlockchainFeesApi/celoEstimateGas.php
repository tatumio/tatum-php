<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#celoestimategas
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_celo_estimate_gas = (new \Tatum\Model\CeloEstimateGas())
    
    // Sender address.
    ->setFrom('0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')
    
    // Blockchain address to send assets
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Amount to be sent.
    ->setAmount('100000')
    
    // (optional) Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format
    ->setData('4d79206e6f746520746f2074686520726563697069656e74');

try {
    /** @var \Tatum\Model\CeloEstimateGas200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->celoEstimateGas($arg_celo_estimate_gas);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->celoEstimateGas(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->celoEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}