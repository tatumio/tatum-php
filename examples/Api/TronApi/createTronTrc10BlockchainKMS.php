<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/TronApi/#createtrontrc10blockchainkms
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

$arg_create_tron_trc10_blockchain_kms = (new \Tatum\Model\CreateTronTrc10BlockchainKMS())
    
    // Sender address of TRON account in Base58 format.
    ->setFrom('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
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
        ->createTronTrc10BlockchainKMS($arg_create_tron_trc10_blockchain_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->createTronTrc10BlockchainKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->createTronTrc10BlockchainKMS(): %s\n", 
        $exc->getMessage()
    );
}