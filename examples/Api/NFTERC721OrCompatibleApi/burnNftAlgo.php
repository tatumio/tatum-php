<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#burnnftalgo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_burn_nft_algo = (new \Tatum\Model\BurnNftAlgo())
    
    // The blockchain to work with
    ->setChain('ALGO')
    
    // The ID of the NFT to burn; this is the ID from the <code>assetIndex</code> parameter returned in the response body of the <a href="#operation/NftMintErc721">minting call</a>
    ->setContractAddress('116363571')
    
    // The private key of the blockchain address from which the fee will be deducted
    ->setFromPrivateKey('46OPDKNDLB35M3QMRRZEAW2HDTDT2LFHRUCHDE5FJZAJOV7GDPCC6AYZ6KCUULTHA4QL6YPHN2PNEXHPJMUZGHYJXQK6SUL2HQ2MLXQ');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->burnNftAlgo($arg_burn_nft_algo, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->burnNftAlgo(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->burnNftAlgo(): " . $exc->getMessage() . PHP_EOL;
}