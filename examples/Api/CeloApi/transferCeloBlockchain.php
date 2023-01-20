<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CeloApi.md#transferceloblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_transfer_celo_blockchain = (new \Tatum\Model\TransferCeloBlockchain())
    
    // (optional) Additional data that can be passed to a blockchain transaction as a data property; must be in the...
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')
    
    // (optional) Nonce to be set to Celo transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // Blockchain address to send assets
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Currency of the transaction
    ->setCurrency('null')
    
    // Currency to pay for transaction gas
    ->setFeeCurrency('null')
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null)
    
    // Amount to be sent.
    ->setAmount('100000')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2');

try {

    /**
     * POST /v3/celo/transaction
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->transferCeloBlockchain($arg_transfer_celo_blockchain);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->transferCeloBlockchain(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->transferCeloBlockchain(): %s\n", 
        $exc->getMessage()
    );
}