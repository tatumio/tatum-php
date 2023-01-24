<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Local/Wallet/Litecoin/#generateaddressfromxpub
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
    echo sprintf(
        "Exception when calling local()->wallet()->litecoin()->generateAddressFromXpub(): %s\n", 
        $exc->getMessage()
    );
}