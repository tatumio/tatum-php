<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Local/Wallet/BSC/#generateaddressfromxpub
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
$arg_xpub = "xpub6EbLFMjuqrkUMBZzsu7u4QY9e1iUD6GRXHswW7cTTW3gx7BMcaK6EKujYkLuFCBQbX5PS4n3BpQDRvnaF1zfabo7FH9JGn56MkJKWkGjeHY";

// Derivation index
$arg_index = 1;

try {
    
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bsc()
        ->generateAddressFromXpub($arg_xpub, $arg_index);

    var_dump($result);

} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling local()->wallet()->bsc()->generateAddressFromXpub(): %s\n", 
        $exc->getMessage()
    );
}