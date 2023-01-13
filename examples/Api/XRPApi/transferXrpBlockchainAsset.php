<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#transferxrpblockchainasset
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xrp_blockchain_asset = (new \Tatum\Model\TransferXrpBlockchainAsset())
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setTo('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setAmount('10000')
    ->setFromSecret('snSFTHdvSYQKKkYntvEt8cnmZuPJB')
    ->setFee('10000')/* optional */
    ->setSourceTag(12355)/* optional */
    ->setDestinationTag(12355)/* optional */
    ->setIssuerAccount('rsP3mgGb2tcYUrxiLFiHJiQXhsziegtwBc')
    ->setToken('DA39A3EE5E6B4B0D3255BFEF95601890AFD80709');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->transferXrpBlockchainAsset($arg_transfer_xrp_blockchain_asset);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xRP()->transferXrpBlockchainAsset(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xRP()->transferXrpBlockchainAsset(): " . $exc->getMessage() . PHP_EOL;
}