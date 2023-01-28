<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainFeesApi/#ethestimategasbatch
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

$arg_eth_estimate_gas_array = (new \Tatum\Model\EthEstimateGasArray())
    
    // \Tatum\Model\EthEstimateGas[]
    ->setEstimations(null);

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/ethereum/gas/batch
     * 
     * @var \Tatum\Model\EthGasEstimationBatch $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->ethEstimateGasBatch($arg_eth_estimate_gas_array, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainFees()->ethEstimateGasBatch(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainFees()->ethEstimateGasBatch(): %s\n", 
        $exc->getMessage()
    );
}