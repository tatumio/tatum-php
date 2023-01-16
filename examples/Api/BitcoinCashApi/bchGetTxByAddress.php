<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinCashApi.md#bchgettxbyaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Address
$arg_address = "2MsM67NLa71fHvTUBqNENW15P68nHB2vVXb";

// Define, how much transactions should be skipped to obtain another page.
$arg_skip = 2;

try {

    /** @var \Tatum\Model\BchTx[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoinCash()
        ->bchGetTxByAddress($arg_address, $arg_skip);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoinCash()->bchGetTxByAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoinCash()->bchGetTxByAddress(): %s\n", 
        $exc->getMessage()
    );
}