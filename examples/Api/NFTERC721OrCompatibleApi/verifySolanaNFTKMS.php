<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#verifysolananftkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_verify_solana_nftkms = (new \Tatum\Model\VerifySolanaNFTKMS())
    
    // The blockchain to work with
    ->setChain('SOL')
    
    // The blockchain address of the NFT to verify
    ->setNftAddress('CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe')
    
    // The blockchain address of the NFT collection where the NFT should be verified in. The collection must be a sized collection that was introduced in <a href="https://docs.metaplex.com/programs/token-metadata/changelog/v1.3" target="_blank">Version 1.3</a> of the Metaplex Token Metadata program.
    ->setCollectionAddress('CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe')
    
    // The blockchain address of the collection verifier on behalf of whom the transaction will be originated. The transaction fee will be paid from this address.
    ->setFrom('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->verifySolanaNFTKMS($arg_verify_solana_nftkms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->verifySolanaNFTKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->verifySolanaNFTKMS(): " . $exc->getMessage() . PHP_EOL;
}