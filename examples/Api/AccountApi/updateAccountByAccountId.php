<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/AccountApi/#updateaccountbyaccountid
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

$arg_update_account = (new \Tatum\Model\UpdateAccount())
    
    // (optional) For bookkeeping to distinct account purpose.
    ->setAccountCode('AC_1011_B')
    
    // (optional) Account number from external system.
    ->setAccountNumber('123456');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * PUT /v3/ledger/account/{id}
     */
    $sdk->mainnet()
        ->api()
        ->account()
        ->updateAccountByAccountId($arg_id, $arg_update_account);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->updateAccountByAccountId(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->updateAccountByAccountId(): %s\n", 
        $exc->getMessage()
    );
}