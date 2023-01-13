<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustodialManagedWalletsApi.md#custodialcreatewallet
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_custodial_create_wallet_request = (new \Tatum\Model\CustodialCreateWalletRequest())
    ->setChain('SOL');

try {
    /** @var \Tatum\Model\CustodialManagedAddress $response */
    $response = $sdk->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialCreateWallet($arg_custodial_create_wallet_request);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->custodialManagedWallets()->custodialCreateWallet(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->custodialManagedWallets()->custodialCreateWallet(): " . $exc->getMessage() . PHP_EOL;
}