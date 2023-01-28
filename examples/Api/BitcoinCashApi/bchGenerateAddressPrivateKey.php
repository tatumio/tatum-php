<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BitcoinCashApi/#bchgenerateaddressprivatekey
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

$arg_priv_key_request = (new \Tatum\Model\PrivKeyRequest())
    
    // Derivation index of private key to generate.
    ->setIndex(0)
    
    // Mnemonic to generate private key from.
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/bcash/wallet/priv
     * 
     * @var \Tatum\Model\PrivKey $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoinCash()
        ->bchGenerateAddressPrivateKey($arg_priv_key_request);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoinCash()->bchGenerateAddressPrivateKey(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoinCash()->bchGenerateAddressPrivateKey(): %s\n", 
        $exc->getMessage()
    );
}