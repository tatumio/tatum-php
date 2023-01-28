<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#transfernftsolanakms
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

$arg_transfer_nft_solana_kms = (new \Tatum\Model\TransferNftSolanaKMS())
    
    // The blockchain to work with
    ->setChain('SOL')
    
    // The blockchain address to send the NFT from; this is the address that you used in the <code>to</c...
    ->setFrom('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // The blockchain address to send the NFT to
    ->setTo('9pSkqSG71Sb25ia9WBFhoeBYjp8dhUf7fRux9xrDq89b')
    
    // The blockchain address of the NFT; this is the address from the <code>nftAddress</code> parameter...
    ->setContractAddress('3tzudv5KaoqmieWiBUqzWokKEtTvx1wQMapVKeH7CHaq')
    
    // The KMS identifier of the private key of the blockchain address that you are sending the NFT from...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

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
        ->transferNftSolanaKMS($arg_transfer_nft_solana_kms, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->transferNftSolanaKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->transferNftSolanaKMS(): %s\n", 
        $exc->getMessage()
    );
}