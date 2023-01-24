<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BNBBeaconChainApi.md#bnbgetblock
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

// Block height
$arg_height = 6470657;

try {

    /**
     * GET /v3/bnb/block/{height}
     * 
     * @var \Tatum\Model\BnbBlock $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGetBlock($arg_height);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bNBBeaconChain()->bnbGetBlock(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bNBBeaconChain()->bnbGetBlock(): %s\n", 
        $exc->getMessage()
    );
}