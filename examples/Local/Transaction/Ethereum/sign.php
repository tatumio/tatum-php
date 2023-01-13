<?php
/**
 * Copyright 
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Local/Transaction/Ethereum.md#sign
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 4) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transfer request
$arg_transfer = (new \Tatum\Model\TransferEthBlockchain())
  ->setFromPrivateKey('0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585')
  ->setTo('0x9266045eea878f35e0041d3140f0d79f8606f04c')
  ->setAmount(1)
  ->setNonce(0)
  ->setFee((new \Tatum\Model\CustomFee())->setGasPrice(55)->setGasLimit(60));

try {
    
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->ethereum()
        ->sign($arg_transfer);

    var_dump($result);

} catch (\Exception $exc) {
    echo 'Exception when calling local()->transaction()->ethereum()->sign(): ', $exc->getMessage(), PHP_EOL;
}