<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/KlaytnApi/#callklaytnsmartcontractmethod
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

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

$arg_call_klaytn_smart_contract_method = (new \Tatum\Model\CallKlaytnSmartContractMethod())
    
    // The address of the smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Amount of the assets to be sent.
    ->setAmount('100000')
    
    // Name of the method to invoke on smart contract.
    ->setMethodName('transfer')
    
    // ABI of the method to invoke.
    ->setMethodAbi(
        json_decode(
            '{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}'
        )
    )
    
    // string[]
    ->setParams(["0x632"])
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) Nonce to be set to Klaytn transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) \Tatum\Model\TransferKlay20BlockchainFee
    ->setFee(null);

try {

    /**
     * POST /v3/klaytn/smartcontract
     * 
     * @var \Tatum\Model\CallSmartContractMethod200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->klaytn()
        ->callKlaytnSmartContractMethod($arg_call_klaytn_smart_contract_method);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->klaytn()->callKlaytnSmartContractMethod(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->klaytn()->callKlaytnSmartContractMethod(): %s\n", 
        $exc->getMessage()
    );
}