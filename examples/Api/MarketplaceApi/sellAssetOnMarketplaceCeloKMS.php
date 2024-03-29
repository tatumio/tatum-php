<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MarketplaceApi/#sellassetonmarketplacecelokms
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

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

$arg_sell_asset_on_marketplace_celo_kms = (new \Tatum\Model\SellAssetOnMarketplaceCeloKMS())
    
    // Blockchain to work with.
    ->setChain('CELO')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // Address of the marketplace smart contract.
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Address of the NFT asset to sell smart contract.
    ->setNftAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Address of the seller of the NFT asset.
    ->setSeller('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Optional address of the ERC20 token, which will be used as a selling currency of the NFT.
    ->setErc20Address('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // ID of the listing. It's up to the developer to generate unique ID
    ->setListingId('null')
    
    // (optional) Amount of the assets to be sent. For ERC-721 tokens, enter amount only in case of natiev currency...
    ->setAmount('1')
    
    // ID of token, if transaction is for ERC-721 or ERC-1155.
    ->setTokenId('100000')
    
    // Price of the asset to sell. Marketplace fee will be obtained on top of this price.
    ->setPrice('100000')
    
    // True if asset is NFT of type ERC721, false if ERC1155.
    ->setIsErc721(true)
    
    // The KMS identifier of the private key of the seller's blockchain address
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) \Tatum\Model\DeployErc20Fee
    ->setFee(null);

try {

    /**
     * POST /v3/blockchain/marketplace/listing/sell
     * 
     * @var \Tatum\Model\SellAssetOnMarketplace200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->sellAssetOnMarketplaceCeloKMS($arg_sell_asset_on_marketplace_celo_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->sellAssetOnMarketplaceCeloKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->sellAssetOnMarketplaceCeloKMS(): %s\n", 
        $exc->getMessage()
    );
}