<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/FungibleTokensERC20OrCompatibleApi/#chaintransfersolanaspl
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

$arg_chain_transfer_solana_spl = (new \Tatum\Model\ChainTransferSolanaSpl())
    
    // The blockchain to work with
    ->setChain('SOL')
    
    // The blockchain address to send the fungible tokens from
    ->setFrom('BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs')
    
    // The blockchain address to send the fungible tokens to
    ->setTo('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // The blockchain address of the fungible tokens
    ->setContractAddress('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // The amount of the fungible tokens to be sent
    ->setAmount('100000')
    
    // The number of decimal places that the fungible tokens have
    ->setDigits(18)
    
    // The private key of the blockchain address that you are sending the fungible tokens from (the addr...
    ->setFromPrivateKey('YdQ1iy2NYs93dtkHdz3ijDuhRJj6uXYAUZmixirCrgCsTMj42BN1Q1buYcGZaMxw5buk9VU5ogQ6zuzn8DMsGaf')
    
    // (optional) The blockchain address from which the fee will be deducted; if not set, defaults to the address t...
    ->setFeePayer('BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs')
    
    // (optional) The private key of the blockchain address that you specified in the <code>feePayer</code> paramet...
    ->setFeePayerPrivateKey('YdQ1iy2NYs93dtkHdz3ijDuhRJj6uXYAUZmixirCrgCsTMj42BN1Q1buYcGZaMxw5buk9VU5ogQ6zuzn8DMsGaf');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/blockchain/token/transaction
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->chainTransferSolanaSpl($arg_chain_transfer_solana_spl, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->fungibleTokensERC20OrCompatible()->chainTransferSolanaSpl(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->fungibleTokensERC20OrCompatible()->chainTransferSolanaSpl(): %s\n", 
        $exc->getMessage()
    );
}