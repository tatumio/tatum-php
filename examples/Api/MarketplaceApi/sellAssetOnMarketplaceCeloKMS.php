<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Marketplace#operation/SellAssetOnMarketplaceCeloKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#sellassetonmarketplacecelokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_sell_asset_on_marketplace_celo_kms = new \Tatum\Model\SellAssetOnMarketplaceCeloKMS();

try {
    /** @var \Tatum\Model\SellAssetOnMarketplace200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->sellAssetOnMarketplaceCeloKMS($arg_sell_asset_on_marketplace_celo_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->sellAssetOnMarketplaceCeloKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->sellAssetOnMarketplaceCeloKMS(): " . $exc->getMessage() . PHP_EOL;
}