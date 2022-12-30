<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Transaction/Dogecoin.md#sign
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
$arg_transfer = '(new \Tatum\Local\Transaction\Bitcoin\Transfer())
  ->setFee('0.01')
  ->setChangeAddress('nYY7QfwDEbYsb7xpC7yms6SzjMhbYdr5vy')
  ->addSource('ckYXyxpW7FKp3LPpQdLrXnfttfXa3CBUw6VizABCiQLck1ZVbNq2', str_repeat('0', 64), 0, '1010000000')
  ->addTarget('nYY7QfwDEbYsb7xpC7yms6SzjMhbYdr5v0', 1)';

try {
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->dogecoin()
        ->sign($arg_transfer);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->transaction()->dogecoin()->sign(): ', $exc->getMessage(), PHP_EOL;
}