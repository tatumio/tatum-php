<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adagettxbyaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Address
$arg_address = "Ae2tdPwUPEZMmrkRoduJW9w7wRvnTcdeMbw7yyyjwPqo6zuaeJaDEkHUJSz";

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain the next page of data.
$arg_offset = 0;

try {

    /**
     * GET /v3/ada/transaction/address/{address}
     * 
     * @var \Tatum\Model\AdaTx[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->cardano()
        ->adaGetTxByAddress($arg_address, $arg_page_size, $arg_offset);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->cardano()->adaGetTxByAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->cardano()->adaGetTxByAddress(): %s\n", 
        $exc->getMessage()
    );
}