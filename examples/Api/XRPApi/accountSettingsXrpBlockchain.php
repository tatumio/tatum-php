<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#accountsettingsxrpblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_account_settings_xrp_blockchain = (new \Tatum\Model\AccountSettingsXrpBlockchain())
    
    // XRP account address. Must be the one used for generating deposit tags.
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setFromSecret('snSFTHdvSYQKKkYntvEt8cnmZuPJB')
    
    // (optional) Fee to be paid, in XRP. If omitted, current fee will be calculated.
    ->setFee('10000')
    
    // (optional) Should be true, if an account is the issuer of assets.
    ->setRippling(true)
    
    // (optional) Should be true, if an account should support off-chain processing.
    ->setRequireDestinationTag(true);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->accountSettingsXrpBlockchain($arg_account_settings_xrp_blockchain);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->xRP()->accountSettingsXrpBlockchain(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->xRP()->accountSettingsXrpBlockchain(): %s\n", 
        $exc->getMessage()
    );
}