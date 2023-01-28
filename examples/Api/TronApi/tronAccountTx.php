<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/TronApi/#tronaccounttx
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

// The address of the TRON account to get all transactions for
$arg_address = "TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8";

// The fingerprint of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
$arg_next = "81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/tron/transaction/account/{address}
     * 
     * @var \Tatum\Model\TronAccountTx200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->tronAccountTx($arg_address, $arg_next);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->tronAccountTx(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->tronAccountTx(): %s\n", 
        $exc->getMessage()
    );
}