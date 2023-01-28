<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/TronApi/#trontrc10detail
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

// The ID of the TRC-10 token or the address of the token's owner
$arg_id_or_owner_address = "1000540";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/tron/trc10/detail/{idOrOwnerAddress}
     * 
     * @var \Tatum\Model\TronTrc10Detail $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->tronTrc10Detail($arg_id_or_owner_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->tronTrc10Detail(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->tronTrc10Detail(): %s\n", 
        $exc->getMessage()
    );
}