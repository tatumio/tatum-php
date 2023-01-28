<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/StellarApi/#transferxlmblockchainkmsasset
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

$arg_transfer_xlm_blockchain_kms_asset = (new \Tatum\Model\TransferXlmBlockchainKMSAsset())
    
    // Blockchain account to send assets from
    ->setFromAccount('GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H')
    
    // Blockchain address to send assets
    ->setTo('GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H')
    
    // Amount to be sent, in XLM.
    ->setAmount('10000')
    
    // Identifier of the secret associated in signing application. Secret, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Set to true, if the destination address is not yet initialized and should be funded for the first...
    ->setInitialize(false)
    
    // Asset name. If not defined, transaction is being sent in native XLM asset.
    ->setToken('TOKEN123')
    
    // Blockchain address of the issuer of the assets to send, if not native XLM asset.
    ->setIssuerAccount('GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT')
    
    // (optional) Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HE...
    ->setMessage('12355');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/xlm/transaction
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->stellar()
        ->transferXlmBlockchainKMSAsset($arg_transfer_xlm_blockchain_kms_asset);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->stellar()->transferXlmBlockchainKMSAsset(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->stellar()->transferXlmBlockchainKMSAsset(): %s\n", 
        $exc->getMessage()
    );
}