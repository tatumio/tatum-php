<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Local/Wallet/Polygon/#generateprivatekey
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

// 24-word mnemonic
$arg_mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

// Derivation index
$arg_index = 1;

try {
    
    /** @var \Tatum\Model\PrivKey $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->polygon()
        ->generatePrivateKey($arg_mnemonic, $arg_index);

    var_dump($result);

} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling local()->wallet()->polygon()->generatePrivateKey(): %s\n", 
        $exc->getMessage()
    );
}