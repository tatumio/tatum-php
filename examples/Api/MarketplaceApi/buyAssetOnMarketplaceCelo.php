<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MarketplaceApi/#buyassetonmarketplacecelo
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

$arg_buy_asset_on_marketplace_celo = (new \Tatum\Model\BuyAssetOnMarketplaceCelo())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // The blockchain address of the marketplace smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The ID of the listing with the asset that you want to buy
    ->setListingId('null')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // The private key of the blockchain address from which the fee will be deducted
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
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
        ->buyAssetOnMarketplaceCelo($arg_buy_asset_on_marketplace_celo);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->buyAssetOnMarketplaceCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->buyAssetOnMarketplaceCelo(): %s\n", 
        $exc->getMessage()
    );
}