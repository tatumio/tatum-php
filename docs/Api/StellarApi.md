---
title: Stellar
parent: API
layout: page
---

# Api/StellarApi

[Stellar API Reference](https://apidoc.tatum.io/tag/Stellar/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->stellar();

// TestNet API Call
$sdk->testnet()->api()->stellar();
```

## Methods

Method | Description
------------- | -------------
[**transferXlmBlockchain()**](#transferxlmblockchain) | Send XLM from address to address
[**transferXlmBlockchainAsset()**](#transferxlmblockchainasset) | Send XLM from address to address
[**transferXlmBlockchainKMS()**](#transferxlmblockchainkms) | Send XLM from address to address
[**transferXlmBlockchainKMSAsset()**](#transferxlmblockchainkmsasset) | Send XLM from address to address
[**trustLineXlmBlockchain()**](#trustlinexlmblockchain) | Create / Update / Delete XLM trust line
[**trustLineXlmBlockchainKMS()**](#trustlinexlmblockchainkms) | Create / Update / Delete XLM trust line
[**xlmBroadcast()**](#xlmbroadcast) | Broadcast signed XLM transaction
[**xlmGetAccountInfo()**](#xlmgetaccountinfo) | Get XLM Account info
[**xlmGetAccountTx()**](#xlmgetaccounttx) | Get XLM Account transactions
[**xlmGetFee()**](#xlmgetfee) | Get actual XLM fee
[**xlmGetLastClosedLedger()**](#xlmgetlastclosedledger) | Get XLM Blockchain Information
[**xlmGetLedger()**](#xlmgetledger) | Get XLM Blockchain Ledger by sequence
[**xlmGetLedgerTx()**](#xlmgetledgertx) | Get XLM Blockchain Transactions in Ledger
[**xlmGetTransaction()**](#xlmgettransaction) | Get XLM Transaction by hash
[**xlmWallet()**](#xlmwallet) | Generate XLM account


## `transferXlmBlockchain()`

### Example

[👉 View "**transferXlmBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchain.php)

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchain(
    \Tatum\Model\TransferXlmBlockchain $transfer_xlm_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain** | [**\Tatum\Model\TransferXlmBlockchain**](../../Model/TransferXlmBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XLM from address to address

<h4>10 credits per API call.</h4>

 Send XLM from account to account. It is possbile to send native XLM asset, or any other custom asset present on the network.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `transferXlmBlockchainAsset()`

### Example

[👉 View "**transferXlmBlockchainAsset.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainAsset.php)

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainAsset(
    \Tatum\Model\TransferXlmBlockchainAsset $transfer_xlm_blockchain_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_asset** | [**\Tatum\Model\TransferXlmBlockchainAsset**](../../Model/TransferXlmBlockchainAsset) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XLM from address to address

TransferXlmBlockchainAsset operation

[Back to top](#top)



## `transferXlmBlockchainKMS()`

### Example

[👉 View "**transferXlmBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainKMS.php)

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainKMS(
    \Tatum\Model\TransferXlmBlockchainKMS $transfer_xlm_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms** | [**\Tatum\Model\TransferXlmBlockchainKMS**](../../Model/TransferXlmBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XLM from address to address

TransferXlmBlockchainKMS operation

[Back to top](#top)



## `transferXlmBlockchainKMSAsset()`

### Example

[👉 View "**transferXlmBlockchainKMSAsset.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainKMSAsset.php)

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainKMSAsset(
    \Tatum\Model\TransferXlmBlockchainKMSAsset $transfer_xlm_blockchain_kms_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms_asset** | [**\Tatum\Model\TransferXlmBlockchainKMSAsset**](../../Model/TransferXlmBlockchainKMSAsset) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XLM from address to address

TransferXlmBlockchainKMSAsset operation

[Back to top](#top)



## `trustLineXlmBlockchain()`

### Example

[👉 View "**trustLineXlmBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/trustLineXlmBlockchain.php)

### Request

> **POST** `/v3/xlm/trust`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->trustLineXlmBlockchain(
    \Tatum\Model\TrustLineXlmBlockchain $trust_line_xlm_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain** | [**\Tatum\Model\TrustLineXlmBlockchain**](../../Model/TrustLineXlmBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Create / Update / Delete XLM trust line

<h4>10 credits per API call.</h4>

 Create / Update / Delete XLM trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `trustLineXlmBlockchainKMS()`

### Example

[👉 View "**trustLineXlmBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/trustLineXlmBlockchainKMS.php)

### Request

> **POST** `/v3/xlm/trust`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->trustLineXlmBlockchainKMS(
    \Tatum\Model\TrustLineXlmBlockchainKMS $trust_line_xlm_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain_kms** | [**\Tatum\Model\TrustLineXlmBlockchainKMS**](../../Model/TrustLineXlmBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Create / Update / Delete XLM trust line

TrustLineXlmBlockchainKMS operation

[Back to top](#top)



## `xlmBroadcast()`

### Example

[👉 View "**xlmBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmBroadcast.php)

### Request

> **POST** `/v3/xlm/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../../Model/BroadcastKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Broadcast signed XLM transaction

<h4>5 credits per API call.</h4>

 Broadcast signed transaction to XLM blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `xlmGetAccountInfo()`

### Example

[👉 View "**xlmGetAccountInfo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetAccountInfo.php)

### Request

> **GET** `/v3/xlm/account/{account}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetAccountInfo(
    string $account
): \Tatum\Model\XlmAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XlmAccount**](../../Model/XlmAccount)

### Description

Get XLM Account info

<h4>5 credits per API call.</h4>

Get XLM Account detail.

[Back to top](#top)



## `xlmGetAccountTx()`

### Example

[👉 View "**xlmGetAccountTx.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetAccountTx.php)

### Request

> **GET** `/v3/xlm/account/tx/{account}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetAccountTx(
    string $account,
    [ string $pagination ]
): \Tatum\Model\XlmTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Address of XLM account. |
 **$pagination** | **string**  | Paging token from the last transaction gives you next page | [optional]

### Return type

[**\Tatum\Model\XlmTx[]**](../../Model/XlmTx)

### Description

Get XLM Account transactions

<h4>5 credits per API call.</h4>

List all XLM account transactions.

[Back to top](#top)



## `xlmGetFee()`

### Example

[👉 View "**xlmGetFee.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetFee.php)

### Request

> **GET** `/v3/xlm/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetFee(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get actual XLM fee

<h4>5 credits per API call.</h4>

Get XLM Blockchain fee in 1/10000000 of XLM (stroop)

[Back to top](#top)



## `xlmGetLastClosedLedger()`

### Example

[👉 View "**xlmGetLastClosedLedger.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLastClosedLedger.php)

### Request

> **GET** `/v3/xlm/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetLastClosedLedger(): \Tatum\Model\XlmLedger
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmLedger**](../../Model/XlmLedger)

### Description

Get XLM Blockchain Information

<h4>5 credits per API call.</h4>

Get XLM Blockchain last closed ledger.

[Back to top](#top)



## `xlmGetLedger()`

### Example

[👉 View "**xlmGetLedger.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLedger.php)

### Request

> **GET** `/v3/xlm/ledger/{sequence}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetLedger(
    string $sequence
): \Tatum\Model\XlmLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**  | Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmLedger**](../../Model/XlmLedger)

### Description

Get XLM Blockchain Ledger by sequence

<h4>5 credits per API call.</h4>

Get XLM Blockchain ledger for ledger sequence.

[Back to top](#top)



## `xlmGetLedgerTx()`

### Example

[👉 View "**xlmGetLedgerTx.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLedgerTx.php)

### Request

> **GET** `/v3/xlm/ledger/{sequence}/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetLedgerTx(
    string $sequence
): \Tatum\Model\XlmTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**  | Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmTx[]**](../../Model/XlmTx)

### Description

Get XLM Blockchain Transactions in Ledger

<h4>5 credits per API call.</h4>

Get XLM Blockchain transactions in the ledger.

[Back to top](#top)



## `xlmGetTransaction()`

### Example

[👉 View "**xlmGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetTransaction.php)

### Request

> **GET** `/v3/xlm/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetTransaction(
    string $hash
): \Tatum\Model\XlmTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XlmTx**](../../Model/XlmTx)

### Description

Get XLM Transaction by hash

<h4>5 credits per API call.</h4>

Get XLM Transaction by transaction hash.

[Back to top](#top)



## `xlmWallet()`

### Example

[👉 View "**xlmWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmWallet.php)

### Request

> **GET** `/v3/xlm/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmWallet(): \Tatum\Model\XlmWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmWallet**](../../Model/XlmWallet)

### Description

Generate XLM account

<h4>5 credits per API call.</h4>

 Generate XLM account. Tatum does not support HD wallet for XLM, only specific address and private key can be generated.

[Back to top](#top)

