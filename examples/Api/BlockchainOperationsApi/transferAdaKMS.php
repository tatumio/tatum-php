<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferadakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_transfer_ada_kms = (new \Tatum\Model\TransferAdaKMS())
    
    // Blockchain address to send assets to
    ->setAddress('addr1qyyxyhaa2e7kxeqcc72w7f747zqlgwwwstlzsg9umuxc40wnhawldxl4nan95rhtlcnju9q2r8j9qz8vslwsmrkj5r4spxhep9')
    
    // Amount to be sent in ADA.
    ->setAmount('100000')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is...
    ->setFee('2.5')
    
    // Blockchain address to send assets from
    ->setFrom('addr1qyyxyhaa2e7kxeqcc72w7f747zqlgwwwstlzsg9umuxc40wnhawldxl4nan95rhtlcnju9q2r8j9qz8vslwsmrkj5r4spxhep9')
    
    // Identifier of the mnemonic / private key associated in signing application. When hash identifies ...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Extended public key (xpub) of the wallet associated with the accounts. XPub or attr must be used ...
    ->setXpub('41253768cd7c5831988e580cfc7eeecaa78bf52a1ede2bd2f245406605adfbadd5911ab567bc3dc7713e29c2c14bb898b24bb1f01a4992605343ad14703037b9')
    
    // (optional) Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr ...
    ->setAttr('null')
    
    // (optional) Derivation index of sender address.
    ->setIndex(0)
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // (optional) Note visible to owner of withdrawing account
    ->setSenderNote('Sender note');

try {

    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferAdaKMS($arg_transfer_ada_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferAdaKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferAdaKMS(): %s\n", 
        $exc->getMessage()
    );
}