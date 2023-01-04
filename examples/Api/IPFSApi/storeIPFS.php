<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/IPFS#operation/StoreIPFS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/IPFSApi.md#storeipfs
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Your file to store
$arg_file = new \SplFileObject('/path/to/file.txt');

try {
    /** @var \Tatum\Model\StoreIPFS200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->iPFS()
        ->storeIPFS($arg_file);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->iPFS()->storeIPFS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->iPFS()->storeIPFS(): " . $exc->getMessage() . PHP_EOL;
}