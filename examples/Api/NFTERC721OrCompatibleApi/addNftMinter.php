<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#addnftminter
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_add_nft_minter = (new \Tatum\Model\AddNftMinter())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address of the NFT smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The blockchain address to add to the smart contract as an NFT minter<br/>To find the address of the Tatum NFT minter for your blockchain, see the table in "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.<br/>This address will cover your NFT minting fees. The number of credits equivalent to the fees will be then deducted from the credit allowance of your paid pricing plan.
    ->setMinter('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The private key of the blockchain address that has priviledges to add an NFT minter to the NFT smart contract (the owner of the smart contract or a blockchain address that was granted such priviledges)
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null)
    
    // (optional) (Celo only) The currency in which the transaction fee will be paid
    ->setFeeCurrency('null');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->addNftMinter($arg_add_nft_minter, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->addNftMinter(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->addNftMinter(): " . $exc->getMessage() . PHP_EOL;
}