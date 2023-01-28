<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#mintnftminter
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

$arg_mint_nft_minter = (new \Tatum\Model\MintNftMinter())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address of the smart contract to build the NFT on
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The blockchain address of the Tatum NFT minter; this is the address that you added as an NFT mint...
    ->setMinter('0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94')
    
    // The blockchain address to send the NFT to
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The ID of the NFT
    ->setTokenId('123')
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.or...
    ->setUrl('https://my_token_data.com');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/nft/mint
     * 
     * @var \Tatum\Model\MintNftExpress200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->mintNftMinter($arg_mint_nft_minter, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->mintNftMinter(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->mintNftMinter(): %s\n", 
        $exc->getMessage()
    );
}