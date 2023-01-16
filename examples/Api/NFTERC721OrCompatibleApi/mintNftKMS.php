<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#mintnftkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
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
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a>
    ->setUrl('https://my_token_data.com')
    
    // The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic
    ->setIndex(null)
    
    // (optional) The blockchain address of the custom fungible token
    ->setErc20('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Set to "true" if the NFT smart contract is of the <a href="#operation/NftDeployErc721">provenance type</a>; otherwise, set to "false".
    ->setProvenance(true)
    
    // (optional) The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in a native blockchain currency such as ETH on Ethereum, MATIC on Polygon, and so on
    ->setAuthorAddresses(null)
    
    // (optional) The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency for <a href="#operation/NftDeployErc721">cashback smart contracts</a> or as a percentage of the NFT price for <a href="#operation/NftDeployErc721">provenance smart contracts</a>
    ->setCashbackValues(null)
    
    // (optional) The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties
    ->setFixedValues(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\MintNftExpress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->mintNftKMS($arg_mint_nft_kms, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->mintNftKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->mintNftKMS(): " . $exc->getMessage() . PHP_EOL;
}