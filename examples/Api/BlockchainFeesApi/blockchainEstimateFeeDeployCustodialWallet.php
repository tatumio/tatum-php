<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainFees#operation/blockchainEstimateFeeDeployCustodialWallet
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#blockchainestimatefeedeploycustodialwallet
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_estimate_fee_deploy_custodial_wallet = new \Tatum\Model\EstimateFeeDeployCustodialWallet();

try {
    /** @var \Tatum\Model\BlockchainEstimateFee200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->blockchainEstimateFeeDeployCustodialWallet($arg_estimate_fee_deploy_custodial_wallet);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->blockchainEstimateFeeDeployCustodialWallet(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->blockchainEstimateFeeDeployCustodialWallet(): " . $exc->getMessage() . PHP_EOL;
}