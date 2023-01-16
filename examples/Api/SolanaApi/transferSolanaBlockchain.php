<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/SolanaApi.md#transfersolanablockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_solana_blockchain = (new \Tatum\Model\TransferSolanaBlockchain())
    
    // Blockchain address to send assets from
    ->setFrom('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // Blockchain address to send assets to
    ->setTo('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // Amount to be sent in SOL.
    ->setAmount('100000')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv')
    
    // (optional) Address on the Solana blockchain, from which the fee will be paid for transaction. Defaults to from.
    ->setFeePayer('BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs')
    
    // (optional) Private key of the fee payer address.
    ->setFeePayerPrivateKey('YdQ1iy2NYs93dtkHdz3ijDuhRJj6uXYAUZmixirCrgCsTMj42BN1Q1buYcGZaMxw5buk9VU5ogQ6zuzn8DMsGaf');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->solana()
        ->transferSolanaBlockchain($arg_transfer_solana_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->solana()->transferSolanaBlockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->solana()->transferSolanaBlockchain(): " . $exc->getMessage() . PHP_EOL;
}