# Tatum/Api/ElrondApi

## References

[Elrond API documentation](https://apidoc.tatum.io/tag/Elrond/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **eGldGetCurrentBlock()**](#egldgetcurrentblock) 

> **GET** `/v3/egld/block/current`
> 
> Get current block number

[🔹 **egldBroadcast()**](#egldbroadcast) 

> **POST** `/v3/egld/broadcast`
> 
> Broadcast signed EGLD transaction

[🔹 **egldGenerateAddress()**](#egldgenerateaddress) 

> **GET** `/v3/egld/address/{mnemonic}/{index}`
> 
> Generate EGLD account address from mnemonic

[🔹 **egldGenerateAddressPrivateKey()**](#egldgenerateaddressprivatekey) 

> **POST** `/v3/egld/wallet/priv`
> 
> Generate EGLD private key

[🔹 **egldGenerateWallet()**](#egldgeneratewallet) 

> **GET** `/v3/egld/wallet`
> 
> Generate EGLD wallet

[🔹 **egldGetBalance()**](#egldgetbalance) 

> **GET** `/v3/egld/account/balance/{address}`
> 
> Get EGLD Account balance

[🔹 **egldGetBlock()**](#egldgetblock) 

> **GET** `/v3/egld/block/{hash}`
> 
> Get EGLD block by hash

[🔹 **egldGetTransaction()**](#egldgettransaction) 

> **GET** `/v3/egld/transaction/{hash}`
> 
> Get EGLD Transaction

[🔹 **egldGetTransactionAddress()**](#egldgettransactionaddress) 

> **GET** `/v3/egld/transaction/address/{address}`
> 
> Get count of outgoing EGLD transactions

[🔹 **egldGetTransactionCount()**](#egldgettransactioncount) 

> **GET** `/v3/egld/transaction/count/{address}`
> 
> Get count of outgoing EGLD transactions

[🔹 **egldNodeGet()**](#egldnodeget) 

> **GET** `/v3/egld/node/{xApiKey}/*`
> 
> Node HTTP driver

[🔹 **egldNodePost()**](#egldnodepost) 

> **POST** `/v3/egld/node/{xApiKey}/*`
> 
> Node HTTP driver

[🔹 **transferEgldBlockchain()**](#transferegldblockchain) 

> **POST** `/v3/egld/transaction`
> 
> Send EGLD from account to account

[🔹 **transferEgldBlockchainKMS()**](#transferegldblockchainkms) 

> **POST** `/v3/egld/transaction`
> 
> Send EGLD from account to account



## `eGldGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->eGldGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<h4>1 credit per API call.</h4><br/> <p>Get EGLD current block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "eGldGetCurrentBlock.php"](../../examples/Api/ElrondApi/eGldGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed EGLD transaction

<h4>2 credits per API call.</h4><br/> <p>Broadcast signed transaction to EGLD blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "egldBroadcast.php"](../../examples/Api/ElrondApi/egldBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGenerateAddress(
    string $mnemonic,
    float $index
): \Tatum\Model\EgldGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of address. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\EgldGenerateAddress200Response**](../Model/EgldGenerateAddress200Response.md)

### Description

Generate EGLD account address from mnemonic

<h4>1 credit per API call.</h4><br/> <p>Generate EGLD account deposit address from mnemonic phrase. Deposit address is generated for the specific index - each mnemonic phrase can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

[✨ View "egldGenerateAddress.php"](../../examples/Api/ElrondApi/egldGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md) |  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

### Description

Generate EGLD private key

<h4>1 credit per API call.</h4><br/> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

[✨ View "egldGenerateAddressPrivateKey.php"](../../examples/Api/ElrondApi/egldGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\EgldGenerateWallet200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of private key. | [optional]

### Return type

[**\Tatum\Model\EgldGenerateWallet200Response**](../Model/EgldGenerateWallet200Response.md)

### Description

Generate EGLD wallet

<h4>1 credit per API call.</h4><br/> <p>The Elrond Address format is bech32, specified by the BIP 0173. The address always starts with an erd1. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. <br/> Each address is identified by 3 main values: <ul><li>Private Key - your secret value, which should never be revealed</li> <li>Public Key - public address to be published</li> <li>Derivation index - index of generated address</li></ul> </p> <p>Tatum follows BIP44 specification and generates for EGLD wallet with derivation path m'/44'/508'/0'/0'. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible EGLD wallet.</p>

### Example

[✨ View "egldGenerateWallet.php"](../../examples/Api/ElrondApi/egldGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetBalance(
    string $address
): \Tatum\Model\EgldGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\EgldGetBalance200Response**](../Model/EgldGetBalance200Response.md)

### Description

Get EGLD Account balance

<h4>1 credit per API call.</h4><br/> <p>Get account balance in EGLD.</p>

### Example

[✨ View "egldGetBalance.php"](../../examples/Api/ElrondApi/egldGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetBlock(
    string $hash
): \Tatum\Model\EgldBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or nonce |

### Return type

[**\Tatum\Model\EgldBlock**](../Model/EgldBlock.md)

### Description

Get EGLD block by hash

<h4>1 credit per API call.</h4><br/> <p>Get EGLD block by block hash or block number. <a href='https://docs.elrond.com/sdk-and-tools/rest-api/blocks/' target='_blank'> EGLD docs </a></p>

### Example

[✨ View "egldGetBlock.php"](../../examples/Api/ElrondApi/egldGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetTransaction(
    string $hash
): \Tatum\Model\EgldTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\EgldTx**](../Model/EgldTx.md)

### Description

Get EGLD Transaction

<h4>1 credit per API call.</h4><br/> <p>Get EGLD transaction by transaction hash. Detail result please find here <a href='https://docs.elrond.com/sdk-and-tools/rest-api/transactions/#get-transaction' target='_blank'> EGLD docs </a></p>

### Example

[✨ View "egldGetTransaction.php"](../../examples/Api/ElrondApi/egldGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetTransactionAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetTransactionAddress(
    string $address
): object[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | address |

### Return type

**object[]**

### Description

Get count of outgoing EGLD transactions

<h4>1 credit per API call.</h4><br/> <p>This endpoint allows one to retrieve the latest 20 transactions sent from an address.</p>

### Example

[✨ View "egldGetTransactionAddress.php"](../../examples/Api/ElrondApi/egldGetTransactionAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetTransactionCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetTransactionCount(
    string $address
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | address |

### Return type

**float**

### Description

Get count of outgoing EGLD transactions

<h4>1 credit per API call.</h4><br/> <p>Get a number of outgoing EGLD transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

[✨ View "egldGetTransactionCount.php"](../../examples/Api/ElrondApi/egldGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldNodeGet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldNodeGet(
    string $x_api_key
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |

### Return type

**object**

### Description

Node HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based driver to connect directly to the EGLD node provided by Tatum. To learn more about EGLD, visit the <a href="https://docs.elrond.com/sdk-and-tools/rest-api/nodes/" target="_blank">EGLD developer's guide</a>.</p>

### Example

[✨ View "egldNodeGet.php"](../../examples/Api/ElrondApi/egldNodeGet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldNodePost()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldNodePost(
    string $x_api_key,
    object $body
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$body** | **object**  |  |

### Return type

**object**

### Description

Node HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based driver to connect directly to the EGLD node provided by Tatum. To learn more about EGLD, visit the <a href="https://docs.elrond.com/sdk-and-tools/rest-api/nodes/" target="_blank">EGLD developer's guide</a>.</p>

### Example

[✨ View "egldNodePost.php"](../../examples/Api/ElrondApi/egldNodePost.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferEgldBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->transferEgldBlockchain(
    \Tatum\Model\TransferEgldBlockchain $transfer_egld_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_egld_blockchain** | [**\Tatum\Model\TransferEgldBlockchain**](../Model/TransferEgldBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send EGLD from account to account

<h4>2 credits per API call.</h4><br/> <p>Send EGLD from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on devnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "transferEgldBlockchain.php"](../../examples/Api/ElrondApi/transferEgldBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferEgldBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->transferEgldBlockchainKMS(
    \Tatum\Model\TransferEgldBlockchainKMS $transfer_egld_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_egld_blockchain_kms** | [**\Tatum\Model\TransferEgldBlockchainKMS**](../Model/TransferEgldBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send EGLD from account to account

TransferEgldBlockchainKMS operation

### Example

[✨ View "transferEgldBlockchainKMS.php"](../../examples/Api/ElrondApi/transferEgldBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
