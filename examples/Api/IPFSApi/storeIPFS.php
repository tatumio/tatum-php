<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
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
    $response = $sdk->mainnet()
        ->api()
        ->iPFS()
        ->storeIPFS($arg_file);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->iPFS()->storeIPFS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->iPFS()->storeIPFS(): %s\n", 
        $exc->getMessage()
    );
}