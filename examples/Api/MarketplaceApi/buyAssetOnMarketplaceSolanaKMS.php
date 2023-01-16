<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#buyassetonmarketplacesolanakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_buy_asset_on_marketplace_solana_kms = (new \Tatum\Model\BuyAssetOnMarketplaceSolanaKMS())
    
    // Blockchain to work with.
    ->setChain('SOL')
    
    // Blockchain address of the smart contract
    ->setContractAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // Blockchain address of the listing
    ->setListingId(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    
    // Blockchain address of the buyer
    ->setFrom(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    
    // (optional) The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace
    ->setAuthoritySignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // The KMS identifier of the private key of the buyer
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->buyAssetOnMarketplaceSolanaKMS($arg_buy_asset_on_marketplace_solana_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->buyAssetOnMarketplaceSolanaKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->buyAssetOnMarketplaceSolanaKMS(): " . $exc->getMessage() . PHP_EOL;
}