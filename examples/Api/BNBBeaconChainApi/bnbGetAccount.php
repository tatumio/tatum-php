<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BNBBeaconChainApi.md#bnbgetaccount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$arg_address = "tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn";

try {

    /** @var \Tatum\Model\BnbAccount $response */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGetAccount($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bNBBeaconChain()->bnbGetAccount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bNBBeaconChain()->bnbGetAccount(): %s\n", 
        $exc->getMessage()
    );
}