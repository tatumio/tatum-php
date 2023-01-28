<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#mintmultiplenftminter
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

$arg_mint_multiple_nft_minter = (new \Tatum\Model\MintMultipleNftMinter())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // Blockchain address to send NFT token to.
    ->setTo(["0x687422eEA2cB73B5d3e242bA5456b782919AFc85"])
    
    // ID of token to be created.
    ->setTokenId(["123"])
    
    // Address of NFT minter, which will be used to mint the tokens. From this address, transaction fees...
    ->setMinter('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.or...
    ->setUrl(["https://my_token_data.com"])
    
    // Address of NFT token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) (Celo only) The currency in which the transaction fee will be paid
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
        ->mintMultipleNftMinter($arg_mint_multiple_nft_minter, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->mintMultipleNftMinter(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->mintMultipleNftMinter(): %s\n", 
        $exc->getMessage()
    );
}