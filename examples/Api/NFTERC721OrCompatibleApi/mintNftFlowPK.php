<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#mintnftflowpk
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

$arg_mint_nft_flow_pk = (new \Tatum\Model\MintNftFlowPK())
    
    // The blockchain to work with
    ->setChain('FLOW')
    
    // Blockchain address to send NFT token to.
    ->setTo('0xc1b45bc27b9c61c3')
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.or...
    ->setUrl('https://my_token_data.com')
    
    // Address of NFT token
    ->setContractAddress('17a50dad-bcb1-4f3d-ae2c-ea2bfb04419f')
    
    // Blockchain address of the sender account.
    ->setAccount('0xc1b45bc27b9c61c3')
    
    // Private key of sender address. Private key, mnemonic and index or signature Id must be present.
    ->setPrivateKey('05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2');

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
        ->mintNftFlowPK($arg_mint_nft_flow_pk, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->mintNftFlowPK(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->mintNftFlowPK(): %s\n", 
        $exc->getMessage()
    );
}