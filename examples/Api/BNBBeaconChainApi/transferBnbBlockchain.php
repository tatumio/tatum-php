<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BNBBeaconChainApi.md#transferbnbblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_bnb_blockchain = (new \Tatum\Model\TransferBnbBlockchain())
    
    // Blockchain address to send assets.
    ->setTo('tbnb138u9djee6fwphhd2a3628q2h0j5w97yx48zqex')
    
    // Currency to transfer from Binance Blockchain Account.
    ->setCurrency('BNB')
    
    // Amount to be sent in BNB.
    ->setAmount('100000')
    
    // Private key of sender address.
    ->setFromPrivateKey('cTmS2jBWXgFaXZ2xG9jhn67TiyTshnMp3UedamzEhGm6BZV1vLgQ')
    
    // (optional) Message to recipient.
    ->setMessage('Message to recipient');

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->transferBnbBlockchain($arg_transfer_bnb_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bNBBeaconChain()->transferBnbBlockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bNBBeaconChain()->transferBnbBlockchain(): " . $exc->getMessage() . PHP_EOL;
}