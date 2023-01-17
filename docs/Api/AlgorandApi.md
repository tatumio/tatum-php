---
title: Algorand
parent: API
layout: page
---

# Api/AlgorandApi

## References

[Algorand API documentation](https://apidoc.tatum.io/tag/Algorand/)

## Methods

Method | Description
------------- | -------------
[**algoNodeGetDriver()**](#algonodegetdriver) | Access Algorand Algod GET node endpoints
[**algoNodeIndexerGetDriver()**](#algonodeindexergetdriver) | Access Algorand Indexer GET node endpoints
[**algoNodePostDriver()**](#algonodepostdriver) | Access Algorand Algod POST node endpoints
[**algoandBroadcast()**](#algoandbroadcast) | Broadcast signed Algorand transaction
[**algorandGenerateAddress()**](#algorandgenerateaddress) | Generate Algorand account address from private key
[**algorandGenerateWallet()**](#algorandgeneratewallet) | Generate Algorand wallet
[**algorandGetBalance()**](#algorandgetbalance) | Get Algorand Account balance
[**algorandGetBlock()**](#algorandgetblock) | Get Algorand block by block round number
[**algorandGetCurrentBlock()**](#algorandgetcurrentblock) | Get current block number
[**algorandGetPayTransactionsByFromTo()**](#algorandgetpaytransactionsbyfromto) | Get Algorand Transactions between from and to
[**algorandGetTransaction()**](#algorandgettransaction) | Get Algorand Transaction
[**receiveAlgorandAsset()**](#receivealgorandasset) | Enable receiving asset on account
[**receiveAlgorandAssetKMS()**](#receivealgorandassetkms) | Enable receiving asset on account
[**transferAlgorandBlockchain()**](#transferalgorandblockchain) | Send Algos to an Algorand account
[**transferAlgorandBlockchainKMS()**](#transferalgorandblockchainkms) | Send Algos to an Algorand account


## `algoNodeGetDriver()`

> **GET** `/v3/algorand/node/algod/{xApiKey}/{algodPath}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algoNodeGetDriver(
    string $x_api_key,
    string $algod_path
): \Tatum\Model\AlgoBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$algod_path** | **string**  | &#x60;**&#x60; path of algod. |

### Return type

[**\Tatum\Model\AlgoBlock**](../Model/AlgoBlock.md)

### Description

Access Algorand Algod GET node endpoints

**1 credit per API call**

 **This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.**

 Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum. You can check al available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/</a>. 

 Example call for Get Block is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/#get-v2blocksround" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/#get-v2blocksround</a>. 

 URL used for this call would be `https://api.tatum.io/v3/algorand/node/algod/YOUR_API_KEY/v2/blocks/16775567`

### Example

[✨ View "algoNodeGetDriver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algoNodeGetDriver.php)

[[Back to top]](#top)



## `algoNodeIndexerGetDriver()`

> **GET** `/v3/algorand/node/indexer/{xApiKey}/{indexerPath}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algoNodeIndexerGetDriver(
    string $x_api_key,
    string $indexer_path
): \Tatum\Model\AlgoTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$indexer_path** | **string**  | &#x60;**&#x60; path of indexer. |

### Return type

[**\Tatum\Model\AlgoTx**](../Model/AlgoTx.md)

### Description

Access Algorand Indexer GET node endpoints

**1 credit per API call**

 **This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.**

 Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum. You can check all available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/indexer/" target="_blank">https://developer.algorand.org/docs/rest-apis/indexer/</a>. 

 Example call for Get Tx By ID is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/indexer/#get-v2transactionstxid" target="_blank">https://developer.algorand.org/docs/rest-apis/indexer/#get-v2transactionstxid</a>. 

 URL used for this call would be `https://api.tatum.io/v3/algorand/node/indexer/YOUR_API_KEY/v2/transactions/HNIQ76UTJYPOLZP5FWODYABBJPYPGJNEM2QEJSMDMQRWEKHEYJHQ`

### Example

[✨ View "algoNodeIndexerGetDriver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algoNodeIndexerGetDriver.php)

[[Back to top]](#top)



## `algoNodePostDriver()`

> **POST** `/v3/algorand/node/algod/{xApiKey}/{algodPath}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algoNodePostDriver(
    string $x_api_key,
    string $algod_path,
    \Tatum\Model\AlgoNodePostDriverRequest $algo_node_post_driver_request
): \Tatum\Model\AlgoNodePostDriver200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$algod_path** | **string**  | &#x60;**&#x60; path of algod. |
 **$algo_node_post_driver_request** | [**\Tatum\Model\AlgoNodePostDriverRequest**](../Model/AlgoNodePostDriverRequest.md) |  |

### Return type

[**\Tatum\Model\AlgoNodePostDriver200Response**](../Model/AlgoNodePostDriver200Response.md)

### Description

Access Algorand Algod POST node endpoints

**2 credits per API call**

 **This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.**

 Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum. You can check al available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/</a>. 

 Example call for Broadcast a raw transaction is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions</a>. 

 URL used for this call would be `https://api.tatum.io/v3/algorand/node/algod/YOUR_API_KEY/v2/transactions`

### Example

[✨ View "algoNodePostDriver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algoNodePostDriver.php)

[[Back to top]](#top)



## `algoandBroadcast()`

> **POST** `/v3/algorand/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algoandBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\AlgoTransactionHashKMS
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |

### Return type

[**\Tatum\Model\AlgoTransactionHashKMS**](../Model/AlgoTransactionHashKMS.md)

### Description

Broadcast signed Algorand transaction

<h4>2 credits per API call.</h4>

 Broadcast signed transaction to Algorand blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

### Example

[✨ View "algoandBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algoandBroadcast.php)

[[Back to top]](#top)



## `algorandGenerateAddress()`

> **GET** `/v3/algorand/address/{priv}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandGenerateAddress(
    string $priv
): \Tatum\Model\AlgorandGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv** | **string**  | private key of wallet. |

### Return type

[**\Tatum\Model\AlgorandGenerateAddress200Response**](../Model/AlgorandGenerateAddress200Response.md)

### Description

Generate Algorand account address from private key

<h4>1 credit per API call.</h4>

 Generate Algorand account deposit address from private key.

### Example

[✨ View "algorandGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGenerateAddress.php)

[[Back to top]](#top)



## `algorandGenerateWallet()`

> **GET** `/v3/algorand/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\AlgoWallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\AlgoWallet**](../Model/AlgoWallet.md)

### Description

Generate Algorand wallet

<h4>1 credit per API call.</h4>

Tatum supports Algorand wallets.

### Example

[✨ View "algorandGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGenerateWallet.php)

[[Back to top]](#top)



## `algorandGetBalance()`

> **GET** `/v3/algorand/account/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandGetBalance(
    string $address
): \Tatum\Model\AlgorandGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\AlgorandGetBalance200Response**](../Model/AlgorandGetBalance200Response.md)

### Description

Get Algorand Account balance

<h4>1 credit per API call.</h4>

 Get Algorand account balance in ALGO.

### Example

[✨ View "algorandGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetBalance.php)

[[Back to top]](#top)



## `algorandGetBlock()`

> **GET** `/v3/algorand/block/{roundNumber}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandGetBlock(
    float $round_number
): \Tatum\Model\AlgoBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$round_number** | **float**  | Block round number |

### Return type

[**\Tatum\Model\AlgoBlock**](../Model/AlgoBlock.md)

### Description

Get Algorand block by block round number

<h4>1 credit per API call.</h4>

Get Algorand block by block round number.

### Example

[✨ View "algorandGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetBlock.php)

[[Back to top]](#top)



## `algorandGetCurrentBlock()`

> **GET** `/v3/algorand/block/current`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandGetCurrentBlock(
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

[[Back to top]](#top)



## `algorandGetPayTransactionsByFromTo()`

> **GET** `/v3/algorand/transactions/{from}/{to}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandGetPayTransactionsByFromTo(
    string $from,
    string $to,
    [ string $limit, ]
    [ string $next ]
): \Tatum\Model\AlgoTxsWithPagination
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$from** | **string**  | Start timestamp in specified period of time |
 **$to** | **string**  | End timestamp in specified period of time |
 **$limit** | **string**  | page size for pagination | [optional]
 **$next** | **string**  | Algorand Next Token for getting the next page results | [optional]

### Return type

[**\Tatum\Model\AlgoTxsWithPagination**](../Model/AlgoTxsWithPagination.md)

### Description

Get Algorand Transactions between from and to

**1 credit per API call**

 **This endpoint is deprecated.**

 Get Algorand transaction by specified period of time.

### Example

[✨ View "algorandGetPayTransactionsByFromTo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetPayTransactionsByFromTo.php)

[[Back to top]](#top)



## `algorandGetTransaction()`

> **GET** `/v3/algorand/transaction/{txid}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandGetTransaction(
    string $txid
): \Tatum\Model\AlgoTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$txid** | **string**  | Transaction id |

### Return type

[**\Tatum\Model\AlgoTx**](../Model/AlgoTx.md)

### Description

Get Algorand Transaction

<h4>1 credit per API call.</h4>

Get Algorand transaction by transaction id.

### Example

[✨ View "algorandGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/algorandGetTransaction.php)

[[Back to top]](#top)



## `receiveAlgorandAsset()`

> **POST** `/v3/algorand/asset/receive`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->receiveAlgorandAsset(
    \Tatum\Model\ReceiveAlgorandAsset $receive_algorand_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$receive_algorand_asset** | [**\Tatum\Model\ReceiveAlgorandAsset**](../Model/ReceiveAlgorandAsset.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Enable receiving asset on account

<h4>2 credits per API call.</h4>

 Enable accepting Algorand asset on the sender account.

 This operation needs the private key of the blockchain address. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "receiveAlgorandAsset.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/receiveAlgorandAsset.php)

[[Back to top]](#top)



## `receiveAlgorandAssetKMS()`

> **POST** `/v3/algorand/asset/receive`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->receiveAlgorandAssetKMS(
    \Tatum\Model\ReceiveAlgorandAssetKMS $receive_algorand_asset_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$receive_algorand_asset_kms** | [**\Tatum\Model\ReceiveAlgorandAssetKMS**](../Model/ReceiveAlgorandAssetKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Enable receiving asset on account

ReceiveAlgorandAssetKMS operation

### Example

[✨ View "receiveAlgorandAssetKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/receiveAlgorandAssetKMS.php)

[[Back to top]](#top)



## `transferAlgorandBlockchain()`

> **POST** `/v3/algorand/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->transferAlgorandBlockchain(
    \Tatum\Model\TransferAlgorandBlockchain $transfer_algorand_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algorand_blockchain** | [**\Tatum\Model\TransferAlgorandBlockchain**](../Model/TransferAlgorandBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

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

[[Back to top]](#top)



## `transferAlgorandBlockchainKMS()`

> **POST** `/v3/algorand/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->transferAlgorandBlockchainKMS(
    \Tatum\Model\TransferAlgorandBlockchainKMS $transfer_algorand_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algorand_blockchain_kms** | [**\Tatum\Model\TransferAlgorandBlockchainKMS**](../Model/TransferAlgorandBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Algos to an Algorand account

TransferAlgorandBlockchainKMS operation

### Example

[✨ View "transferAlgorandBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AlgorandApi/transferAlgorandBlockchainKMS.php)

[[Back to top]](#top)

