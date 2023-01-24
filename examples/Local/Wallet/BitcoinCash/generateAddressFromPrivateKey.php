<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Local/Wallet/BitcoinCash/#generateaddressfromprivatekey
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
$arg_privateKey = (new \Tatum\Model\PrivKey())->setKey("cUhQBn2AsUtuMBP6n9n17sEg8AUfJdJwtSrQy1vjoAKrRUfrTNF3");

try {
    
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoinCash()
        ->generateAddressFromPrivateKey($arg_privateKey);

    var_dump($result);

} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling local()->wallet()->bitcoinCash()->generateAddressFromPrivateKey(): %s\n", 
        $exc->getMessage()
    );
}