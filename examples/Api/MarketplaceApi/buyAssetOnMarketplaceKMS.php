<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MarketplaceApi/#buyassetonmarketplacekms
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

$arg_buy_asset_on_marketplace_kms = (new \Tatum\Model\BuyAssetOnMarketplaceKMS())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address of the marketplace smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The ID of the listing with the asset that you want to buy
    ->setListingId('null')
    
    // The KMS identifier of the private key of the blockchain address from which the fee will be deducted
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be ...
    ->setIndex(null)
    
    // (optional) (Only if you pay with the native blockchain currency) The price of the asset that you want to buy...
    ->setAmount('1')
    
    // (optional) (Only if you pay with the fungible tokens) The blockchain address of the fungible tokens. Do not ...
    ->setErc20Address('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) (Only if you want to buy the asset on behalf of someone else and this person wants to pay with th...
    ->setBuyer('0x587422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/blockchain/marketplace/listing/buy
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->buyAssetOnMarketplaceKMS($arg_buy_asset_on_marketplace_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->buyAssetOnMarketplaceKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->buyAssetOnMarketplaceKMS(): %s\n", 
        $exc->getMessage()
    );
}