<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#verifysolananftkms
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

$arg_verify_solana_nftkms = (new \Tatum\Model\VerifySolanaNFTKMS())
    
    // The blockchain to work with
    ->setChain('SOL')
    
    // The blockchain address of the NFT to verify
    ->setNftAddress('CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe')
    
    // The blockchain address of the NFT collection where the NFT should be verified in. The collection ...
    ->setCollectionAddress('CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe')
    
    // The blockchain address of the collection verifier on behalf of whom the transaction will be origi...
    ->setFrom('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/nft/verify
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->verifySolanaNFTKMS($arg_verify_solana_nftkms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->verifySolanaNFTKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->verifySolanaNFTKMS(): %s\n", 
        $exc->getMessage()
    );
}