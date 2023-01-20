<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustodialManagedWalletsApi.md#custodialgetwallets
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

try {

    /**
     * GET /v3/custodial/wallet
     * 
     * @var \Tatum\Model\CustodialManagedAddress[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialGetWallets();

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->custodialManagedWallets()->custodialGetWallets(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->custodialManagedWallets()->custodialGetWallets(): %s\n", 
        $exc->getMessage()
    );
}