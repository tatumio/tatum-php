<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/LitecoinApi.md#ltcgetblockchaininfo
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

try {

    /**
     * GET /v3/litecoin/info
     * 
     * @var \Tatum\Model\LtcInfo $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetBlockChainInfo();

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->litecoin()->ltcGetBlockChainInfo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->litecoin()->ltcGetBlockChainInfo(): %s\n", 
        $exc->getMessage()
    );
}