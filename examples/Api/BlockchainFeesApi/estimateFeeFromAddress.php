<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainFeesApi/#estimatefeefromaddress
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

$arg_estimate_fee_from_address = (new \Tatum\Model\EstimateFeeFromAddress())
    
    // Blockchain to estimate fee for.
    ->setChain('null')
    
    // Type of transaction
    ->setType('null')
    
    // Array of addresses. Tatum will automatically scan last 100 transactions for each address and will...
    ->setFromAddress(null)
    
    // Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between ...
    ->setTo(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/blockchain/estimate
     * 
     * @var \Tatum\Model\EstimateFee200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->estimateFeeFromAddress($arg_estimate_fee_from_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainFees()->estimateFeeFromAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainFees()->estimateFeeFromAddress(): %s\n", 
        $exc->getMessage()
    );
}