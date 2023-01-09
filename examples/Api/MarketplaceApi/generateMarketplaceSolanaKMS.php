<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Marketplace#operation/GenerateMarketplaceSolanaKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#generatemarketplacesolanakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_marketplace_solana_kms = new \Tatum\Model\GenerateMarketplaceSolanaKMS();

try {
    /** @var \Tatum\Model\GenerateMarketplace200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->generateMarketplaceSolanaKMS($arg_generate_marketplace_solana_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->generateMarketplaceSolanaKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->generateMarketplaceSolanaKMS(): " . $exc->getMessage() . PHP_EOL;
}