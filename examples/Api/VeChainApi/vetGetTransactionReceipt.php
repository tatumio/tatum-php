<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/VeChainApi/#vetgettransactionreceipt
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

// Transaction hash
$arg_hash = "0x24f691abab680972437028af22bc7a43c3fbe8d6d7eefc420dea2daf554758a7";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/vet/transaction/{hash}/receipt
     * 
     * @var \Tatum\Model\VetTxReceipt $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->veChain()
        ->vetGetTransactionReceipt($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->veChain()->vetGetTransactionReceipt(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->veChain()->vetGetTransactionReceipt(): %s\n", 
        $exc->getMessage()
    );
}