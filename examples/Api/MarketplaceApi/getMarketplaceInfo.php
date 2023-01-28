<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MarketplaceApi/#getmarketplaceinfo
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

// Blockchain to work with
$arg_chain = "SOL";

// Contract address
$arg_contract_address = "3MgkEwYY4b8iSX2yMLnbQ7n8KzNRKNAgTGJwVbEcKkUz";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/blockchain/marketplace/listing/{chain}/{contractAddress}
     * 
     * @var \Tatum\Model\GetMarketplaceInfo200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceInfo($arg_chain, $arg_contract_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->getMarketplaceInfo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->getMarketplaceInfo(): %s\n", 
        $exc->getMessage()
    );
}