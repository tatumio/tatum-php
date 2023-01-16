<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offoneerc20
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_erc20 = (new \Tatum\Model\Erc20())
    
    // The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain<br/>The token name that you specify here must be the same as the token name in the <code>symbol</code> parameter of the smart contract that you <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy" target="_blank">are going to deploy or have already deployed</a> for this token.
    ->setSymbol('MY_TOKEN')
    
    // The supply of the token
    ->setSupply('1000000.0')
    
    // The number of decimal places that the token has
    ->setDecimals(8)
    
    // The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain
    ->setDescription('My Public Token')
    
    // The extended public key of the wallet from which a deposit address for the virtual account will be generated; the supply of the token will be stored on this address<br/><b>NOTE:</b> On Solana, you only can assign an existing address to the virtual account; use the <code>Erc20Address</code> schema of this API.
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid')
    
    // The derivation index to use together with the extended public key to generate the deposit address
    ->setDerivationIndex(0)
    
    // The base pair for the virtual currency that represents the token; used to calculate the value of a transaction
    ->setBasePair('EUR')
    
    // (optional) The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code>
    ->setBaseRate(1)
    
    // (optional) 
    ->setCustomer(null)
    
    // (optional) The ISO 4217 code of the currency in which all transactions for the created virtual account will be billed
    ->setAccountingCurrency('USD');

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->offOneErc20($arg_erc20);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offOneErc20(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offOneErc20(): " . $exc->getMessage() . PHP_EOL;
}