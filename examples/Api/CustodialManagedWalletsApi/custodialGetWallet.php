<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CustodialManagedWalletsApi/#custodialgetwallet
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

// WalletID of the managed address
$arg_id = "3ad54647-4166-4d34-9186-fd46caaba945";

// If set to "true", returns the private key in the response; if not set, defaults to "false" (the private key is not included in the response)
$arg_export = false;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/custodial/wallet/{id}
     * 
     * @var \Tatum\Model\CustodialManagedAddress[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialGetWallet($arg_id, $arg_export);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->custodialManagedWallets()->custodialGetWallet(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->custodialManagedWallets()->custodialGetWallet(): %s\n", 
        $exc->getMessage()
    );
}