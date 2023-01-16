<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/IPFSApi.md#getipfsdata
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// IPFS CID of the file
$arg_id = "QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj";

try {

    /** @var \SplFileObject $response */
    $response = $sdk->mainnet()
        ->api()
        ->iPFS()
        ->getIPFSData($arg_id);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->iPFS()->getIPFSData(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->iPFS()->getIPFSData(): %s\n", 
        $exc->getMessage()
    );
}