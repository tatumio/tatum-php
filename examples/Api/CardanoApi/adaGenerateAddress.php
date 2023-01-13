<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adagenerateaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Extended public key of a wallet.
$arg_xpub = '30e96a57be6235c686da968c1860f69d1871a692b29626b7ebb923aff8c6731cb9fef3a26b7eba8a07653483d06427d0c07966c5f81c69a7925d714530bedb1ef9e9103547b54ad0954b3569785ca70e1fd08313f92a3a9d31efa216b2b9adac4678455e66c97b53cd589f9da70a14265cf15cd4c1e0ce914407008f4a65f316';

// Derivation index of the desired address to be generated.
$arg_index = 0;

try {

    /** @var \Tatum\Model\AdaGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGenerateAddress($arg_xpub, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->cardano()->adaGenerateAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->cardano()->adaGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}