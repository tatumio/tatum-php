<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#algorandgenerateaddress
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// private key of wallet.
$arg_priv = "NBYMCVEEDFYV3TPWVRE6APE7PKHUJD4XAKXCKNCLKGUXOC3LFNJGZQCJCRA53HB7ZAHF6NFJH2QIVQ5USQNWG35QCJLD4KZ5IWMB24Q";

try {

    /**
     * GET /v3/algorand/address/{priv}
     * 
     * @var \Tatum\Model\AlgorandGenerateAddress200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->algorand()
        ->algorandGenerateAddress($arg_priv);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->algorand()->algorandGenerateAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->algorand()->algorandGenerateAddress(): %s\n", 
        $exc->getMessage()
    );
}