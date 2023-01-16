<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#verifysolananft
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_verify_solana_nft = (new \Tatum\Model\VerifySolanaNFT())
    
    // The blockchain to work with
    ->setChain('SOL')
    
    // The blockchain address of the NFT to verify
    ->setNftAddress('CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe')
    
    // The blockchain address of the NFT collection where the NFT should be verified in. The collection ...
    ->setCollectionAddress('CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe')
    
    // The blockchain address of the collection verifier on behalf of whom the transaction will be origi...
    ->setFrom('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // The private key of the collection verifier's address
    ->setFromPrivateKey('3abc79a31093e4cfa4a724e94a44906cbbc3a32e2f75f985a28616676a5dbaf1de8d82a7e1d0561bb0e1b729c7a9b9b1708cf2803ad0ca928a332587ace391ad');

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->verifySolanaNFT($arg_verify_solana_nft);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->verifySolanaNFT(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->verifySolanaNFT(): %s\n", 
        $exc->getMessage()
    );
}