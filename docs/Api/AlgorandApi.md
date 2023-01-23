---
title: Algorand
parent: API
layout: page
---

# Api/AlgorandApi

[Algorand API Reference](https://apidoc.tatum.io/tag/Algorand/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->algorand();

// TestNet API Call
$sdk->testnet()->api()->algorand();
```

## Methods

Method | Description
------------- | -------------
[**algoandBroadcast()**](#algoandbroadcast) | Broadcast signed Algorand transaction
[**algorandGenerateAddress()**](#algorandgenerateaddress) | Generate Algorand account address from private key
[**algorandGenerateWallet()**](#algorandgeneratewallet) | Generate Algorand wallet
[**algorandGetBalance()**](#algorandgetbalance) | Get Algorand Account balance
[**algorandGetBlock()**](#algorandgetblock) | Get Algorand block by block round number
[**algorandGetCurrentBlock()**](#algorandgetcurrentblock) | Get current block number
[**algorandGetTransaction()**](#algorandgettransaction) | Get Algorand Transaction
[**receiveAlgorandAsset()**](#receivealgorandasset) | Enable receiving asset on account
[**receiveAlgorandAssetKMS()**](#receivealgorandassetkms) | Enable receiving asset on account
[**transferAlgorandBlockchain()**](#transferalgorandblockchain) | Send Algos to an Algorand account
[**transferAlgorandBlockchainKMS()**](#transferalgorandblockchainkms) | Send Algos to an Algorand account


## `algoandBroadcast()`

> **POST** `/v3/algorand/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->algoandBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\AlgoTransactionHashKMS
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../../Model/BroadcastKMS) |  |

### Return type

[**\Tatum\Model\AlgoTransactionHashKMS**](../../Model/AlgoTransactionHashKMS)

### Description

Broadcast signed Algorand transaction

<h4>2 credits per API call.</h4>

 Broadcast signed transaction to Algorand blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

### Example

[✨ View "algoandBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algoandBroadcast.php)

[Back to top](#top)



## `algorandGenerateAddress()`

> **GET** `/v3/algorand/address/{priv}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->algorandGenerateAddress(
    string $priv
): \Tatum\Model\AlgorandGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv** | **string**  | private key of wallet. |

### Return type

[**\Tatum\Model\AlgorandGenerateAddress200Response**](../../Model/AlgorandGenerateAddress200Response)

### Description

Generate Algorand account address from private key

<h4>1 credit per API call.</h4>

 Generate Algorand account deposit address from private key.

### Example

[✨ View "algorandGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGenerateAddress.php)

[Back to top](#top)



## `algorandGenerateWallet()`

> **GET** `/v3/algorand/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->algorandGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\AlgoWallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\AlgoWallet**](../../Model/AlgoWallet)

### Description

Generate Algorand wallet

<h4>1 credit per API call.</h4>

Tatum supports Algorand wallets.

### Example

[✨ View "algorandGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGenerateWallet.php)

[Back to top](#top)



## `algorandGetBalance()`

> **GET** `/v3/algorand/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->algorandGetBalance(
    string $address
): \Tatum\Model\AlgorandGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\AlgorandGetBalance200Response**](../../Model/AlgorandGetBalance200Response)

### Description

Get Algorand Account balance

<h4>1 credit per API call.</h4>

 Get Algorand account balance in ALGO.

### Example

[✨ View "algorandGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetBalance.php)

[Back to top](#top)



## `algorandGetBlock()`

> **GET** `/v3/algorand/block/{roundNumber}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->algorandGetBlock(
    float $round_number
): \Tatum\Model\AlgoBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$round_number** | **float**  | Block round number |

### Return type

[**\Tatum\Model\AlgoBlock**](../../Model/AlgoBlock)

### Description

Get Algorand block by block round number

<h4>1 credit per API call.</h4>

Get Algorand block by block round number.

### Example

[✨ View "algorandGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetBlock.php)

[Back to top](#top)



## `algorandGetCurrentBlock()`

> **GET** `/v3/algorand/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->algorandGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<h4>1 credit per API call.</h4>

Get Algorand current block number. This is the number of the latest block in the blockchain.

### Example

[✨ View "algorandGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetCurrentBlock.php)

[Back to top](#top)



## `algorandGetTransaction()`

> **GET** `/v3/algorand/transaction/{txid}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->algorandGetTransaction(
    string $txid
): \Tatum\Model\AlgoTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$txid** | **string**  | Transaction id |

### Return type

[**\Tatum\Model\AlgoTx**](../../Model/AlgoTx)

### Description

Get Algorand Transaction

<h4>1 credit per API call.</h4>

Get Algorand transaction by transaction id.

### Example

[✨ View "algorandGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetTransaction.php)

[Back to top](#top)



## `receiveAlgorandAsset()`

> **POST** `/v3/algorand/asset/receive`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->receiveAlgorandAsset(
    \Tatum\Model\ReceiveAlgorandAsset $receive_algorand_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$receive_algorand_asset** | [**\Tatum\Model\ReceiveAlgorandAsset**](../../Model/ReceiveAlgorandAsset) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Enable receiving asset on account

<h4>2 credits per API call.</h4>

 Enable accepting Algorand asset on the sender account.

 This operation needs the private key of the blockchain address. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "receiveAlgorandAsset.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/receiveAlgorandAsset.php)

[Back to top](#top)



## `receiveAlgorandAssetKMS()`

> **POST** `/v3/algorand/asset/receive`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->receiveAlgorandAssetKMS(
    \Tatum\Model\ReceiveAlgorandAssetKMS $receive_algorand_asset_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$receive_algorand_asset_kms** | [**\Tatum\Model\ReceiveAlgorandAssetKMS**](../../Model/ReceiveAlgorandAssetKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Enable receiving asset on account

ReceiveAlgorandAssetKMS operation

### Example

[✨ View "receiveAlgorandAssetKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/receiveAlgorandAssetKMS.php)

[Back to top](#top)



## `transferAlgorandBlockchain()`

> **POST** `/v3/algorand/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->transferAlgorandBlockchain(
    \Tatum\Model\TransferAlgorandBlockchain $transfer_algorand_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algorand_blockchain** | [**\Tatum\Model\TransferAlgorandBlockchain**](../../Model/TransferAlgorandBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send Algos to an Algorand account

**2 credits per API call**

 Send Algos from one Algorand address to the other one.

 **Signing a transaction**

 When sending Algos, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "transferAlgorandBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/transferAlgorandBlockchain.php)

[Back to top](#top)



## `transferAlgorandBlockchainKMS()`

> **POST** `/v3/algorand/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->algorand()->transferAlgorandBlockchainKMS(
    \Tatum\Model\TransferAlgorandBlockchainKMS $transfer_algorand_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algorand_blockchain_kms** | [**\Tatum\Model\TransferAlgorandBlockchainKMS**](../../Model/TransferAlgorandBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send Algos to an Algorand account

TransferAlgorandBlockchainKMS operation

### Example

[✨ View "transferAlgorandBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/transferAlgorandBlockchainKMS.php)

[Back to top](#top)

