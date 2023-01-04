<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Litecoin#operation/LtcGetBalanceOfAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/LitecoinApi.md#ltcgetbalanceofaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Address
$arg_address = 'n4YNG8q5JyxkeWf7zMi1bMyRZbRKK1W7or';

try {
    /** @var \Tatum\Model\BtcBasedBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetBalanceOfAddress($arg_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->litecoin()->ltcGetBalanceOfAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->litecoin()->ltcGetBalanceOfAddress(): " . $exc->getMessage() . PHP_EOL;
}