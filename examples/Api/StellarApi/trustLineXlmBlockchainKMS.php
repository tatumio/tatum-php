<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#trustlinexlmblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_trust_line_xlm_blockchain_kms = (new \Tatum\Model\TrustLineXlmBlockchainKMS())
    
    // XLM account address. Must be the one used for generating deposit tags.
    ->setFromAccount('GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H')
    
    // Blockchain address of the issuer of the assets to create trust line for.
    ->setIssuerAccount('GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT')
    
    // Asset name.
    ->setToken('TOKEN123')
    
    // Identifier of the secret associated in signing application. Secret, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line. When no limit is specified, maximum amount available is permitted.
    ->setLimit('10000');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->stellar()
        ->trustLineXlmBlockchainKMS($arg_trust_line_xlm_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->stellar()->trustLineXlmBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->stellar()->trustLineXlmBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}