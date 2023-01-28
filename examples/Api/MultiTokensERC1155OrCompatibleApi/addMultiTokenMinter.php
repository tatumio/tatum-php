<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MultiTokensERC1155OrCompatibleApi/#addmultitokenminter
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

$arg_add_multi_token_minter = (new \Tatum\Model\AddMultiTokenMinter())
    
    // Chain to work with.
    ->setChain('ETH')
    
    // Address of MultiToken token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Address of MultiToken minter
    ->setMinter('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) Nonce to be set to Ethereum transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) \Tatum\Model\DeployErc20Fee
    ->setFee(null)
    
    // (optional) Currency to pay for transaction gas, only valid for CELO chain.
    ->setFeeCurrency('null');

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/multitoken/mint/add
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->addMultiTokenMinter($arg_add_multi_token_minter, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->multiTokensERC1155OrCompatible()->addMultiTokenMinter(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->multiTokensERC1155OrCompatible()->addMultiTokenMinter(): %s\n", 
        $exc->getMessage()
    );
}