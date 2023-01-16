<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
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

$arg_create_account_xpub = (new \Tatum\Model\CreateAccountXpub())
    
    // <p>The currency for the virtual account</p> <ul> <li><b>Native blockchain assets:</b> ALGO, BCH, ...
    ->setCurrency('BTC')
    
    // Extended public key to generate addresses from.
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid')
    
    // (optional) 
    ->setCustomer(null)
    
    // (optional) Enable compliant checks. If this is enabled, it is impossible to create account if compliant chec...
    ->setCompliant(false)
    
    // (optional) For bookkeeping to distinct account purpose.
    ->setAccountCode('AC_1011_B')
    
    // (optional) All transaction will be accounted in this currency for all accounts. Currency can be overridden p...
    ->setAccountingCurrency('USD')
    
    // (optional) Account number from external system.
    ->setAccountNumber('123456');

try {

    /** @var \Tatum\Model\Account $response */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->createAccountXpub($arg_create_account_xpub);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->createAccountXpub(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->createAccountXpub(): %s\n", 
        $exc->getMessage()
    );
}