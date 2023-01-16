<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adageneratewallet
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Mnemonic to use for generation of extended public and private keys.
$arg_mnemonic = 'police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven';

try {

    /** @var \Tatum\Model\Wallet $response */
    $response = $sdk->mainnet()
        ->api()
        ->cardano()
        ->adaGenerateWallet($arg_mnemonic);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->cardano()->adaGenerateWallet(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->cardano()->adaGenerateWallet(): %s\n", 
        $exc->getMessage()
    );
}