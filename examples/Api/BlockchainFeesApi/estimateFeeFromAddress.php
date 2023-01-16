<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#estimatefeefromaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_estimate_fee_from_address = (new \Tatum\Model\EstimateFeeFromAddress())
    
    // Blockchain to estimate fee for.
    ->setChain('null')
    
    // Type of transaction
    ->setType('null')
    
    // Array of addresses. Tatum will automatically scan last 100 transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only.
    ->setFromAddress(null)
    
    // Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee.
    ->setTo(null);

try {
    /** @var \Tatum\Model\EstimateFee200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->estimateFeeFromAddress($arg_estimate_fee_from_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->estimateFeeFromAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->estimateFeeFromAddress(): " . $exc->getMessage() . PHP_EOL;
}