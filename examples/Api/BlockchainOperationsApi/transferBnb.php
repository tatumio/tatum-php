<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#transferbnb
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

$arg_transfer_bnb = (new \Tatum\Model\TransferBnb())
    
    // Sender account ID
    ->setSenderAccountId('61b3bffddfb389cde19c73be')
    
    // Blockchain address to send assets
    ->setAddress('tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39')
    
    // Amount to be sent, in BNB.
    ->setAmount('10000')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Memo of the recipient account, if any.
    ->setAttr('12355')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // Private key of sender address.
    ->setFromPrivateKey('8ac4b14b38d8a5af58019088ce5a24b764536bccd1981cf79d3e09e9d1f2ad31')
    
    // (optional) Note visible to owner of withdrawing account.
    ->setSenderNote('Sender note');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/bnb/transfer
     * 
     * @var \Tatum\Model\TransferBtcMnemonic200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBnb($arg_transfer_bnb);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferBnb(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferBnb(): %s\n", 
        $exc->getMessage()
    );
}