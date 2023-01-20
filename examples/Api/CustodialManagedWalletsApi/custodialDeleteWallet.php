<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustodialManagedWalletsApi.md#custodialdeletewallet
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

try {

    /**
     * DELETE /v3/custodial/wallet/{id}
     */
    $sdk->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialDeleteWallet($arg_id);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->custodialManagedWallets()->custodialDeleteWallet(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->custodialManagedWallets()->custodialDeleteWallet(): %s\n", 
        $exc->getMessage()
    );
}