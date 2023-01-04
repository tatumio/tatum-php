<?php
/**
 * Copyright 
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Transaction/Bitcoin.md#sign
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 4) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transfer object
$arg_transfer = (new \Tatum\Local\Transaction\Bitcoin\Transfer())
  ->setFee('0.01')
  ->setChangeAddress('tb1q97n8qc4n3qcd8thlfs0c0299thzqyrq6mwz5jn')
  ->addSource('cTPGqe6hkwVY6JNHJUZ4wSUvPo8GNMe2cDFTsFV1jSqCBMDKpfSU', str_repeat('0', 64), 0, '1010000000')
  ->addTarget('tb1q97n8qc4n3qcd8thlfs0c0299thzqyrq6mwz5j0', 1);

try {
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->bitcoin()
        ->sign($arg_transfer);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->transaction()->bitcoin()->sign(): ', $exc->getMessage(), PHP_EOL;
}