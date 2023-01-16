<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#buyassetonmarketplacecelokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_buy_asset_on_marketplace_celo_kms = (new \Tatum\Model\BuyAssetOnMarketplaceCeloKMS())
    
    // Blockchain to work with.
    ->setChain('CELO')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // Address of the marketplace smart contract.
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Optional address of the ERC20 token, which will be used as a selling currency of the NFT.
    ->setErc20Address('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) In case of the ERC20 listing, it's possible to buy on behalf of someone else. This value is the a...
    ->setBuyer('0x587422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // ID of the listing.
    ->setListingId('null')
    
    // Amount of the assets to be sent for buying.
    ->setAmount('1')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) 
    ->setFee(null);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->buyAssetOnMarketplaceCeloKMS($arg_buy_asset_on_marketplace_celo_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->buyAssetOnMarketplaceCeloKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->buyAssetOnMarketplaceCeloKMS(): %s\n", 
        $exc->getMessage()
    );
}