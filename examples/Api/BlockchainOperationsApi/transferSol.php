<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#transfersol
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

$arg_transfer_sol = (new \Tatum\Model\TransferSol())
    
    // Sender account ID
    ->setSenderAccountId('61b3bffddfb389cde19c73be')
    
    // Blockchain account to send from
    ->setFrom('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    
    // Blockchain address to send assets
    ->setAddress('9B5XszUGdMaxCZ7uSQhPzdks5ZQSmWxrmzCSvtJ6Ns6g')
    
    // Amount to be sent, in SOL / USDC_SOL or custom SPL token based on the senderAccountId currency type.
    ->setAmount('10000')
    
    // Private key for account. Private key, or signature Id must be present.
    ->setPrivateKey('zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv')
    
    // (optional) Fee to be charged for the operation. For SOL, fee is decided by the blockchain, but default SOL f...
    ->setFee('10000')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // (optional) Note visible to owner of withdrawing account.
    ->setSenderNote('Sender note');

try {

    /**
     * POST /v3/offchain/solana/transfer
     * 
     * @var \Tatum\Model\TransferBtcMnemonic200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferSol($arg_transfer_sol);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferSol(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferSol(): %s\n", 
        $exc->getMessage()
    );
}