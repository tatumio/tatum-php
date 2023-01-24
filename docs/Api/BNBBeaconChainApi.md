---
title: BNB Beacon Chain
parent: API
layout: page
---

# Api/BNBBeaconChainApi

[BNB Beacon Chain API Reference](https://apidoc.tatum.io/tag/BNB-Beacon-Chain/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->bNBBeaconChain();

// TestNet API Call
$sdk->testnet()->api()->bNBBeaconChain();
```

## Methods

Method | Description
------------- | -------------
[**bnbBroadcast()**](#bnbbroadcast) | Broadcast signed BNB transaction
[**bnbGenerateWallet()**](#bnbgeneratewallet) | Generate Binance wallet
[**bnbGetAccount()**](#bnbgetaccount) | Get Binance Account
[**bnbGetBlock()**](#bnbgetblock) | Get Binance Transactions in Block
[**bnbGetCurrentBlock()**](#bnbgetcurrentblock) | Get Binance current block
[**bnbGetTransaction()**](#bnbgettransaction) | Get Binance Transaction
[**bnbGetTxByAccount()**](#bnbgettxbyaccount) | Get Binance Transactions By Address
[**transferBnbBlockchain()**](#transferbnbblockchain) | Send Binance / Binance Token from account to account
[**transferBnbBlockchainKMS()**](#transferbnbblockchainkms) | Send Binance / Binance Token from account to account


## `bnbBroadcast()`

> **POST** `/v3/bnb/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbBroadcast(
    \Tatum\Model\Broadcast $broadcast
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast** | [**\Tatum\Model\Broadcast**](../../Model/Broadcast) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Broadcast signed BNB transaction

<h4>5 credits per API call.</h4>

 Broadcast signed transaction to Binance blockchain. This method is used internally or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

### Example

[✨ View "bnbBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbBroadcast.php)

[Back to top](#top)



## `bnbGenerateWallet()`

> **GET** `/v3/bnb/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGenerateWallet(): \Tatum\Model\BnbWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\BnbWallet**](../../Model/BnbWallet)

### Description

Generate Binance wallet

<h4>5 credits per API call.</h4>

 Generate BNB account. Tatum does not support HD wallet for BNB, only specific address and private key can be generated.

### Example

[✨ View "bnbGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGenerateWallet.php)

[Back to top](#top)



## `bnbGetAccount()`

> **GET** `/v3/bnb/account/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetAccount(
    string $address
): \Tatum\Model\BnbAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\BnbAccount**](../../Model/BnbAccount)

### Description

Get Binance Account

<h4>5 credits per API call.</h4>

Get Binance Account Detail by address.

### Example

[✨ View "bnbGetAccount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetAccount.php)

[Back to top](#top)



## `bnbGetBlock()`

> **GET** `/v3/bnb/block/{height}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetBlock(
    float $height
): \Tatum\Model\BnbBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$height** | **float**  | Block height |

### Return type

[**\Tatum\Model\BnbBlock**](../../Model/BnbBlock)

### Description

Get Binance Transactions in Block

<h4>5 credits per API call.</h4>

Get Transactions in block by block height.

### Example

[✨ View "bnbGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetBlock.php)

[Back to top](#top)



## `bnbGetCurrentBlock()`

> **GET** `/v3/bnb/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get Binance current block

<h4>5 credits per API call.</h4>

Get Binance current block number.

### Example

[✨ View "bnbGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetCurrentBlock.php)

[Back to top](#top)



## `bnbGetTransaction()`

> **GET** `/v3/bnb/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetTransaction(
    string $hash
): \Tatum\Model\BnbTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BnbTx**](../../Model/BnbTx)

### Description

Get Binance Transaction

<h4>5 credits per API call.</h4>

Get Binance Transaction by transaction hash.

### Example

[✨ View "bnbGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetTransaction.php)

[Back to top](#top)



## `bnbGetTxByAccount()`

> **GET** `/v3/bnb/account/transaction/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->bnbGetTxByAccount(
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

[**\Tatum\Model\BnbTxInAccount**](../../Model/BnbTxInAccount)

### Description

Get Binance Transactions By Address

<h4>5 credits per API call.</h4>

Get Binance Transactions by address.

### Example

[✨ View "bnbGetTxByAccount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetTxByAccount.php)

[Back to top](#top)



## `transferBnbBlockchain()`

> **POST** `/v3/bnb/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->transferBnbBlockchain(
    \Tatum\Model\TransferBnbBlockchain $transfer_bnb_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bnb_blockchain** | [**\Tatum\Model\TransferBnbBlockchain**](../../Model/TransferBnbBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send Binance / Binance Token from account to account

<h4>10 credits per API call.</h4>

 Send Binance or Binance Token token from account to account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferBnbBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/transferBnbBlockchain.php)

[Back to top](#top)



## `transferBnbBlockchainKMS()`

> **POST** `/v3/bnb/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBBeaconChain()->transferBnbBlockchainKMS(
    \Tatum\Model\TransferBnbBlockchainKMS $transfer_bnb_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bnb_blockchain_kms** | [**\Tatum\Model\TransferBnbBlockchainKMS**](../../Model/TransferBnbBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send Binance / Binance Token from account to account

TransferBnbBlockchainKMS operation

### Example

[✨ View "transferBnbBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/transferBnbBlockchainKMS.php)

[Back to top](#top)

