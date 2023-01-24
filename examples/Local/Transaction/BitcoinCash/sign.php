<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Local/Transaction/BitcoinCash/#sign
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

// Transfer object
$arg_transfer = (new \Tatum\Local\Transaction\Bitcoin\Transfer())
  ->setFee('0.01')
  ->setChangeAddress('bchtest:qqsnnrvk28rj7lzg7tvlyw8s7xa2vqvj0yxq2xn9ld')
  ->addSource('cUhQBn2AsUtuMBP6n9n17sEg8AUfJdJwtSrQy1vjoAKrRUfrTNF3', str_repeat('0', 64), 0, '1010000000')
  ->addTarget('bchtest:qqsnnrvk28rj7lzg7tvlyw8s7xa2vqvj0yxq2xn9l0', 1);

try {
    
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->bitcoinCash()
        ->sign($arg_transfer);

    var_dump($result);

} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling local()->transaction()->bitcoinCash()->sign(): %s\n", 
        $exc->getMessage()
    );
}