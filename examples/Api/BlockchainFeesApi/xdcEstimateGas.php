<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainFeesApi/#xdcestimategas
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

$arg_xdc_estimate_gas = (new \Tatum\Model\XdcEstimateGas())
    
    // Sender address.
    ->setFrom('xdcfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')
    
    // Blockchain address to send assets
    ->setTo('xdc687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Amount to be sent in XDC.
    ->setAmount('100000');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/xdc/gas
     * 
     * @var \Tatum\Model\GasEstimated $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->xdcEstimateGas($arg_xdc_estimate_gas);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainFees()->xdcEstimateGas(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainFees()->xdcEstimateGas(): %s\n", 
        $exc->getMessage()
    );
}