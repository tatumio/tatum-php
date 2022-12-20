# Tatum/Api/BNBBeaconChainApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bnbBlockchainTransfer()**](#bnbblockchaintransfer) | **POST** /v3/bnb/transaction | Send Binance / Binance Token from account to account
[**bnbBroadcast()**](#bnbbroadcast) | **POST** /v3/bnb/broadcast | Broadcast signed BNB transaction
[**bnbGenerateWallet()**](#bnbgeneratewallet) | **GET** /v3/bnb/account | Generate Binance wallet
[**bnbGetAccount()**](#bnbgetaccount) | **GET** /v3/bnb/account/{address} | Get Binance Account
[**bnbGetBlock()**](#bnbgetblock) | **GET** /v3/bnb/block/{height} | Get Binance Transactions in Block
[**bnbGetCurrentBlock()**](#bnbgetcurrentblock) | **GET** /v3/bnb/block/current | Get Binance current block
[**bnbGetTransaction()**](#bnbgettransaction) | **GET** /v3/bnb/transaction/{hash} | Get Binance Transaction
[**bnbGetTxByAccount()**](#bnbgettxbyaccount) | **GET** /v3/bnb/account/transaction/{address} | Get Binance Transactions By Address


## `bnbBlockchainTransfer()`

```php
api()->bNBBeaconChain()->bnbBlockchainTransfer(
    ?\Tatum\Model\BnbBlockchainTransferRequest $bnb_blockchain_transfer_request
): \Tatum\Model\TransactionHash
```

Send Binance / Binance Token from account to account

<h4>10 credits per API call.</h4><br/> <p>Send Binance or Binance Token token from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production,  <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request.  Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bnb_blockchain_transfer_request = new \Tatum\Model\BnbBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbBlockchainTransfer($bnb_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bnb_blockchain_transfer_request** | [**\Tatum\Model\BnbBlockchainTransferRequest**](../Model/BnbBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bnbBroadcast()`

```php
api()->bNBBeaconChain()->bnbBroadcast(
    ?\Tatum\Model\Broadcast $broadcast
): \Tatum\Model\TransactionHash
```

Broadcast signed BNB transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to Binance blockchain. This method is used internally or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$broadcast = new \Tatum\Model\Broadcast();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbBroadcast($broadcast);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast** | [**\Tatum\Model\Broadcast**](../Model/Broadcast.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bnbGenerateWallet()`

```php
api()->bNBBeaconChain()->bnbGenerateWallet(
): \Tatum\Model\BnbWallet
```

Generate Binance wallet

<h4>5 credits per API call.</h4><br/> <p>Generate BNB account. Tatum does not support HD wallet for BNB, only specific address and private key can be generated.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\BnbWallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGenerateWallet();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\BnbWallet**](../Model/BnbWallet.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bnbGetAccount()`

```php
api()->bNBBeaconChain()->bnbGetAccount(
    ?string $address
): \Tatum\Model\BnbAccount
```

Get Binance Account

<h4>5 credits per API call.</h4><br/><p>Get Binance Account Detail by address.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = 'tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn';

try {
    /** @var \Tatum\Model\BnbAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGetAccount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbGetAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbGetAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\BnbAccount**](../Model/BnbAccount.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bnbGetBlock()`

```php
api()->bNBBeaconChain()->bnbGetBlock(
    ?float $height
): \Tatum\Model\BnbBlock
```

Get Binance Transactions in Block

<h4>5 credits per API call.</h4><br/><p>Get Transactions in block by block height.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block height
$height = 6470657;

try {
    /** @var \Tatum\Model\BnbBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGetBlock($height);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$height** | **float**| Block height |

### Return type

[**\Tatum\Model\BnbBlock**](../Model/BnbBlock.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bnbGetCurrentBlock()`

```php
api()->bNBBeaconChain()->bnbGetCurrentBlock(
): float
```

Get Binance current block

<h4>5 credits per API call.</h4><br/><p>Get Binance current block number.</p>

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
        ->bNBBeaconChain()
        ->bnbGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bnbGetTransaction()`

```php
api()->bNBBeaconChain()->bnbGetTransaction(
    ?string $hash
): \Tatum\Model\BnbTx
```

Get Binance Transaction

<h4>5 credits per API call.</h4><br/><p>Get Binance Transaction by transaction hash.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '4B944BBF78F3ADE3A377551B5EA7AD0FEDBDA13165D932F94B106EF7A8E16C1A';

try {
    /** @var \Tatum\Model\BnbTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\BnbTx**](../Model/BnbTx.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bnbGetTxByAccount()`

```php
api()->bNBBeaconChain()->bnbGetTxByAccount(
    ?string $address, 
    ?float $start_time, 
    ?float $end_time, 
    ?float $limit, 
    ?float $offset, 
    ?string $asset, 
    ?string $address_type
): \Tatum\Model\BnbTxInAccount
```

Get Binance Transactions By Address

<h4>5 credits per API call.</h4><br/><p>Get Binance Transactions by address.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address
$address = 'tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn';

// Start time in milliseconds
$start_time = 1651831727871;

// End time in milliseconds
$end_time = 1651831727871;

// Items per page.
$limit = 10;

// Pagination offset
$offset = 10;

// Asset name
$asset = 'BNB';

// Address type
$address_type = 'FROM';

try {
    /** @var \Tatum\Model\BnbTxInAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGetTxByAccount($address, $start_time, $end_time, $limit, $offset, $asset, $address_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBBeaconChain()->bnbGetTxByAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBBeaconChain()->bnbGetTxByAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address |
 **$start_time** | **float**| Start time in milliseconds |
 **$end_time** | **float**| End time in milliseconds |
 **$limit** | **float**| Items per page. | [optional]
 **$offset** | **float**| Pagination offset | [optional]
 **$asset** | **string**| Asset name | [optional]
 **$address_type** | **string**| Address type | [optional]

### Return type

[**\Tatum\Model\BnbTxInAccount**](../Model/BnbTxInAccount.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
