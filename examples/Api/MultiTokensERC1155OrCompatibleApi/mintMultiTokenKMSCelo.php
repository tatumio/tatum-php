<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MultiTokensERC1155OrCompatibleApi/#mintmultitokenkmscelo
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

$arg_mint_multi_token_kms_celo = (new \Tatum\Model\MintMultiTokenKMSCelo())
    
    // Chain to work with.
    ->setChain('CELO')
    
    // ID of token to be created.
    ->setTokenId('100000')
    
    // amount of token to be created.
    ->setAmount('100000')
    
    // Blockchain address to send Multi Token token to
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Address of Multi Token token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Data in bytes
    ->setData('0x1234')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Nonce to be set to Celo transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // Currency to pay for transaction gas
    ->setFeeCurrency('null');

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/multitoken/mint
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->mintMultiTokenKMSCelo($arg_mint_multi_token_kms_celo, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->multiTokensERC1155OrCompatible()->mintMultiTokenKMSCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->multiTokensERC1155OrCompatible()->mintMultiTokenKMSCelo(): %s\n", 
        $exc->getMessage()
    );
}