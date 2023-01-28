<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BNBBeaconChainApi/#transferbnbblockchainkms
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

$arg_transfer_bnb_blockchain_kms = (new \Tatum\Model\TransferBnbBlockchainKMS())
    
    // Blockchain address to send assets.
    ->setTo('tbnb138u9djee6fwphhd2a3628q2h0j5w97yx48zqex')
    
    // Currency to transfer from Binance Blockchain Account.
    ->setCurrency('BNB')
    
    // Amount to be sent in BNB.
    ->setAmount('100000')
    
    // Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Id...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // Blockchain address to send from
    ->setFromAddress('tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39')
    
    // (optional) Message to recipient.
    ->setMessage('Message to recipient');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/bnb/transaction
     * 
     * @var \Tatum\Model\TransactionHash $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->transferBnbBlockchainKMS($arg_transfer_bnb_blockchain_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bNBBeaconChain()->transferBnbBlockchainKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bNBBeaconChain()->transferBnbBlockchainKMS(): %s\n", 
        $exc->getMessage()
    );
}