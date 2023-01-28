---
title: Bitcoin
parent: API
layout: page
---

# Api/BitcoinApi

[Bitcoin API Reference](https://apidoc.tatum.io/tag/Bitcoin/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->bitcoin();

// TestNet API Call
$sdk->testnet()->api()->bitcoin();
```

## Methods

Method | Description
------------- | -------------
[**btcBroadcast()**](#btcbroadcast) | Broadcast a signed Bitcoin transaction
[**btcGenerateAddress()**](#btcgenerateaddress) | Generate a Bitcoin address from the wallet's extended public key
[**btcGenerateAddressPrivateKey()**](#btcgenerateaddressprivatekey) | Generate the private key for a Bitcoin address
[**btcGenerateWallet()**](#btcgeneratewallet) | Generate a Bitcoin wallet
[**btcGetBalanceOfAddress()**](#btcgetbalanceofaddress) | Get the balance of a Bitcoin address
[**btcGetBlock()**](#btcgetblock) | Get a Bitcoin block by its hash or height
[**btcGetBlockChainInfo()**](#btcgetblockchaininfo) | Get Bitcoin blockchain information
[**btcGetBlockHash()**](#btcgetblockhash) | Get the hash of a Bitcoin block
[**btcGetMempool()**](#btcgetmempool) | Get transactions from the Bitcoin mempool
[**btcGetRawTransaction()**](#btcgetrawtransaction) | Get a Bitcoin transaction by its hash
[**btcGetTxByAddress()**](#btcgettxbyaddress) | Get all transactions for a Bitcoin address
[**btcGetUTXO()**](#btcgetutxo) | Get information about a transaction output (UTXO) in a Bitcoin transaction
[**btcTransactionFromAddress()**](#btctransactionfromaddress) | Send BTC to Bitcoin addresses
[**btcTransactionFromAddressKMS()**](#btctransactionfromaddresskms) | Send BTC to Bitcoin addresses
[**btcTransactionFromUTXO()**](#btctransactionfromutxo) | Send BTC to Bitcoin addresses
[**btcTransactionFromUTXOKMS()**](#btctransactionfromutxokms) | Send BTC to Bitcoin addresses


## `btcBroadcast()`

### Example

[👉 View "**btcBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcBroadcast.php)

### Request

> **POST** `/v3/bitcoin/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcBroadcast(
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

Broadcast a signed Bitcoin transaction

**2 credits per API call**

 Broadcasts a signed transaction to the Bitcoin blockchain. This method is used internally from Tatum KMS or Tatum Client Libraries. It is possible to create a custom signing mechanism and only use this method for broadcasting data to the blockchain.

[Back to top](#top)



## `btcGenerateAddress()`

### Example

[👉 View "**btcGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGenerateAddress.php)

### Request

> **GET** `/v3/bitcoin/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of a wallet. |
 **$index** | **float**  | Derivation index of the desired address to be generated. |

### Return type

[**\Tatum\Model\GeneratedAddressBtc**](../../Model/GeneratedAddressBtc)

### Description

Generate a Bitcoin address from the wallet's extended public key

**1 credit per API call**

 Generate a Bitcoin address from the extended public key of the wallet. The address is generated for the specific index - each extended public key can generate up to 2^32 addresses with the index starting from 0 up to 2^31 - 1.

[Back to top](#top)



## `btcGenerateAddressPrivateKey()`

### Example

[👉 View "**btcGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/bitcoin/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGenerateAddressPrivateKey(
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

Generate the private key for a Bitcoin address

**1 credit per API call**

 Generates a private key for an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

[Back to top](#top)



## `btcGenerateWallet()`

### Example

[👉 View "**btcGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGenerateWallet.php)

### Request

> **GET** `/v3/bitcoin/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGenerateWallet(
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

Generate a Bitcoin wallet

**1 credit per API call**

 Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for Bitcoin wallet with derivation path m'/44'/0'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Bitcoin wallet.

[Back to top](#top)



## `btcGetBalanceOfAddress()`

### Example

[👉 View "**btcGetBalanceOfAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetBalanceOfAddress.php)

### Request

> **GET** `/v3/bitcoin/address/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetBalanceOfAddress(
    string $address
): \Tatum\Model\BtcBasedBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | The blockchain address to get the balance for |

### Return type

[**\Tatum\Model\BtcBasedBalance**](../../Model/BtcBasedBalance)

### Description

Get the balance of a Bitcoin address

**1 credit per API call**

 Get the balance of a Bitcoin address.

 The API returns the balance only if the address has up to 50,000 UTXOs (Unspent Transaction Outputs). For an address with more than 50,000 UTXOs, the API returns an error with the <code>403</code> response code.

[Back to top](#top)



## `btcGetBlock()`

### Example

[👉 View "**btcGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetBlock.php)

### Request

> **GET** `/v3/bitcoin/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetBlock(
    string $hash
): \Tatum\Model\BtcBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\BtcBlock**](../../Model/BtcBlock)

### Description

Get a Bitcoin block by its hash or height

**1 credit per API call**

 Gets Bitcoin block detail by block hash or height.

[Back to top](#top)



## `btcGetBlockChainInfo()`

### Example

[👉 View "**btcGetBlockChainInfo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetBlockChainInfo.php)

### Request

> **GET** `/v3/bitcoin/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetBlockChainInfo(): \Tatum\Model\BtcInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\BtcInfo**](../../Model/BtcInfo)

### Description

Get Bitcoin blockchain information

**1 credit per API call**

 Gets Bitcoin blockchain information. Obtains basic info like the testnet / mainnet version of the chain, the current block number and its hash.

[Back to top](#top)



## `btcGetBlockHash()`

### Example

[👉 View "**btcGetBlockHash.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetBlockHash.php)

### Request

> **GET** `/v3/bitcoin/block/hash/{i}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetBlockHash(
    float $i
): \Tatum\Model\BtcBlockHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | The number of blocks preceding a particular block on a blockchain. |

### Return type

[**\Tatum\Model\BtcBlockHash**](../../Model/BtcBlockHash)

### Description

Get the hash of a Bitcoin block

**1 credit per API call**

 Gets a Bitcoin block hash. Returns the hash of the block to get the block's details.

[Back to top](#top)



## `btcGetMempool()`

### Example

[👉 View "**btcGetMempool.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetMempool.php)

### Request

> **GET** `/v3/bitcoin/mempool`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetMempool(): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

Get transactions from the Bitcoin mempool

**1 credit per API call**

 Gets Bitcoin transaction IDs in the mempool.

[Back to top](#top)



## `btcGetRawTransaction()`

### Example

[👉 View "**btcGetRawTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetRawTransaction.php)

### Request

> **GET** `/v3/bitcoin/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetRawTransaction(
    string $hash
): \Tatum\Model\BtcTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BtcTx**](../../Model/BtcTx)

### Description

Get a Bitcoin transaction by its hash

**1 credit per API call**

 Get Bitcoin Transaction detail by transaction hash.

[Back to top](#top)



## `btcGetTxByAddress()`

### Example

[👉 View "**btcGetTxByAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetTxByAddress.php)

### Request

> **GET** `/v3/bitcoin/transaction/address/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetTxByAddress(
    string $address,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\BtcTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\BtcTx[]**](../../Model/BtcTx)

### Description

Get all transactions for a Bitcoin address

**1 credit per API call**

 Get all transactions for a Bitcoin address.

[Back to top](#top)



## `btcGetUTXO()`

### Example

[👉 View "**btcGetUTXO.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcGetUTXO.php)

### Request

> **GET** `/v3/bitcoin/utxo/{hash}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcGetUTXO(
    string $hash,
    float $index
): \Tatum\Model\BtcUTXO
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | The transaction hash |
 **$index** | **float**  | The index of the transaction output that you want to check for the UTXO |

### Return type

[**\Tatum\Model\BtcUTXO**](../../Model/BtcUTXO)

### Description

Get information about a transaction output (UTXO) in a Bitcoin transaction

**1 credit per API call**

 Get information about a transaction output in a transaction and check whether this output is a UTXO or has been spent.

 "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of BTC/satoshis that remains at a Bitcoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about Bitcoin transactions and UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.

 

<ul> <li>If the transaction output is an UTXO, the API returns data about it.</li> <li>If the transaction output has been spent and there is no UTXO to return, the API returns an error with the <code>404</code> response code.</li> </ul>

[Back to top](#top)



## `btcTransactionFromAddress()`

### Example

[👉 View "**btcTransactionFromAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcTransactionFromAddress.php)

### Request

> **POST** `/v3/bitcoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromAddress(
    \Tatum\Model\BtcTransactionFromAddress $btc_transaction_from_address
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_address** | [**\Tatum\Model\BtcTransactionFromAddress**](../../Model/BtcTransactionFromAddress) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send BTC to Bitcoin addresses

**2 credits per API call**

 Send BTC to blockchain addresses.

 Bitcoin transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of BTC/satoshis that remains at a Bitcoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about Bitcoin transactions and UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>. To check UTXOs in a transaction, see the <a href="https://apidoc.tatum.io/tag/Bitcoin/#operation/btcgetutxo">API for getting information about a transaction output (UTXO) in a Bitcoin transaction</a>.

 You can build a BTC transaction by one of the following methods:

 

<ul> <li>**Sending BTC from blockchain addresses**

The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.

 To use this method, use the <code>BtcTransactionFromAddress</code> or <code>BtcTransactionFromAddressKMS</code> schema of the request body.</li> <li>**Sending BTC from UTXOs**

The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.

 To use this method, use the <code>BtcTransactionFromUTXO</code> or <code>BtcTransactionFromUTXOKMS</code> schema of the request body.</li> </ul>

 When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 BTC and T2 with 2 BTC. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 BTC to spend:

<code>1 BTC (from T1) + 2 BTC (from T2) = 3 BTC (to spend in total)</code>

 You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.

 **Paying the gas fee and receiving the change**

 When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).

 **Signing a transaction**

 When sending BTC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `btcTransactionFromAddressKMS()`

### Example

[👉 View "**btcTransactionFromAddressKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcTransactionFromAddressKMS.php)

### Request

> **POST** `/v3/bitcoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromAddressKMS(
    \Tatum\Model\BtcTransactionFromAddressKMS $btc_transaction_from_address_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_address_kms** | [**\Tatum\Model\BtcTransactionFromAddressKMS**](../../Model/BtcTransactionFromAddressKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send BTC to Bitcoin addresses

BtcTransactionFromAddressKMS operation

[Back to top](#top)



## `btcTransactionFromUTXO()`

### Example

[👉 View "**btcTransactionFromUTXO.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcTransactionFromUTXO.php)

### Request

> **POST** `/v3/bitcoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromUTXO(
    \Tatum\Model\BtcTransactionFromUTXO $btc_transaction_from_utxo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_utxo** | [**\Tatum\Model\BtcTransactionFromUTXO**](../../Model/BtcTransactionFromUTXO) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send BTC to Bitcoin addresses

BtcTransactionFromUTXO operation

[Back to top](#top)



## `btcTransactionFromUTXOKMS()`

### Example

[👉 View "**btcTransactionFromUTXOKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinApi/btcTransactionFromUTXOKMS.php)

### Request

> **POST** `/v3/bitcoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromUTXOKMS(
    \Tatum\Model\BtcTransactionFromUTXOKMS $btc_transaction_from_utxokms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_utxokms** | [**\Tatum\Model\BtcTransactionFromUTXOKMS**](../../Model/BtcTransactionFromUTXOKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send BTC to Bitcoin addresses

BtcTransactionFromUTXOKMS operation

[Back to top](#top)

