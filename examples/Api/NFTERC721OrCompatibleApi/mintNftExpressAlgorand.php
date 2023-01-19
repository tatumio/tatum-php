<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#mintnftexpressalgorand
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_mint_nft_express_algorand = (new \Tatum\Model\MintNftExpressAlgorand())
    
    // The blockchain to work with
    ->setChain('ALGO')
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.or...
    ->setUrl('https://my_token_data.com')
    
    // The name of the NFT
    ->setName('My Crazy NFT')
    
    // (optional) 
    ->setAttr(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\MintNftExpress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->mintNftExpressAlgorand($arg_mint_nft_express_algorand, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->mintNftExpressAlgorand(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->mintNftExpressAlgorand(): %s\n", 
        $exc->getMessage()
    );
}