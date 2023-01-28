<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#mintmultiplenftcelo
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

$arg_mint_multiple_nft_celo = (new \Tatum\Model\MintMultipleNftCelo())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // Blockchain address to send NFT token to.
    ->setTo(["0x687422eEA2cB73B5d3e242bA5456b782919AFc85"])
    
    // ID of token to be created.
    ->setTokenId(["123"])
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.or...
    ->setUrl(["https://my_token_data.com"])
    
    // (optional) List of addresses for every token, where royalty cashback for every transfer of this NFT will be ...
    ->setAuthorAddresses(null)
    
    // (optional) List of values for every token, which will be paid as a royalty for author of the NFT token with ...
    ->setCashbackValues(null)
    
    // Address of NFT token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Private key of sender address. Private key, or signature Id must be present.
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
     * POST /v3/nft/mint/batch
     * 
     * @var \Tatum\Model\MintMultipleNftMinter200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->mintMultipleNftCelo($arg_mint_multiple_nft_celo, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->mintMultipleNftCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->mintMultipleNftCelo(): %s\n", 
        $exc->getMessage()
    );
}