<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#updatecashbackvalueforauthornfttron
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

$arg_update_cashback_value_for_author_nft_tron = (new \Tatum\Model\UpdateCashbackValueForAuthorNftTron())
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The ID of the NFT to update royalty information for
    ->setTokenId('123')
    
    // The blockchain address of the NFT to update royalty information for
    ->setContractAddress('TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ')
    
    // The new value of the royalty cashback to be set for the author of the NFT; to disable the royalti...
    ->setCashbackValue('0.1')
    
    // The maximum amount to be paid as the transaction fee (in TRX)
    ->setFeeLimit(600)
    
    // The private key of the NFT author's address
    ->setFromPrivateKey('842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * PUT /v3/nft/royalty
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->updateCashbackValueForAuthorNftTron($arg_update_cashback_value_for_author_nft_tron, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftTron(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftTron(): %s\n", 
        $exc->getMessage()
    );
}