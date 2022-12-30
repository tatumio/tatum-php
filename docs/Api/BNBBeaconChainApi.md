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

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbBlockchainTransfer(
    \Tatum\Model\BnbBlockchainTransferRequest $bnb_blockchain_transfer_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bnb_blockchain_transfer_request** | [**\Tatum\Model\BnbBlockchainTransferRequest**](../Model/BnbBlockchainTransferRequest.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send Binance / Binance Token from account to account

<h4>10 credits per API call.</h4><br/> <p>Send Binance or Binance Token token from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production,  <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request.  Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "bnbBlockchainTransfer.php"](../../examples/Api/BNBBeaconChainApi/bnbBlockchainTransfer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbBroadcast(
    \Tatum\Model\Broadcast $broadcast
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast** | [**\Tatum\Model\Broadcast**](../Model/Broadcast.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed BNB transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to Binance blockchain. This method is used internally or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "bnbBroadcast.php"](../../examples/Api/BNBBeaconChainApi/bnbBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGenerateWallet(
): \Tatum\Model\BnbWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\BnbWallet**](../Model/BnbWallet.md)

### Description

Generate Binance wallet

<h4>5 credits per API call.</h4><br/> <p>Generate BNB account. Tatum does not support HD wallet for BNB, only specific address and private key can be generated.</p>

### Example

[✨ View "bnbGenerateWallet.php"](../../examples/Api/BNBBeaconChainApi/bnbGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbGetAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetAccount(
    string $address
): \Tatum\Model\BnbAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\BnbAccount**](../Model/BnbAccount.md)

### Description

Get Binance Account

<h4>5 credits per API call.</h4><br/><p>Get Binance Account Detail by address.</p>

### Example

[✨ View "bnbGetAccount.php"](../../examples/Api/BNBBeaconChainApi/bnbGetAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetBlock(
    float $height
): \Tatum\Model\BnbBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$height** | **float**  | Block height |

### Return type

[**\Tatum\Model\BnbBlock**](../Model/BnbBlock.md)

### Description

Get Binance Transactions in Block

<h4>5 credits per API call.</h4><br/><p>Get Transactions in block by block height.</p>

### Example

[✨ View "bnbGetBlock.php"](../../examples/Api/BNBBeaconChainApi/bnbGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get Binance current block

<h4>5 credits per API call.</h4><br/><p>Get Binance current block number.</p>

### Example

[✨ View "bnbGetCurrentBlock.php"](../../examples/Api/BNBBeaconChainApi/bnbGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetTransaction(
    string $hash
): \Tatum\Model\BnbTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BnbTx**](../Model/BnbTx.md)

### Description

Get Binance Transaction

<h4>5 credits per API call.</h4><br/><p>Get Binance Transaction by transaction hash.</p>

### Example

[✨ View "bnbGetTransaction.php"](../../examples/Api/BNBBeaconChainApi/bnbGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbGetTxByAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetTxByAccount(
    string $address,
    float $start_time,
    float $end_time,
    [ float $limit, ]
    [ float $offset, ]
    [ string $asset, ]
    [ string $address_type ]
): \Tatum\Model\BnbTxInAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address |
 **$start_time** | **float**  | Start time in milliseconds |
 **$end_time** | **float**  | End time in milliseconds |
 **$limit** | **float**  | Items per page. | [optional]
 **$offset** | **float**  | Pagination offset | [optional]
 **$asset** | **string**  | Asset name | [optional]
 **$address_type** | **string**  | Address type | [optional]

### Return type

[**\Tatum\Model\BnbTxInAccount**](../Model/BnbTxInAccount.md)

### Description

Get Binance Transactions By Address

<h4>5 credits per API call.</h4><br/><p>Get Binance Transactions by address.</p>

### Example

[✨ View "bnbGetTxByAccount.php"](../../examples/Api/BNBBeaconChainApi/bnbGetTxByAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
