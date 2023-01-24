<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Local/Wallet/Harmony/#generateaddressfromprivatekey
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 4) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Private Key
$arg_privateKey = (new \Tatum\Model\PrivKey())->setKey("0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585");

try {
    
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->harmony()
        ->generateAddressFromPrivateKey($arg_privateKey);

    var_dump($result);

} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling local()->wallet()->harmony()->generateAddressFromPrivateKey(): %s\n", 
        $exc->getMessage()
    );
}