<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BitcoinCashApi/#bchgetblockhash
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

// The number of blocks preceding a particular block on a block chain.
$arg_i = 1580117;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/bcash/block/hash/{i}
     * 
     * @var \Tatum\Model\BchGetBlockHash200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoinCash()
        ->bchGetBlockHash($arg_i);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoinCash()->bchGetBlockHash(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoinCash()->bchGetBlockHash(): %s\n", 
        $exc->getMessage()
    );
}