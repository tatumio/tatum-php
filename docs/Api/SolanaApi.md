# Tatum/Api/SolanaApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaBlockchainTransfer()**](#solanaBlockchainTransfer) | **POST** /v3/solana/transaction | Send SOL from account to account
[**solanaBroadcastConfirm()**](#solanaBroadcastConfirm) | **POST** /v3/solana/broadcast/confirm | Broadcast and confirm signed Solana transaction
[**solanaGenerateWallet()**](#solanaGenerateWallet) | **GET** /v3/solana/wallet | Generate Solana wallet
[**solanaGetBalance()**](#solanaGetBalance) | **GET** /v3/solana/account/balance/{address} | Get Solana Account balance
[**solanaGetBlock()**](#solanaGetBlock) | **GET** /v3/solana/block/{height} | Get Solana block by number
[**solanaGetCurrentBlock()**](#solanaGetCurrentBlock) | **GET** /v3/solana/block/current | Get current block number
[**solanaGetTransaction()**](#solanaGetTransaction) | **GET** /v3/solana/transaction/{hash} | Get Solana Transaction
[**solanaWeb3Driver()**](#solanaWeb3Driver) | **POST** /v3/solana/web3/{xApiKey} | JSON RPC HTTP driver


## `solanaBlockchainTransfer()`

```php
api()->solana()->solanaBlockchainTransfer(
    ?\Tatum\Model\SolanaBlockchainTransferRequest $solana_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send SOL from account to account

<h4>2 credits per API call.</h4><br/> <p>Send SOL from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$solana_blockchain_transfer_request = new \Tatum\Model\SolanaBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaBlockchainTransfer($solana_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$solana_blockchain_transfer_request** | [**\Tatum\Model\SolanaBlockchainTransferRequest**](../Model/SolanaBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `solanaBroadcastConfirm()`

```php
api()->solana()->solanaBroadcastConfirm(
    ?\Tatum\Model\SolanaBroadcastConfirm $solana_broadcast_confirm
): \Tatum\Model\SolanaTransactionHashWithConfirm
```

Broadcast and confirm signed Solana transaction

<h4>10 credits per API call.</h4><br/> <p>Broadcast signed custom transactions to Solana blockchain and waits for transaction confirmation depending on the commitment given. More information about commitment levels <a target="_blank" href="https://docs.solana.com/ru/developing/clients/jsonrpc-api#configuring-state-commitment">here</a></p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$solana_broadcast_confirm = new \Tatum\Model\SolanaBroadcastConfirm();

try {
    /** @var \Tatum\Model\SolanaTransactionHashWithConfirm $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaBroadcastConfirm($solana_broadcast_confirm);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaBroadcastConfirm(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaBroadcastConfirm(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$solana_broadcast_confirm** | [**\Tatum\Model\SolanaBroadcastConfirm**](../Model/SolanaBroadcastConfirm.md)|  |

### Return type

[**\Tatum\Model\SolanaTransactionHashWithConfirm**](../Model/SolanaTransactionHashWithConfirm.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `solanaGenerateWallet()`

```php
api()->solana()->solanaGenerateWallet(
): \Tatum\Model\SolanaWallet
```

Generate Solana wallet

<h4>1 credit per API call.</h4><br/> <p>Generate Solana private key and account address.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\SolanaWallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaGenerateWallet();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\SolanaWallet**](../Model/SolanaWallet.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `solanaGetBalance()`

```php
api()->solana()->solanaGetBalance(
    ?string $address
): \Tatum\Model\SolBalance
```

Get Solana Account balance

<h4>1 credit per API call.</h4><br/><p>Get Solana account balance in SOL. This method does not prints any balance of the SPL or NFT tokens on the account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = 'FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ';

try {
    /** @var \Tatum\Model\SolBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaGetBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\SolBalance**](../Model/SolBalance.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `solanaGetBlock()`

```php
api()->solana()->solanaGetBlock(
    ?float $height
): \Tatum\Model\SolanaBlock
```

Get Solana block by number

<h4>1 credit per API call.</h4><br/> <p>Get Solana block by block hash or block number. <br/> You can find full data description here - <a target="blank" href="https://docs.solana.com/developing/clients/jsonrpc-api#getblock">https://docs.solana.com/developing/clients/jsonrpc-api#getblock</a> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block number
$height = 6470657;

try {
    /** @var \Tatum\Model\SolanaBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaGetBlock($height);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$height** | **float**| Block number |

### Return type

[**\Tatum\Model\SolanaBlock**](../Model/SolanaBlock.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `solanaGetCurrentBlock()`

```php
api()->solana()->solanaGetCurrentBlock(
): float
```

Get current block number

<h4>1 credit per API call.</h4><br/><p>Get Solana current block number. This is the number of the latest block in the blockchain.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `solanaGetTransaction()`

```php
api()->solana()->solanaGetTransaction(
    ?string $hash, 
    ?string $commitment
): \Tatum\Model\SolanaTx
```

Get Solana Transaction

<h4>2 credit per API call.</h4><br/><p>Get Solana transaction by transaction hash.<br/> You can find full data description here - <a target="blank" href="https://docs.solana.com/developing/clients/jsonrpc-api#gettransaction">https://docs.solana.com/developing/clients/jsonrpc-api#gettransaction</a> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '5oSXZkPregqGhHrTcbWhgHQJETvBHtBYssuuCMJ3qroAgHsHndsr8fyY8kY76AgwmMaZBZW8ThHAXwjDaUSweApS';

// Commitment of the transaction. If not defined, all transactions are being scanned.
$commitment = 'commitment_example';

try {
    /** @var \Tatum\Model\SolanaTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaGetTransaction($hash, $commitment);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |
 **$commitment** | **string**| Commitment of the transaction. If not defined, all transactions are being scanned. | [optional]

### Return type

[**\Tatum\Model\SolanaTx**](../Model/SolanaTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `solanaWeb3Driver()`

```php
api()->solana()->solanaWeb3Driver(
    ?string $x_api_key, 
    ?object $body
): object
```

JSON RPC HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based JSON RPC driver to connect directly to the Solana node provided by Tatum. To learn more about Solana JSON RPC, visit the <a href="https://docs.solana.com/developing/clients/jsonrpc-api" target="_blank">Solana developer's guide</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

$body = array('key' => new \stdClass);

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaWeb3Driver($x_api_key, $body);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling solana()->solanaWeb3Driver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling solana()->solanaWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$body** | **object**|  |

### Return type

**object**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
