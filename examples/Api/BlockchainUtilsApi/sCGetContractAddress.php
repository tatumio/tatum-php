<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainUtilsApi.md#scgetcontractaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// The blockchain to work with
$arg_chain = 'chain_example';

// The ID (hash) of the deployment transaction
$arg_hash = "0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7";

try {

    /**
     * GET /v3/blockchain/sc/address/{chain}/{hash}
     * 
     * @var \Tatum\Model\SCGetContractAddress200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainUtils()
        ->sCGetContractAddress($arg_chain, $arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainUtils()->sCGetContractAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainUtils()->sCGetContractAddress(): %s\n", 
        $exc->getMessage()
    );
}