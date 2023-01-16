<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwalletbatchtron
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_custodial_wallet_batch_tron = (new \Tatum\Model\GenerateCustodialWalletBatchTron())
    
    // Blockchain to work with.
    ->setChain('TRON')
    
    // Private key of account, from which the transaction will be initiated.
    ->setFromPrivateKey('05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // Number of addresses to generate.
    ->setBatchCount(50)
    
    // Owner of the addresses.
    ->setOwner('TGXh2YJhfwchMGKuzfEJ27W1VEJRKnMdy9')
    
    // Fee limit to be set, in TRX
    ->setFeeLimit(100);

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWalletBatchTron($arg_generate_custodial_wallet_batch_tron, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->generateCustodialWalletBatchTron(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->generateCustodialWalletBatchTron(): " . $exc->getMessage() . PHP_EOL;
}