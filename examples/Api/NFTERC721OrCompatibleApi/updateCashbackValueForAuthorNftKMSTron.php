<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#updatecashbackvalueforauthornftkmstron
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

$arg_update_cashback_value_for_author_nft_kms_tron = (new \Tatum\Model\UpdateCashbackValueForAuthorNftKMSTron())
    
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
    
    // The blockchain address of the NFT author from which the transaction will be performed
    ->setAccount('TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ')
    
    // The KMS identifier of the private key of the NFT author's address
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the NFT author's address that was gener...
    ->setIndex(null);

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
        ->updateCashbackValueForAuthorNftKMSTron($arg_update_cashback_value_for_author_nft_kms_tron, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMSTron(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMSTron(): %s\n", 
        $exc->getMessage()
    );
}