<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#deploynftcelo
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

$arg_deploy_nft_celo = (new \Tatum\Model\DeployNftCelo())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // Name of the NFT token
    ->setName('My ERC721')
    
    // (optional) True if the contract is provenance percentage royalty type. False by default. <a href="https://gi...
    ->setProvenance(false)
    
    // (optional) True if the contract is fixed price royalty type. False by default. <a href="https://github.com/t...
    ->setCashback(false)
    
    // (optional) True if the contract is publicMint type. False by default.
    ->setPublicMint(true)
    
    // Symbol of the NFT token
    ->setSymbol('ERC_SYMBOL')
    
    // Private key of account address, from which gas for deployment of ERC721 will be paid. Private key...
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/nft/deploy
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->deployNftCelo($arg_deploy_nft_celo, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->deployNftCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->deployNftCelo(): %s\n", 
        $exc->getMessage()
    );
}