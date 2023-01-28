<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#nftgetroyaltyerc721
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

// The blockchain to work with
$arg_chain = 'chain_example';

// The blockchain address of the NFT to get royalty information for
$arg_contract_address = "0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326";

// The ID of the NFT to get royalty information for<br/>Do <b>not</b> use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana.
$arg_token_id = "123";

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/nft/royalty/{chain}/{contractAddress}/{tokenId}
     * 
     * @var \Tatum\Model\NftRoyaltyErc721 $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetRoyaltyErc721($arg_chain, $arg_contract_address, $arg_token_id, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->nftGetRoyaltyErc721(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->nftGetRoyaltyErc721(): %s\n", 
        $exc->getMessage()
    );
}