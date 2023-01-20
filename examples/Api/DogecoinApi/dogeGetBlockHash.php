<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/DogecoinApi.md#dogegetblockhash
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// The number of blocks preceding a particular block on a block chain.
$arg_i = 1234314;

try {

    /**
     * GET /v3/dogecoin/block/hash/{i}
     * 
     * @var \Tatum\Model\LtcGetBlockHash200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->dogecoin()
        ->dogeGetBlockHash($arg_i);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->dogecoin()->dogeGetBlockHash(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->dogecoin()->dogeGetBlockHash(): %s\n", 
        $exc->getMessage()
    );
}