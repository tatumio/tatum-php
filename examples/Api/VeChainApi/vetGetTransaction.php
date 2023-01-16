<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VeChainApi.md#vetgettransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$arg_hash = "0x24f691abab680972437028af22bc7a43c3fbe8d6d7eefc420dea2daf554758a7";

try {

    /** @var \Tatum\Model\VetTx $response */
    $response = $sdk->mainnet()
        ->api()
        ->veChain()
        ->vetGetTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->veChain()->vetGetTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->veChain()->vetGetTransaction(): %s\n", 
        $exc->getMessage()
    );
}