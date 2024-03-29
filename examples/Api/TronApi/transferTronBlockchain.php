<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/TronApi/#transfertronblockchain
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

$arg_transfer_tron_blockchain = (new \Tatum\Model\TransferTronBlockchain())
    
    // Private key of the address, from which the TRX will be sent.
    ->setFromPrivateKey('842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701')
    
    // Recipient address of TRON account in Base58 format.
    ->setTo('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Amount to be sent in TRX.
    ->setAmount('100000');

try {

    /**
     * POST /v3/tron/transaction
     * 
     * @var \Tatum\Model\TransactionHash $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->transferTronBlockchain($arg_transfer_tron_blockchain);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->transferTronBlockchain(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->transferTronBlockchain(): %s\n", 
        $exc->getMessage()
    );
}