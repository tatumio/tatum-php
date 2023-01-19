<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#sellassetonmarketplacesolanakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_sell_asset_on_marketplace_solana_kms = (new \Tatum\Model\SellAssetOnMarketplaceSolanaKMS())
    
    // Blockchain to work with.
    ->setChain('SOL')
    
    // Blockchain address of the smart contract
    ->setContractAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // Blockchain address of the asset to sell
    ->setNftAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // Blockchain address of the seller
    ->setFrom(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    
    // Price of the asset to sell. Marketplace fee will be obtained on top of this price.
    ->setPrice('100000')
    
    // (optional) The KMS identifier of the private key used for signing transactions as authority; required if <co...
    ->setAuthoritySignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // The KMS identifier of the private key of the seller
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {

    /** @var \Tatum\Model\SellAssetOnMarketplace200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->sellAssetOnMarketplaceSolanaKMS($arg_sell_asset_on_marketplace_solana_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->sellAssetOnMarketplaceSolanaKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->sellAssetOnMarketplaceSolanaKMS(): %s\n", 
        $exc->getMessage()
    );
}