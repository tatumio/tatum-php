<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CeloApi.md#celogettransactioncount
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

// address
$arg_address = "0xdac17f958d2ee523a2206206994597c13d831ec7";

try {

    /**
     * GET /v3/celo/transaction/count/{address}
     * 
     * @var float $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->celoGetTransactionCount($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->celoGetTransactionCount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->celoGetTransactionCount(): %s\n", 
        $exc->getMessage()
    );
}