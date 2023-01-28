<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#transferalgo
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

$arg_transfer_algo = (new \Tatum\Model\TransferAlgo())
    
    // The ID of the virtual account to send Algos from
    ->setSenderAccountId('61b3bffddfb389cde19c73be')
    
    // The blockchain address to send Algos to
    ->setAddress('5YVZBUH3STSQ5ABCTLEIEIJ7QOZFILM2DLAEEA4ZL6CU55ODZIQXO5EMYM')
    
    // The amount to send in Algos
    ->setAmount('10000')
    
    // The transaction fee in Algos
    ->setFee('0.001')
    
    // The secret of the Algorand wallet (account). Secret, or signature Id must be present.
    ->setPrivateKey('NBYMCVEEDFYV3TPWVRE6APE7PKHUJD4XAKXCKNCLKGUXOC3LFNJGZQCJCRA53HB7ZAHF6NFJH2QIVQ5USQNWG35QCJLD4KZ5IWMB24Q')
    
    // (optional) Compliance check; if the withdrawal is not compliant, it will not be processed
    ->setCompliant(false)
    
    // (optional) The identifier of the Algo transfer that is shown on the virtual account for the created transaction
    ->setPaymentId('1234')
    
    // (optional) The note for the recipient; must not contain spaces
    ->setSenderNote('Helloworld');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/algorand/transfer
     * 
     * @var \Tatum\Model\TransferBtcMnemonic200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferAlgo($arg_transfer_algo);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferAlgo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferAlgo(): %s\n", 
        $exc->getMessage()
    );
}