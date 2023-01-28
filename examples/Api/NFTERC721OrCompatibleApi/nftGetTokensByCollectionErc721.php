<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#nftgettokensbycollectionerc721
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
$arg_chain = "ETH";

// Max number of items per page is 50.
$arg_page_size = 10;

// The blockchain address of the collection
$arg_address = "0x80d8bac9a6901698b3749fe336bbd1385c1f98f2";

// Offset to obtain next page of the data.
$arg_offset = 0;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/nft/collection/{chain}/{address}
     * 
     * @var \Tatum\Model\NftTokenByCollectionErc721[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTokensByCollectionErc721($arg_chain, $arg_page_size, $arg_address, $arg_offset);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->nftGetTokensByCollectionErc721(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->nftGetTokensByCollectionErc721(): %s\n", 
        $exc->getMessage()
    );
}