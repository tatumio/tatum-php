<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BNBSmartChainApi.md#bscgetblock
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

// Block hash or block number
$arg_hash = "6470657";

try {

    /**
     * GET /v3/bsc/block/{hash}
     * 
     * @var \Tatum\Model\EthBlock $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscGetBlock($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bNBSmartChain()->bscGetBlock(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bNBSmartChain()->bscGetBlock(): %s\n", 
        $exc->getMessage()
    );
}