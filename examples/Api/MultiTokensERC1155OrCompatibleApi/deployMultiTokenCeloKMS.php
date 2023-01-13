<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokencelokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_multi_token_celo_kms = new \Tatum\Model\DeployMultiTokenCeloKMS();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->deployMultiTokenCeloKMS($arg_deploy_multi_token_celo_kms, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->multiTokensERC1155OrCompatible()->deployMultiTokenCeloKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->multiTokensERC1155OrCompatible()->deployMultiTokenCeloKMS(): " . $exc->getMessage() . PHP_EOL;
}