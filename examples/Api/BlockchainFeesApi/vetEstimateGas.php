<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#vetestimategas
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_vet_estimate_gas = (new \Tatum\Model\VetEstimateGas())
    ->setFrom('0x5034aa590125b64023a0262112b98d72e3c8e40e')
    ->setTo('0x5034aa590125b64023a0262112b98d72e3c8e40e')
    ->setValue('140')
    ->setData('null')/* optional */
    ->setNonce(12345)/* optional */;

try {
    /** @var float $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->vetEstimateGas($arg_vet_estimate_gas);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->vetEstimateGas(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->vetEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}