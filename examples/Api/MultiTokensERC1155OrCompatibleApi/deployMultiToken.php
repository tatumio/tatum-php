<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MultiTokensERC1155OrCompatibleApi/#deploymultitoken
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

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

$arg_deploy_multi_token = (new \Tatum\Model\DeployMultiToken())
    
    // Chain to work with.
    ->setChain('ETH')
    
    // URI of the Multi Token token
    ->setUri('example.com')
    
    // Private key of account address, from which gas for deployment of ERC1155 will be paid. Private ke...
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) True if the contract is publicMint type
    ->setPublicMint(true)
    
    // (optional) Nonce to be set to transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) \Tatum\Model\DeployErc20Fee
    ->setFee(null);

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /**
     * POST /v3/multitoken/deploy
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->deployMultiToken($arg_deploy_multi_token, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->multiTokensERC1155OrCompatible()->deployMultiToken(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->multiTokensERC1155OrCompatible()->deployMultiToken(): %s\n", 
        $exc->getMessage()
    );
}