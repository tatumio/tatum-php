<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferadakeypair
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_ada_key_pair = (new \Tatum\Model\TransferAdaKeyPair())
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // Blockchain address to send assets to.
    ->setAddress('mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7')
    
    // Amount to be withdrawn to blockchain.
    ->setAmount('0.001')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.5 ADA is used.
    ->setFee('0.5')
    
    // Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based.
    ->setKeyPair(null)
    
    // Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used.
    ->setAttr('null')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // (optional) Note visible to owner of withdrawing account
    ->setSenderNote('Sender note');

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferAdaKeyPair($arg_transfer_ada_key_pair);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferAdaKeyPair(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferAdaKeyPair(): " . $exc->getMessage() . PHP_EOL;
}