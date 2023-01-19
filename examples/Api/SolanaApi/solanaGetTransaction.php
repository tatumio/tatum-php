<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/SolanaApi.md#solanagettransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Transaction hash
$arg_hash = "5oSXZkPregqGhHrTcbWhgHQJETvBHtBYssuuCMJ3qroAgHsHndsr8fyY8kY76AgwmMaZBZW8ThHAXwjDaUSweApS";

// Commitment of the transaction. If not defined, all transactions are being scanned.
$arg_commitment = 'commitment_example';

try {

    /** @var \Tatum\Model\SolanaTx $response */
    $response = $sdk->mainnet()
        ->api()
        ->solana()
        ->solanaGetTransaction($arg_hash, $arg_commitment);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->solana()->solanaGetTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->solana()->solanaGetTransaction(): %s\n", 
        $exc->getMessage()
    );
}