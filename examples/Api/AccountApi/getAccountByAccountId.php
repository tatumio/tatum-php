<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#getaccountbyaccountid
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

// Account ID
$arg_id = "5e68c66581f2ee32bc354087";

try {

    /**
     * GET /v3/ledger/account/{id}
     * 
     * @var \Tatum\Model\Account $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->getAccountByAccountId($arg_id);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->getAccountByAccountId(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->getAccountByAccountId(): %s\n", 
        $exc->getMessage()
    );
}