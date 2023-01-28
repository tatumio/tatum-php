<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#transfercustodialwallettron
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

$arg_transfer_custodial_wallet_tron = (new \Tatum\Model\TransferCustodialWalletTron())
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The gas pump address that transfers the asset; this is the address that you precalculated and act...
    ->setCustodialAddress('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // The blockchain address that receives the asset
    ->setRecipient('TYMcTVBz48okKLRczhwiDu22V6XG3yk6W9')
    
    // The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent),...
    ->setContractType(0)
    
    // (optional) (Only if the asset is a fungible token or NFT) The address of the token to transfer. Do not use i...
    ->setTokenAddress('TYMG3ykLRczh6W9cTVBz48wiDu22V6XokK')
    
    // (optional) (Only if the asset is a fungible token or native blockchain currency) The amount of the asset to ...
    ->setAmount('100000')
    
    // (optional) (Only if the asset is an NFT) The ID of the token to transfer. Do not use if the asset is a fungi...
    ->setTokenId('100000')
    
    // The private key of the blockchain address that owns the gas pump address ("master address")
    ->setFromPrivateKey('05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // The maximum amount to be paid as the gas fee (in TRX)
    ->setFeeLimit(10);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/blockchain/sc/custodial/transfer
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->transferCustodialWalletTron($arg_transfer_custodial_wallet_tron);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->transferCustodialWalletTron(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->transferCustodialWalletTron(): %s\n", 
        $exc->getMessage()
    );
}