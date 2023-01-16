<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adagenerateaddressprivatekey
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_priv_key_request = (new \Tatum\Model\PrivKeyRequest())
    
    // Derivation index of private key to generate.
    ->setIndex(0)
    
    // Mnemonic to generate private key from.
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse');

try {

    /** @var \Tatum\Model\PrivKey $response */
    $response = $sdk->mainnet()
        ->api()
        ->cardano()
        ->adaGenerateAddressPrivateKey($arg_priv_key_request);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->cardano()->adaGenerateAddressPrivateKey(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->cardano()->adaGenerateAddressPrivateKey(): %s\n", 
        $exc->getMessage()
    );
}