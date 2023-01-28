<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CustodialManagedWalletsApi/#custodialtransfermanagedaddress
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

$arg_transfer_managed_address = (new \Tatum\Model\TransferManagedAddress())
    
    // Blockchain to work on
    ->setChain('SOL')
    
    // Hex serialized data representing transaction, which should be signed using one of the managed wal...
    ->setTxData('020001044a22af97a838a504e6f7c0b18d779afcea612da50794cc1dac641861fc1ab14afa5cacaf91c298694e64bb5496916c3c68a32affb92d4bcd2736fbb00169d57bd840de2a454960308f688cd3ee308c1fa01ecfa0b03770aaaf3b52d71d46c31d000000000000000000000000000000000000000000000000000000000000000060d38e0da20dc5900b7e902c918eae6a95e2d90af154b53a422f4ab26b050f4f01030201020c02000000e803000000000000')
    
    // \Tatum\Model\TransferManagedAddressWalletIdsInner[]
    ->setWalletIds(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/custodial/transaction
     * 
     * @var \Tatum\Model\TransactionHash $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialTransferManagedAddress($arg_transfer_managed_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->custodialManagedWallets()->custodialTransferManagedAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->custodialManagedWallets()->custodialTransferManagedAddress(): %s\n", 
        $exc->getMessage()
    );
}