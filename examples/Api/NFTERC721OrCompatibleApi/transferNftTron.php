<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#transfernfttron
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_nft_tron = (new \Tatum\Model\TransferNftTron())
    
    // (optional) If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token.
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
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->transferNftTron($arg_transfer_nft_tron, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->transferNftTron(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->transferNftTron(): " . $exc->getMessage() . PHP_EOL;
}