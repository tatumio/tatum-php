<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#trustlinexrpblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_trust_line_xrp_blockchain = (new \Tatum\Model\TrustLineXrpBlockchain())
    
    // XRP account address. Must be the one used for generating deposit tags.
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Blockchain address of the issuer of the assets to create trust line for.
    ->setIssuerAccount('rsP3mgGb2tcYUrxiLFiHJiQXhsziegtwBc')
    
    // Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line.
    ->setLimit('10000')
    
    // Asset name. Must be 160bit HEX string, e.g. SHA1.
    ->setToken('DA39A3EE5E6B4B0D3255BFEF95601890AFD80709')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setFromSecret('snSFTHdvSYQKKkYntvEt8cnmZuPJB')
    
    // (optional) Fee to be paid, in XRP. If omitted, current fee will be calculated.
    ->setFee('10000');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->trustLineXrpBlockchain($arg_trust_line_xrp_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xRP()->trustLineXrpBlockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xRP()->trustLineXrpBlockchain(): " . $exc->getMessage() . PHP_EOL;
}