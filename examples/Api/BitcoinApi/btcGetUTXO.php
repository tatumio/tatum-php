<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#btcgetutxo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// The transaction hash
$arg_hash = "53faa103e8217e1520f5149a4e8c84aeb58e55bdab11164a95e69a8ca50f8fcc";

// The index of the transaction output that you want to check for the UTXO
$arg_index = 0;

try {

    /** @var \Tatum\Model\BtcUTXO $response */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoin()
        ->btcGetUTXO($arg_hash, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoin()->btcGetUTXO(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoin()->btcGetUTXO(): %s\n", 
        $exc->getMessage()
    );
}