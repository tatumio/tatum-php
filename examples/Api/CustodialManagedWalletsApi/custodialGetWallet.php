<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustodialManagedWalletsApi.md#custodialgetwallet
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// WalletID of the managed address
$arg_id = '3ad54647-4166-4d34-9186-fd46caaba945';

// If set to "true", returns the private key in the response; if not set, defaults to "false" (the private key is not included in the response)
$arg_export = false;

try {

    /** @var \Tatum\Model\CustodialManagedAddress[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialGetWallet($arg_id, $arg_export);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->custodialManagedWallets()->custodialGetWallet(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->custodialManagedWallets()->custodialGetWallet(): " . $exc->getMessage() . PHP_EOL;
}