<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwalletbatchtronkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_generate_custodial_wallet_batch_tron_kms = (new \Tatum\Model\GenerateCustodialWalletBatchTronKMS())
    
    // Blockchain to work with.
    ->setChain('TRON')
    
    // Sender address.
    ->setFrom('TGXh2YJhfwchMGKuzfEJ27W1VEJRKnMdy9')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Number of addresses to generate.
    ->setBatchCount(50)
    
    // Owner of the addresses.
    ->setOwner('TGXh2YJhfwchMGKuzfEJ27W1VEJRKnMdy9')
    
    // Fee limit to be set, in TRX
    ->setFeeLimit(100);

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /**
     * POST /v3/blockchain/sc/custodial/batch
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWalletBatchTronKMS($arg_generate_custodial_wallet_batch_tron_kms, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->generateCustodialWalletBatchTronKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->generateCustodialWalletBatchTronKMS(): %s\n", 
        $exc->getMessage()
    );
}