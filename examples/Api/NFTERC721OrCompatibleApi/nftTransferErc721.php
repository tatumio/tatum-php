<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/NFTERC721OrCompatible#operation/NftTransferErc721
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#nfttransfererc721
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_nft_transfer_erc721_request = new \Tatum\Model\NftTransferErc721Request();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftTransferErc721($arg_nft_transfer_erc721_request, $arg_x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->nftTransferErc721(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->nftTransferErc721(): " . $exc->getMessage() . PHP_EOL;
}