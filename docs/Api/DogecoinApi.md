---
title: Dogecoin
parent: API
layout: page
---

# Api/DogecoinApi

[Dogecoin API Reference](https://apidoc.tatum.io/tag/Dogecoin/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->dogecoin();

// TestNet API Call
$sdk->testnet()->api()->dogecoin();
```

## Methods

Method | Description
------------- | -------------
[**dogeBroadcast()**](#dogebroadcast) | Broadcast signed Dogecoin transaction
[**dogeGenerateAddress()**](#dogegenerateaddress) | Generate Dogecoin deposit address from Extended public key
[**dogeGenerateAddressPrivateKey()**](#dogegenerateaddressprivatekey) | Generate Dogecoin private key
[**dogeGenerateWallet()**](#dogegeneratewallet) | Generate Dogecoin wallet
[**dogeGetBlock()**](#dogegetblock) | Get Dogecoin Block by hash or height
[**dogeGetBlockChainInfo()**](#dogegetblockchaininfo) | Get Dogecoin Blockchain Information
[**dogeGetBlockHash()**](#dogegetblockhash) | Get Dogecoin Block hash
[**dogeGetMempool()**](#dogegetmempool) | Get Mempool Transactions
[**dogeGetRawTransaction()**](#dogegetrawtransaction) | Get Dogecoin Transaction by hash
[**dogeGetUTXO()**](#dogegetutxo) | Get information about a transaction output (UTXO) in a Dogecoin transaction
[**dogeTransactionUTXO()**](#dogetransactionutxo) | Send DOGE to Dogecoin addresses
[**dogeTransactionUTXOKMS()**](#dogetransactionutxokms) | Send DOGE to Dogecoin addresses


## `dogeBroadcast()`

### Example

[👉 View "**dogeBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeBroadcast.php)

### Request

> **POST** `/v3/dogecoin/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeBroadcast(
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

Broadcast signed Dogecoin transaction

<h4>2 credits per API call.</h4>

 Broadcast signed transaction to Dogecoin blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `dogeGenerateAddress()`

### Example

[👉 View "**dogeGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGenerateAddress.php)

### Request

> **GET** `/v3/dogecoin/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\DogeGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\DogeGenerateAddress200Response**](../../Model/DogeGenerateAddress200Response)

### Description

Generate Dogecoin deposit address from Extended public key

<h4>1 credit per API call.</h4>

 Generate Dogecoin deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

[Back to top](#top)



## `dogeGenerateAddressPrivateKey()`

### Example

[👉 View "**dogeGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/dogecoin/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../../Model/PrivKeyRequest) |  |

### Return type

[**\Tatum\Model\PrivKey**](../../Model/PrivKey)

### Description

Generate Dogecoin private key

<h4>2 credits per API call.</h4>

 Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

[Back to top](#top)



## `dogeGenerateWallet()`

### Example

[👉 View "**dogeGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGenerateWallet.php)

### Request

> **GET** `/v3/dogecoin/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../../Model/Wallet)

### Description

Generate Dogecoin wallet

<h4>1 credit per API call.</h4>

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for Dogecoin wallet with derivation path m'/44'/3'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki">https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Dogecoin wallet.

[Back to top](#top)



## `dogeGetBlock()`

### Example

[👉 View "**dogeGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGetBlock.php)

### Request

> **GET** `/v3/dogecoin/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGetBlock(
    string $hash
): \Tatum\Model\DogeBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\DogeBlock**](../../Model/DogeBlock)

### Description

Get Dogecoin Block by hash or height

<h4>1 credit per API call.</h4>

Get Dogecoin Block detail by block hash or height.

[Back to top](#top)



## `dogeGetBlockChainInfo()`

### Example

[👉 View "**dogeGetBlockChainInfo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGetBlockChainInfo.php)

### Request

> **GET** `/v3/dogecoin/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGetBlockChainInfo(): \Tatum\Model\DogeInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\DogeInfo**](../../Model/DogeInfo)

### Description

Get Dogecoin Blockchain Information

<h4>1 credit per API call.</h4>

Get Dogecoin Blockchain Information. Obtain basic info like testnet / mainnet version of the chain, current block number and it's hash.

[Back to top](#top)



## `dogeGetBlockHash()`

### Example

[👉 View "**dogeGetBlockHash.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGetBlockHash.php)

### Request

> **GET** `/v3/dogecoin/block/hash/{i}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGetBlockHash(
    float $i
): \Tatum\Model\LtcGetBlockHash200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | The number of blocks preceding a particular block on a block chain. |

### Return type

[**\Tatum\Model\LtcGetBlockHash200Response**](../../Model/LtcGetBlockHash200Response)

### Description

Get Dogecoin Block hash

<h4>1 credit per API call.</h4>

Get Dogecoin Block hash. Returns hash of the block to get the block detail.

[Back to top](#top)



## `dogeGetMempool()`

### Example

[👉 View "**dogeGetMempool.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGetMempool.php)

### Request

> **GET** `/v3/dogecoin/mempool`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGetMempool(): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

Get Mempool Transactions

<h4>1 credit per API call.</h4>

Get Dogecoin Transaction ids in the mempool.

[Back to top](#top)



## `dogeGetRawTransaction()`

### Example

[👉 View "**dogeGetRawTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGetRawTransaction.php)

### Request

> **GET** `/v3/dogecoin/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGetRawTransaction(
    string $hash
): \Tatum\Model\DogeTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\DogeTx**](../../Model/DogeTx)

### Description

Get Dogecoin Transaction by hash

<h4>1 credit per API call.</h4>

Get Dogecoin Transaction detail by transaction hash.

[Back to top](#top)



## `dogeGetUTXO()`

### Example

[👉 View "**dogeGetUTXO.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeGetUTXO.php)

### Request

> **GET** `/v3/dogecoin/utxo/{hash}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeGetUTXO(
    string $hash,
    float $index
): \Tatum\Model\DogeUTXO
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | The transaction hash |
 **$index** | **float**  | The index of the transaction output that you want to check for the UTXO |

### Return type

[**\Tatum\Model\DogeUTXO**](../../Model/DogeUTXO)

### Description

Get information about a transaction output (UTXO) in a Dogecoin transaction

**1 credit per API call**

 Get information about a transaction output in a transaction and check whether this output is a UTXO or has been spent.

 "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of DOGE that remains at a Dogecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.

 

<ul> <li>If the transaction output is an UTXO, the API returns data about it.</li> <li>If the transaction output has been spent and there is no UTXO to return, the API returns an error with the <code>404</code> response code.</li> </ul>

[Back to top](#top)



## `dogeTransactionUTXO()`

### Example

[👉 View "**dogeTransactionUTXO.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeTransactionUTXO.php)

### Request

> **POST** `/v3/dogecoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeTransactionUTXO(
    \Tatum\Model\DogeTransactionUTXO $doge_transaction_utxo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$doge_transaction_utxo** | [**\Tatum\Model\DogeTransactionUTXO**](../../Model/DogeTransactionUTXO) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send DOGE to Dogecoin addresses

**2 credits per API call**

 Send DOGE to blockchain addresses.

 Dogecoin transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of DOGE that remains at a Bitcoin Cash address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>. To check UTXOs in a transaction, see the <a href="https://apidoc.tatum.io/tag/Dogecoin/#operation/dogegetutxo">API for getting information about a transaction output (UTXO) in a Dogecoin transaction</a>

 You build a DOGE transaction by sending DOGE from UTXOs. Each UTXO is included in the transaction.

 When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 DOGE and T2 with 2 DOGE. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 DOGE to spend:

<code>1 DOGE (from T1) + 2 DOGE (from T2) = 3 DOGE (to spend in total)</code>

 You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.

 **Paying the gas fee and receiving the change**

 When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).

 **Signing a transaction**

 When sending DOGE, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `dogeTransactionUTXOKMS()`

### Example

[👉 View "**dogeTransactionUTXOKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DogecoinApi/dogeTransactionUTXOKMS.php)

### Request

> **POST** `/v3/dogecoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->dogecoin()->dogeTransactionUTXOKMS(
    \Tatum\Model\DogeTransactionUTXOKMS $doge_transaction_utxokms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$doge_transaction_utxokms** | [**\Tatum\Model\DogeTransactionUTXOKMS**](../../Model/DogeTransactionUTXOKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send DOGE to Dogecoin addresses

DogeTransactionUTXOKMS operation

[Back to top](#top)

