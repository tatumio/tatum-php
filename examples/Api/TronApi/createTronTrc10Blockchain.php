<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/TronApi/#createtrontrc10blockchain
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

$arg_create_tron_trc10_blockchain = (new \Tatum\Model\CreateTronTrc10Blockchain())
    
    // Private key of the address, from which the TRX will be sent.
    ->setFromPrivateKey('842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701')
    
    // Recipient address of created TRC 10 tokens.
    ->setRecipient('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Name of the token.
    ->setName('My token')
    
    // Abbreviation of the token.
    ->setAbbreviation('SYM')
    
    // Description of the token.
    ->setDescription('My short description')
    
    // URL of the token.
    ->setUrl('https://mytoken.com')
    
    // Total supply of the tokens.
    ->setTotalSupply(100000)
    
    // Number of decimal places of the token.
    ->setDecimals(10);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/tron/trc10/deploy
     * 
     * @var \Tatum\Model\TransactionHash $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->createTronTrc10Blockchain($arg_create_tron_trc10_blockchain);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->createTronTrc10Blockchain(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->createTronTrc10Blockchain(): %s\n", 
        $exc->getMessage()
    );
}