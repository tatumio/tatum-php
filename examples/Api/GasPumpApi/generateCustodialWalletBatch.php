<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwalletbatch
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_generate_custodial_wallet_batch = (new \Tatum\Model\GenerateCustodialWalletBatch())
    
    // Blockchain to work with.
    ->setChain('MATIC')
    
    // Private key of account, from which the transaction will be initiated.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // Number of addresses to generate.
    ->setBatchCount(null)
    
    // Owner of the addresses.
    ->setOwner('0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea')
    
    // (optional) 
    ->setFee(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null);

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWalletBatch($arg_generate_custodial_wallet_batch, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->generateCustodialWalletBatch(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->generateCustodialWalletBatch(): %s\n", 
        $exc->getMessage()
    );
}