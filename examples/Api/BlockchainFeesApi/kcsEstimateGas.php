<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainFees#operation/KcsEstimateGas
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#kcsestimategas
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_kcs_estimate_gas = new \Tatum\Model\KcsEstimateGas();

try {
    /** @var \Tatum\Model\PolygonEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->kcsEstimateGas($arg_kcs_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->kcsEstimateGas(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->kcsEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}