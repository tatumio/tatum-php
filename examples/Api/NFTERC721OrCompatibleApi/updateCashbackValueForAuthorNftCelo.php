<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#updatecashbackvalueforauthornftcelo
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

$arg_update_cashback_value_for_author_nft_celo = (new \Tatum\Model\UpdateCashbackValueForAuthorNftCelo())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // The ID of the NFT to update royalty information for
    ->setTokenId('123')
    
    // The blockchain address of the NFT to update royalty information for
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The new value of the royalty cashback to be set for the author of the NFT; to disable the royalti...
    ->setCashbackValue('0.1')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // The private key of the NFT author's address
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null);

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
        ->updateCashbackValueForAuthorNftCelo($arg_update_cashback_value_for_author_nft_celo, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftCelo(): %s\n", 
        $exc->getMessage()
    );
}