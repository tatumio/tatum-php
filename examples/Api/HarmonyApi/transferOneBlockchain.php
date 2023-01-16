<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#transferoneblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_one_blockchain = (new \Tatum\Model\TransferOneBlockchain())
    
    // (optional) Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')
    
    // Currency of the transfer.
    ->setCurrency('ONE')
    
    // (optional) Nonce to be set to ONE transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // Blockchain address to send assets
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) 
    ->setFee(null)
    
    // Amount to be sent in One.
    ->setAmount('100000')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2');

// Shard to read data from
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->harmony()
        ->transferOneBlockchain($arg_transfer_one_blockchain, $arg_shard_id);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->transferOneBlockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->transferOneBlockchain(): " . $exc->getMessage() . PHP_EOL;
}