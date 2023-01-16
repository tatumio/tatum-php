<?php
/**
 * Copyright 
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Wallet/BitcoinCash.md#generateaddressfromxpub
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
$arg_xpub = "tpubDErTz665Maw22hCxRXYGFtqAWE1yMhH927FRnLHhbZEA8Fudk2cgvBEnzj2dme5Bx48mrmTs7ytv7motQA3XHHxxjptYtQzrudaUoNeBg2D";

// Derivation index
$arg_index = 1;

try {
    
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoinCash()
        ->generateAddressFromXpub($arg_xpub, $arg_index);

    var_dump($result);

} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling local()->wallet()->bitcoinCash()->generateAddressFromXpub(): %s\n", 
        $exc->getMessage()
    );
}