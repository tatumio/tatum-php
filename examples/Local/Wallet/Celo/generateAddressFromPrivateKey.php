<?php
/**
 * Copyright 
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Wallet/Celo.md#generateaddressfromprivatekey
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
$arg_privateKey = (new \Tatum\Model\PrivKey())->setKey("0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585");

try {
    
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->celo()
        ->generateAddressFromPrivateKey($arg_privateKey);

    var_dump($result);

} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling local()->wallet()->celo()->generateAddressFromPrivateKey(): %s\n", 
        $exc->getMessage()
    );
}