<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Wallet/Klaytn.md#generatewallet
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 4) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// 24-word mnemonic
$arg_mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

try {
    /** @var \Tatum\Model\Wallet $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->klaytn()
        ->generateWallet($arg_mnemonic);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->klaytn()->generateWallet(): ', $exc->getMessage(), PHP_EOL;
}