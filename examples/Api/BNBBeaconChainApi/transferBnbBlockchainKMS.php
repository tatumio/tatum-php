<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BNBBeaconChainApi.md#transferbnbblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_bnb_blockchain_kms = (new \Tatum\Model\TransferBnbBlockchainKMS())
    
    // Blockchain address to send assets.
    ->setTo('tbnb138u9djee6fwphhd2a3628q2h0j5w97yx48zqex')
    
    // Currency to transfer from Binance Blockchain Account.
    ->setCurrency('BNB')
    
    // Amount to be sent in BNB.
    ->setAmount('100000')
    
    // Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Ids should be present, which might be used to sign transaction.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // Blockchain address to send from
    ->setFromAddress('tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39')
    
    // (optional) Message to recipient.
    ->setMessage('Message to recipient');

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->transferBnbBlockchainKMS($arg_transfer_bnb_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bNBBeaconChain()->transferBnbBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bNBBeaconChain()->transferBnbBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}