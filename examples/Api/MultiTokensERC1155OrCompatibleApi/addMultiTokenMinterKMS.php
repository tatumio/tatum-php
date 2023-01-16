<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminterkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_add_multi_token_minter_kms = (new \Tatum\Model\AddMultiTokenMinterKMS())
    
    // Chain to work with.
    ->setChain('ETH')
    
    // Address of MultiToken token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Address of MultiToken minter
    ->setMinter('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Nonce to be set to Ethereum transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null)
    
    // (optional) Currency to pay for transaction gas, only valid for CELO chain.
    ->setFeeCurrency('null');

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->addMultiTokenMinterKMS($arg_add_multi_token_minter_kms, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->multiTokensERC1155OrCompatible()->addMultiTokenMinterKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->multiTokensERC1155OrCompatible()->addMultiTokenMinterKMS(): " . $exc->getMessage() . PHP_EOL;
}