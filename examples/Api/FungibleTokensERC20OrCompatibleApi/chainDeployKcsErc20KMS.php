<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploykcserc20kms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_chain_deploy_kcs_erc20_kms = (new \Tatum\Model\ChainDeployKcsErc20KMS())
    
    // The blockchain to work with
    ->setChain('KCS')
    
    // Symbol of the ERC20 token
    ->setSymbol('ERC_SYMBOL')
    
    // Name of the ERC20 token
    ->setName('MyERC20')
    
    // (optional) Max supply of ERC20 token.
    ->setTotalCap('10000000')
    
    // Max supply of ERC20 token.
    ->setSupply('10000000')
    
    // Number of decimal points
    ->setDigits(18)
    
    // Address on Ethereum blockchain, where all created ERC20 tokens will be transferred.
    ->setAddress('0xa0Ca9FF38Bad06eBe64f0fDfF279cAE35129F5C6')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->chainDeployKcsErc20KMS($arg_chain_deploy_kcs_erc20_kms, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->fungibleTokensERC20OrCompatible()->chainDeployKcsErc20KMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->fungibleTokensERC20OrCompatible()->chainDeployKcsErc20KMS(): " . $exc->getMessage() . PHP_EOL;
}