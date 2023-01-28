---
title: Key Management System
parent: API
layout: page
---

# Api/KeyManagementSystemApi

[Key Management System API Reference](https://apidoc.tatum.io/tag/Key-Management-System/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->keyManagementSystem();

// TestNet API Call
$sdk->testnet()->api()->keyManagementSystem();
```

## Methods

Method | Description
------------- | -------------
[**completePendingSignature()**](#completependingsignature) | Complete pending transaction to sign
[**deletePendingTransactionToSign()**](#deletependingtransactiontosign) | Delete transaction
[**getPendingTransactionToSign()**](#getpendingtransactiontosign) | Get transaction details
[**getPendingTransactionsToSign()**](#getpendingtransactionstosign) | Get pending transactions to sign
[**receivePendingTransactionsToSign()**](#receivependingtransactionstosign) | Get pending transactions to sign


## `completePendingSignature()`

### Example

[👉 View "**completePendingSignature.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KeyManagementSystemApi/completePendingSignature.php)

### Request

> **PUT** `/v3/kms/{id}/{txId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->keyManagementSystem()->completePendingSignature(
    string $id,
    string $tx_id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of pending transaction |
 **$tx_id** | **string**  | transaction ID of blockchain transaction |

### Return type

void (empty response body)

### Description

Complete pending transaction to sign

<h4>2 credits per API call.</h4>

 Mark pending transaction to sign as a complete and update it with a transactionID from the blockchain.

[Back to top](#top)



## `deletePendingTransactionToSign()`

### Example

[👉 View "**deletePendingTransactionToSign.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KeyManagementSystemApi/deletePendingTransactionToSign.php)

### Request

> **DELETE** `/v3/kms/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->keyManagementSystem()->deletePendingTransactionToSign(
    string $id,
    [ bool $revert = true ]
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of transaction |
 **$revert** | **bool**  | Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum ERC20 based currencies. | [optional] [default to true]

### Return type

void (empty response body)

### Description

Delete transaction

<h4>2 credits per API call.</h4>

Delete transaction to be signed. When deleting offchain transaction, linked withdrawal will be cancelled automatically.

[Back to top](#top)



## `getPendingTransactionToSign()`

### Example

[👉 View "**getPendingTransactionToSign.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KeyManagementSystemApi/getPendingTransactionToSign.php)

### Request

> **GET** `/v3/kms/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->keyManagementSystem()->getPendingTransactionToSign(
    string $id
): \Tatum\Model\PendingTransaction
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of transaction |

### Return type

[**\Tatum\Model\PendingTransaction**](../../Model/PendingTransaction)

### Description

Get transaction details

<h4>1 credit per API call.</h4>

Get detail of transaction to be signed / that was already signed and contains transactionId.

[Back to top](#top)



## `getPendingTransactionsToSign()`

### Example

[👉 View "**getPendingTransactionsToSign.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KeyManagementSystemApi/getPendingTransactionsToSign.php)

### Request

> **GET** `/v3/kms/pending/{chain}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->keyManagementSystem()->getPendingTransactionsToSign(
    string $chain,
    [ string $signatures ]
): \Tatum\Model\PendingTransaction[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to get pending transactions for. |
 **$signatures** | **string**  | Signature IDs of the KMS which invokes this endpoint. If multiple, they should be separated by comma. | [optional]

### Return type

[**\Tatum\Model\PendingTransaction[]**](../../Model/PendingTransaction)

### Description

Get pending transactions to sign

**1 credit per API call**

 Get the list of pending transactions to sign and broadcast using <a href="https://github.com/tatumio/tatum-kms" target="_blank">KMS</a>.

[Back to top](#top)



## `receivePendingTransactionsToSign()`

### Example

[👉 View "**receivePendingTransactionsToSign.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KeyManagementSystemApi/receivePendingTransactionsToSign.php)

### Request

> **POST** `/v3/kms/pending/{chain}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->keyManagementSystem()->receivePendingTransactionsToSign(
    string $chain,
    [ \Tatum\Model\KmsSignatureIds $kms_signature_ids ]
): \Tatum\Model\PendingTransaction[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to get pending transactions for. |
 **$kms_signature_ids** | [**\Tatum\Model\KmsSignatureIds**](../../Model/KmsSignatureIds) | Signature IDs of the KMS which invokes this endpoint. | [optional]

### Return type

[**\Tatum\Model\PendingTransaction[]**](../../Model/PendingTransaction)

### Description

Get pending transactions to sign

**1 credit for every 500 signature IDs per API call**

 Get the list of pending transactions to sign and broadcast using <a href="https://github.com/tatumio/tatum-kms" target="_blank">KMS</a>.

 **NOTE:** This API works only in KMS v5.0 or later. If you use KMS older than v5.0, use <a href="https://apidoc.tatum.io/tag/Key-Management-System/#operation/getpendingtransactionstosign">this API</a> instead.

[Back to top](#top)

