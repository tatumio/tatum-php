<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#mintnftkms
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

$arg_mint_nft_kms = (new \Tatum\Model\MintNftKMS())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address to send the NFT to
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The blockchain address of the smart contract to build the NFT on
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The ID of the NFT
    ->setTokenId('123')
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.or...
    ->setUrl('https://my_token_data.com')
    
    // The KMS identifier of the private key of the blockchain address that will pay the fee for the tra...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee ...
    ->setIndex(null)
    
    // (optional) The blockchain address of the custom fungible token
    ->setErc20('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Set to "true" if the NFT smart contract is of the provenance type; otherwise, set to "false".
    ->setProvenance(true)
    
    // (optional) The blockchain addresses where the royalties will be sent every time the minted NFT is transferre...
    ->setAuthorAddresses(null)
    
    // (optional) The amounts of the royalties that will be paid to the authors of the minted NFT every time the NF...
    ->setCashbackValues(null)
    
    // (optional) The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be...
    ->setFixedValues(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null);

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
        ->mintNftKMS($arg_mint_nft_kms, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->mintNftKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->mintNftKMS(): %s\n", 
        $exc->getMessage()
    );
}