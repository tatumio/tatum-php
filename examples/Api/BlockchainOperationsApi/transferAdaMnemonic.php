<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferadamnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_transfer_ada_mnemonic = (new \Tatum\Model\TransferAdaMnemonic())
    
    // Blockchain address to send assets
    ->setAddress('addr1qyyxyhaa2e7kxeqcc72w7f747zqlgwwwstlzsg9umuxc40wnhawldxl4nan95rhtlcnju9q2r8j9qz8vslwsmrkj5r4spxhep9')
    
    // Amount to be sent in ADA.
    ->setAmount('100000')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is...
    ->setFee('2.5')
    
    // Derivation index of sender address.
    ->setIndex(0)
    
    // Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or sig...
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mn...
    ->setXpub('41253768cd7c5831988e580cfc7eeecaa78bf52a1ede2bd2f245406605adfbadd5911ab567bc3dc7713e29c2c14bb898b24bb1f01a4992605343ad14703037b9')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // (optional) Note visible to owner of withdrawing account
    ->setSenderNote('Sender note');

try {

    /**
     * POST /v3/offchain/ada/transfer
     * 
     * @var \Tatum\Model\TransferBtcMnemonic200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferAdaMnemonic($arg_transfer_ada_mnemonic);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferAdaMnemonic(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferAdaMnemonic(): %s\n", 
        $exc->getMessage()
    );
}