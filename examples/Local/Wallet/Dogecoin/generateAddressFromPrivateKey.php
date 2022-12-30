<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Wallet/Dogecoin.md#generateaddressfromprivatekey
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 4) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Private Key
$arg_privateKey = (new \Tatum\Model\PrivKey())->setKey("ckYXyxpW7FKp3LPpQdLrXnfttfXa3CBUw6VizABCiQLck1ZVbNq2");

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->dogecoin()
        ->generateAddressFromPrivateKey($arg_privateKey);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->dogecoin()->generateAddressFromPrivateKey(): ', $exc->getMessage(), PHP_EOL;
}