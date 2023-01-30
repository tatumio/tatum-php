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

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bnbBroadcast.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbBroadcast.php){: .btn .btn-green .mt-4}

### Request

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

> Broadcast signed BNB transaction

#### 5 credits per API call.

Broadcast signed transaction to Binance blockchain. This method is used internally or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `bnbGenerateWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bnbGenerateWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGenerateWallet.php){: .btn .btn-green .mt-4}

### Request

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

> Generate Binance wallet

#### 5 credits per API call.

Generate BNB account. Tatum does not support HD wallet for BNB, only specific address and private key can be generated.

[Back to top](#top){: .btn .btn-purple }

---


## `bnbGetAccount()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bnbGetAccount.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetAccount.php){: .btn .btn-green .mt-4}

### Request

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

> Get Binance Account

#### 5 credits per API call.

Get Binance Account Detail by address.

[Back to top](#top){: .btn .btn-purple }

---


## `bnbGetBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bnbGetBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetBlock.php){: .btn .btn-green .mt-4}

### Request

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

> Get Binance Transactions in Block

#### 5 credits per API call.

Get Transactions in block by block height.

[Back to top](#top){: .btn .btn-purple }

---


## `bnbGetCurrentBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bnbGetCurrentBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetCurrentBlock.php){: .btn .btn-green .mt-4}

### Request

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

> Get Binance current block

#### 5 credits per API call.

Get Binance current block number.

[Back to top](#top){: .btn .btn-purple }

---


## `bnbGetTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bnbGetTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetTransaction.php){: .btn .btn-green .mt-4}

### Request

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

> Get Binance Transaction

#### 5 credits per API call.

Get Binance Transaction by transaction hash.

[Back to top](#top){: .btn .btn-purple }

---


## `bnbGetTxByAccount()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bnbGetTxByAccount.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/bnbGetTxByAccount.php){: .btn .btn-green .mt-4}

### Request

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

> Get Binance Transactions By Address

#### 5 credits per API call.

Get Binance Transactions by address.

[Back to top](#top){: .btn .btn-purple }

---


## `transferBnbBlockchain()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferBnbBlockchain.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/transferBnbBlockchain.php){: .btn .btn-green .mt-4}

### Request

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

> Send Binance / Binance Token from account to account

#### 10 credits per API call.

Send Binance or Binance Token token from account to account. This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `transferBnbBlockchainKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferBnbBlockchainKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBBeaconChainApi/transferBnbBlockchainKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Send Binance / Binance Token from account to account



[Back to top](#top){: .btn .btn-purple }

---
