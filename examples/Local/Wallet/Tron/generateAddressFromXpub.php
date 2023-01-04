<?php
/**
 * Copyright 
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Wallet/Tron.md#generateaddressfromxpub
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
$arg_xpub = "xpub6EXfKKFNJZmi6Vk7JPkB8R2vosJiDuMxVS9wRKj9SNv76aJ3AN3wp9niq5cLyFnrcSJGiwCst1jyTmJ1FcJM7xbEK9ov9hSeewcvMRFHiQq";

// Derivation index
$arg_index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->tron()
        ->generateAddressFromXpub($arg_xpub, $arg_index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->tron()->generateAddressFromXpub(): ', $exc->getMessage(), PHP_EOL;
}