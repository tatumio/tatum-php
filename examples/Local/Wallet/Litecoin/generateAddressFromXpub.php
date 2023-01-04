<?php
/**
 * Copyright 
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Wallet/Litecoin.md#generateaddressfromxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 4) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Extended public key
$arg_xpub = "ttub4fxCiRuvD7JU842PNEAHYoy6Co1uLs3Tk65nthME7Gh9RzwrGnaVKJ9DFMcZLWwCokEdPwLPNG8wbrpstZqFrhF4nKoKdS6YrbEJZP7s9pR";

// Derivation index
$arg_index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->litecoin()
        ->generateAddressFromXpub($arg_xpub, $arg_index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->litecoin()->generateAddressFromXpub(): ', $exc->getMessage(), PHP_EOL;
}