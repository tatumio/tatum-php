<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BNBBeaconChainApi/#bnbgeneratewallet
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

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

try {

    /**
     * GET /v3/bnb/account
     * 
     * @var \Tatum\Model\BnbWallet $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGenerateWallet();

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bNBBeaconChain()->bnbGenerateWallet(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bNBBeaconChain()->bnbGenerateWallet(): %s\n", 
        $exc->getMessage()
    );
}