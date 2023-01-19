<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#btcgettxbyaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Address
$arg_address = "2MsM67NLa71fHvTUBqNENW15P68nHB2vVXb";

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain the next page of data.
$arg_offset = 0;

try {

    /** @var \Tatum\Model\BtcTx[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoin()
        ->btcGetTxByAddress($arg_address, $arg_page_size, $arg_offset);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoin()->btcGetTxByAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoin()->btcGetTxByAddress(): %s\n", 
        $exc->getMessage()
    );
}