<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#transfernfttron
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

$arg_transfer_nft_tron = (new \Tatum\Model\TransferNftTron())
    
    // (optional) If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the ...
    ->setValue('1')
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // Blockchain address to send NFT token to
    ->setTo('TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ')
    
    // ID of the token.
    ->setTokenId('123')
    
    // Address of NFT token
    ->setContractAddress('TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701')
    
    // The maximum amount to be paid as the transaction fee (in TRX)
    ->setFeeLimit(600);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/nft/transaction
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->transferNftTron($arg_transfer_nft_tron, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->transferNftTron(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->transferNftTron(): %s\n", 
        $exc->getMessage()
    );
}