<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#transfertronblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_tron_blockchain_kms = (new \Tatum\Model\TransferTronBlockchainKMS())
    
    // Sender address of TRON account in Base58 format.
    ->setFrom('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id must be present.
    ->setSignatureId('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6')
    
    // Recipient address of TRON account in Base58 format.
    ->setTo('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Amount to be sent in TRX.
    ->setAmount('100000')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null);

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->transferTronBlockchainKMS($arg_transfer_tron_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->transferTronBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->transferTronBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}