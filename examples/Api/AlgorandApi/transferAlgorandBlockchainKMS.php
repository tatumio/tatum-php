<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#transferalgorandblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_algorand_blockchain_kms = (new \Tatum\Model\TransferAlgorandBlockchainKMS())
    
    // The blockchain address of the sender
    ->setFrom('TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4')
    
    // The blockchain address of the recipient
    ->setTo('NTAESFCB3WOD7SAOL42KSPVARLB3JFA3MNX3AESWHYVT2RMYDVZI6YLG4Y')
    
    // The transaction fee in Algos
    ->setFee('0.001')
    
    // The amount to send in Algos
    ->setAmount('1')
    
    // (optional) The note for the recipient; must not contain spaces
    ->setNote('Helloworld')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->algorand()
        ->transferAlgorandBlockchainKMS($arg_transfer_algorand_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->algorand()->transferAlgorandBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->algorand()->transferAlgorandBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}