<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Litecoin#operation/LtcTransactionAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/LitecoinApi.md#ltctransactionaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_ltc_transaction_address = new \Tatum\Model\LtcTransactionAddress();

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcTransactionAddress($arg_ltc_transaction_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->litecoin()->ltcTransactionAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->litecoin()->ltcTransactionAddress(): " . $exc->getMessage() . PHP_EOL;
}