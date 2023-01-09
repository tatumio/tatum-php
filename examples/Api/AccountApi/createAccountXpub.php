<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Account#operation/CreateAccountXpub
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#createaccountxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_account_xpub = new \Tatum\Model\CreateAccountXpub();

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->createAccountXpub($arg_create_account_xpub);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->account()->createAccountXpub(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->account()->createAccountXpub(): " . $exc->getMessage() . PHP_EOL;
}