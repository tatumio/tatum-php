<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/XRPApi/#xrpgetaccountbalance
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

// Account address you want to get balance of
$arg_account = "rDA3DJBUBjA1X3PtLLFAEXxX31oA5nL3QF";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/xrp/account/{account}/balance
     * 
     * @var \Tatum\Model\XrpAccountBalance $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->xrpGetAccountBalance($arg_account);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->xRP()->xrpGetAccountBalance(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->xRP()->xrpGetAccountBalance(): %s\n", 
        $exc->getMessage()
    );
}