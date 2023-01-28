<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MultiTokensERC1155OrCompatibleApi/#burnmultitokenbatchcelo
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

$arg_burn_multi_token_batch_celo = (new \Tatum\Model\BurnMultiTokenBatchCelo())
    
    // Chain to work with.
    ->setChain('CELO')
    
    // Address of holder
    ->setAccount('0x4b812a77b109A150C2Fc89eD133EaBC78bC9EC8f')
    
    // The IDs of the Multi Tokens to be destroyed.
    ->setTokenId(["100000"])
    
    // The amounts of the Multi Tokens to be destroyed.
    ->setAmounts(["100000"])
    
    // The address of the Multi Token smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
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
     * POST /v3/multitoken/burn/batch
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->burnMultiTokenBatchCelo($arg_burn_multi_token_batch_celo, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchCelo(): %s\n", 
        $exc->getMessage()
    );
}