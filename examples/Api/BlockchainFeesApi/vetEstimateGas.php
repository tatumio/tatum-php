<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainFeesApi/#vetestimategas
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

$arg_vet_estimate_gas = (new \Tatum\Model\VetEstimateGas())
    
    // Sender account address.
    ->setFrom('0x5034aa590125b64023a0262112b98d72e3c8e40e')
    
    // Recipient account address.
    ->setTo('0x5034aa590125b64023a0262112b98d72e3c8e40e')
    
    // Amount to send.
    ->setValue('140')
    
    // (optional) Data to send to Smart Contract
    ->setData('null')
    
    // (optional) Nonce
    ->setNonce(12345);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/vet/transaction/gas
     * 
     * @var float $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->vetEstimateGas($arg_vet_estimate_gas);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainFees()->vetEstimateGas(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainFees()->vetEstimateGas(): %s\n", 
        $exc->getMessage()
    );
}