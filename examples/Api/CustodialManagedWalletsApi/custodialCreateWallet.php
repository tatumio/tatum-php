<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CustodialManagedWalletsApi/#custodialcreatewallet
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

$arg_custodial_create_wallet_request = (new \Tatum\Model\CustodialCreateWalletRequest())
    
    // string
    ->setChain('SOL');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/custodial/wallet
     * 
     * @var \Tatum\Model\CustodialManagedAddress $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialCreateWallet($arg_custodial_create_wallet_request);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->custodialManagedWallets()->custodialCreateWallet(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->custodialManagedWallets()->custodialCreateWallet(): %s\n", 
        $exc->getMessage()
    );
}