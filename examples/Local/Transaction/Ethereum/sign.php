<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Local/Transaction/Ethereum/#sign
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 4) . "/autoload.php";

// Set your API Keys 👇 here
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
    echo sprintf(
        "Exception when calling local()->transaction()->ethereum()->sign(): %s\n", 
        $exc->getMessage()
    );
}