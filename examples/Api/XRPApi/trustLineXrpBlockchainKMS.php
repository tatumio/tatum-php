<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/XRPApi/#trustlinexrpblockchainkms
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

$arg_trust_line_xrp_blockchain_kms = (new \Tatum\Model\TrustLineXrpBlockchainKMS())
    
    // XRP account address. Must be the one used for generating deposit tags.
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Blockchain address of the issuer of the assets to create trust line for.
    ->setIssuerAccount('rsP3mgGb2tcYUrxiLFiHJiQXhsziegtwBc')
    
    // Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust ...
    ->setLimit('10000')
    
    // Asset name. Must be 160bit HEX string, e.g. SHA1.
    ->setToken('DA39A3EE5E6B4B0D3255BFEF95601890AFD80709')
    
    // Identifier of the secret associated in signing application. Secret, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Fee to be paid, in XRP. If omitted, current fee will be calculated.
    ->setFee('10000');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/xrp/trust
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->trustLineXrpBlockchainKMS($arg_trust_line_xrp_blockchain_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->xRP()->trustLineXrpBlockchainKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->xRP()->trustLineXrpBlockchainKMS(): %s\n", 
        $exc->getMessage()
    );
}