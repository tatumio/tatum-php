<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#polygonbroadcast
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_broadcast_kms = (new \Tatum\Model\BroadcastKMS())
    
    // Raw signed transaction to be published to network.
    ->setTxData('62BD544D1B9031EFC330A3E855CC3A0D51CA5131455C1AB3BCAC6D243F65460D')
    
    // (optional) ID of prepared payment template to sign. Required only, when broadcasting transaction signed by T...
    ->setSignatureId('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6');

try {

    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->polygon()
        ->polygonBroadcast($arg_broadcast_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->polygon()->polygonBroadcast(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->polygon()->polygonBroadcast(): %s\n", 
        $exc->getMessage()
    );
}