<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#transferbchkeypair
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

$arg_transfer_bch_key_pair = (new \Tatum\Model\TransferBchKeyPair())
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of...
    ->setAddress('bitcoincash:qrd9khmeg4nqag3h5gzu8vjt537pm7le85lcauzez')
    
    // Amount to be withdrawn to blockchain.
    ->setAmount('0.001')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts...
    ->setMultipleAmounts(null)
    
    // (optional) Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.00005 ...
    ->setFee('0.00005')
    
    // Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signa...
    ->setKeyPair(null)
    
    // Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr ...
    ->setAttr('null')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // (optional) Note visible to owner of withdrawing account
    ->setSenderNote('Sender note');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/bcash/transfer
     * 
     * @var \Tatum\Model\TransferBtcMnemonic200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBchKeyPair($arg_transfer_bch_key_pair);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferBchKeyPair(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferBchKeyPair(): %s\n", 
        $exc->getMessage()
    );
}