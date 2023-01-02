# Tatum/Api/AlgorandApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**algoNodeGetDriver()**](#algonodegetdriver) | **GET** [/v3/algorand/node/algod/{xApiKey}/{algodPath}](https://apidoc.tatum.io/tag/Algorand#operation/AlgoNodeGetDriver) | Access Algorand Algod GET node endpoints
[**algoNodeIndexerGetDriver()**](#algonodeindexergetdriver) | **GET** [/v3/algorand/node/indexer/{xApiKey}/{indexerPath}](https://apidoc.tatum.io/tag/Algorand#operation/AlgoNodeIndexerGetDriver) | Access Algorand Indexer GET node endpoints
[**algoNodePostDriver()**](#algonodepostdriver) | **POST** [/v3/algorand/node/algod/{xApiKey}/{algodPath}](https://apidoc.tatum.io/tag/Algorand#operation/AlgoNodePostDriver) | Access Algorand Algod POST node endpoints
[**algoandBroadcast()**](#algoandbroadcast) | **POST** [/v3/algorand/broadcast](https://apidoc.tatum.io/tag/Algorand#operation/AlgoandBroadcast) | Broadcast signed Algorand transaction
[**algorandBlockchainReceiveAsset()**](#algorandblockchainreceiveasset) | **POST** [/v3/algorand/asset/receive](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset) | Enable receiving asset on account
[**algorandBlockchainTransfer()**](#algorandblockchaintransfer) | **POST** [/v3/algorand/transaction](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainTransfer) | Send Algos to an Algorand account
[**algorandGenerateAddress()**](#algorandgenerateaddress) | **GET** [/v3/algorand/address/{priv}](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGenerateAddress) | Generate Algorand account address from private key
[**algorandGenerateWallet()**](#algorandgeneratewallet) | **GET** [/v3/algorand/wallet](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGenerateWallet) | Generate Algorand wallet
[**algorandGetBalance()**](#algorandgetbalance) | **GET** [/v3/algorand/account/balance/{address}](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGetBalance) | Get Algorand Account balance
[**algorandGetBlock()**](#algorandgetblock) | **GET** [/v3/algorand/block/{roundNumber}](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGetBlock) | Get Algorand block by block round number
[**algorandGetCurrentBlock()**](#algorandgetcurrentblock) | **GET** [/v3/algorand/block/current](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGetCurrentBlock) | Get current block number
[**algorandGetPayTransactionsByFromTo()**](#algorandgetpaytransactionsbyfromto) | **GET** [/v3/algorand/transactions/{from}/{to}](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGetPayTransactionsByFromTo) | Get Algorand Transactions between from and to
[**algorandGetTransaction()**](#algorandgettransaction) | **GET** [/v3/algorand/transaction/{txid}](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGetTransaction) | Get Algorand Transaction


## `algoNodeGetDriver()`

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

<p><b>1 credit per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum. You can check al available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/</a>. <br/> Example call for Get Block is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/#get-v2blocksround" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/#get-v2blocksround</a>. <br/> URL used for this call would be <pre>https://api.tatum.io/v3/algorand/node/algod/YOUR_API_KEY/v2/blocks/16775567</pre> </p>

### Example

[✨ View "algoNodeGetDriver.php"](../../examples/Api/AlgorandApi/algoNodeGetDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algoNodeIndexerGetDriver()`

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

<p><b>1 credit per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum. You can check all available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/indexer/" target="_blank">https://developer.algorand.org/docs/rest-apis/indexer/</a>. <br/> Example call for Get Tx By ID is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/indexer/#get-v2transactionstxid" target="_blank">https://developer.algorand.org/docs/rest-apis/indexer/#get-v2transactionstxid</a>. <br/> URL used for this call would be <pre>https://api.tatum.io/v3/algorand/node/indexer/YOUR_API_KEY/v2/transactions/HNIQ76UTJYPOLZP5FWODYABBJPYPGJNEM2QEJSMDMQRWEKHEYJHQ</pre></p>

### Example

[✨ View "algoNodeIndexerGetDriver.php"](../../examples/Api/AlgorandApi/algoNodeIndexerGetDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algoNodePostDriver()`

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

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum.  You can check al available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/</a>.  <br/>  Example call for Broadcast a raw transaction is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions</a>.  <br/>  URL used for this call would be <pre>https://api.tatum.io/v3/algorand/node/algod/YOUR_API_KEY/v2/transactions</pre>  </p>

### Example

[✨ View "algoNodePostDriver.php"](../../examples/Api/AlgorandApi/algoNodePostDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algoandBroadcast()`

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

<h4>2 credits per API call.</h4><br/> <p>Broadcast signed transaction to Algorand blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "algoandBroadcast.php"](../../examples/Api/AlgorandApi/algoandBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandBlockchainReceiveAsset()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandBlockchainReceiveAsset(
    \Tatum\Model\AlgorandBlockchainReceiveAssetRequest $algorand_blockchain_receive_asset_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$algorand_blockchain_receive_asset_request** | [**\Tatum\Model\AlgorandBlockchainReceiveAssetRequest**](../Model/AlgorandBlockchainReceiveAssetRequest.md) |  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Enable receiving asset on account

<h4>2 credits per API call.</h4><br/> <p>Enable accepting Algorand asset on the sender account.<br/><br/> This operation needs the private key of the blockchain address. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "algorandBlockchainReceiveAsset.php"](../../examples/Api/AlgorandApi/algorandBlockchainReceiveAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->algorand()->algorandBlockchainTransfer(
    \Tatum\Model\AlgorandBlockchainTransferRequest $algorand_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$algorand_blockchain_transfer_request** | [**\Tatum\Model\AlgorandBlockchainTransferRequest**](../Model/AlgorandBlockchainTransferRequest.md) |  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send Algos to an Algorand account

<p><b>2 credits per API call</b></p> <p>Send Algos from one Algorand address to the other one.</p> <p><b>Signing a transaction</b></p> <p>When sending Algos, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "algorandBlockchainTransfer.php"](../../examples/Api/AlgorandApi/algorandBlockchainTransfer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandGenerateAddress()`

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

<h4>1 credit per API call.</h4><br/> <p>Generate Algorand account deposit address from private key.</p>

### Example

[✨ View "algorandGenerateAddress.php"](../../examples/Api/AlgorandApi/algorandGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandGenerateWallet()`

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

<h4>1 credit per API call.</h4><br/><p>Tatum supports Algorand wallets.</p>

### Example

[✨ View "algorandGenerateWallet.php"](../../examples/Api/AlgorandApi/algorandGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandGetBalance()`

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

<h4>1 credit per API call.</h4><br/> <p>Get Algorand account balance in ALGO.</p>

### Example

[✨ View "algorandGetBalance.php"](../../examples/Api/AlgorandApi/algorandGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandGetBlock()`

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

<h4>1 credit per API call.</h4><br/><p>Get Algorand block by block round number.</p>

### Example

[✨ View "algorandGetBlock.php"](../../examples/Api/AlgorandApi/algorandGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandGetCurrentBlock()`

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

<h4>1 credit per API call.</h4><br/><p>Get Algorand current block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "algorandGetCurrentBlock.php"](../../examples/Api/AlgorandApi/algorandGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandGetPayTransactionsByFromTo()`

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

<p><b>1 credit per API call</b></p> <p><b>This endpoint is deprecated.</b></p><br/> <p>Get Algorand transaction by specified period of time.</p>

### Example

[✨ View "algorandGetPayTransactionsByFromTo.php"](../../examples/Api/AlgorandApi/algorandGetPayTransactionsByFromTo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algorandGetTransaction()`

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

<h4>1 credit per API call.</h4><br/><p>Get Algorand transaction by transaction id.</p>

### Example

[✨ View "algorandGetTransaction.php"](../../examples/Api/AlgorandApi/algorandGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
