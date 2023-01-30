---
title: Litecoin
parent: API
layout: page
---

# Api/LitecoinApi

[Litecoin API Reference](https://apidoc.tatum.io/tag/Litecoin/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->litecoin();

// TestNet API Call
$sdk->testnet()->api()->litecoin();
```

## Methods

Method | Description
------------- | -------------
[**ltcBroadcast()**](#ltcbroadcast) | Broadcast signed Litecoin transaction
[**ltcGenerateAddress()**](#ltcgenerateaddress) | Generate Litecoin deposit address from Extended public key
[**ltcGenerateAddressPrivateKey()**](#ltcgenerateaddressprivatekey) | Generate Litecoin private key
[**ltcGenerateWallet()**](#ltcgeneratewallet) | Generate Litecoin wallet
[**ltcGetBalanceOfAddress()**](#ltcgetbalanceofaddress) | Get the balance of a Litecoin address
[**ltcGetBlock()**](#ltcgetblock) | Get Litecoin Block by hash or height
[**ltcGetBlockChainInfo()**](#ltcgetblockchaininfo) | Get Litecoin Blockchain Information
[**ltcGetBlockHash()**](#ltcgetblockhash) | Get Litecoin Block hash
[**ltcGetMempool()**](#ltcgetmempool) | Get Mempool Transactions
[**ltcGetRawTransaction()**](#ltcgetrawtransaction) | Get Litecoin Transaction by hash
[**ltcGetTxByAddress()**](#ltcgettxbyaddress) | Get Litecoin Transactions by address
[**ltcGetUTXO()**](#ltcgetutxo) | Get information about a transaction output (UTXO) in a Litecoin transaction
[**ltcTransactionAddress()**](#ltctransactionaddress) | Send LTC to Litecoin addresses
[**ltcTransactionAddressKMS()**](#ltctransactionaddresskms) | Send LTC to Litecoin addresses
[**ltcTransactionUTXO()**](#ltctransactionutxo) | Send LTC to Litecoin addresses
[**ltcTransactionUTXOKMS()**](#ltctransactionutxokms) | Send LTC to Litecoin addresses


## `ltcBroadcast()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcBroadcast.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcBroadcast.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/litecoin/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcBroadcast(
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

> Broadcast signed Litecoin transaction

#### 5 credits per API call.

Broadcast signed transaction to Litecoin blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGenerateAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGenerateAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGenerateAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\LtcGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\LtcGenerateAddress200Response**](../../Model/LtcGenerateAddress200Response)

### Description

> Generate Litecoin deposit address from Extended public key

#### 5 credits per API call.

Generate Litecoin deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGenerateAddressPrivateKey()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGenerateAddressPrivateKey.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGenerateAddressPrivateKey.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/litecoin/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGenerateAddressPrivateKey(
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

> Generate Litecoin private key

#### 5 credits per API call.

Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGenerateWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGenerateWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGenerateWallet.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGenerateWallet(
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

> Generate Litecoin wallet

#### 5 credits per API call.

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. Each address is identified by 3 main values:
* Private Key - your secret value, which should never be revealed
* Public Key - public address to be published
* Derivation index - index of generated address

Tatum follows BIP44 specification and generates for Litecoin wallet with derivation path m'/44'/2'/0'/0\. More about BIP44 HD wallets can be found here - [https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki](https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki). Generate BIP44 compatible Litecoin wallet.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetBalanceOfAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetBalanceOfAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBalanceOfAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/address/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetBalanceOfAddress(
    string $address
): \Tatum\Model\BtcBasedBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |

### Return type

[**\Tatum\Model\BtcBasedBalance**](../../Model/BtcBasedBalance)

### Description

> Get the balance of a Litecoin address

**5 credits per API call**

Get the balance of a Litecoin address.

The API returns the balance only if the address has up to 50,000 UTXOs (Unspent Transaction Outputs). For an address with more than 50,000 UTXOs, the API returns an error with the `403` response code.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetBlock(
    string $hash
): \Tatum\Model\LtcBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\LtcBlock**](../../Model/LtcBlock)

### Description

> Get Litecoin Block by hash or height

#### 5 credits per API call.

Get Litecoin Block detail by block hash or height.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetBlockChainInfo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetBlockChainInfo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBlockChainInfo.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetBlockChainInfo(): \Tatum\Model\LtcInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\LtcInfo**](../../Model/LtcInfo)

### Description

> Get Litecoin Blockchain Information

#### 5 credits per API call.

Get Litecoin Blockchain Information. Obtain basic info like testnet / mainnet version of the chain, current block number and it's hash.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetBlockHash()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetBlockHash.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBlockHash.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/block/hash/{i}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetBlockHash(
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

> Get Litecoin Block hash

#### 5 credits per API call.

Get Litecoin Block hash. Returns hash of the block to get the block detail.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetMempool()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetMempool.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetMempool.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/mempool`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetMempool(): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

> Get Mempool Transactions

#### 1 credit per API call.

Get Litecoin Transaction ids in the mempool.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetRawTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetRawTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetRawTransaction.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetRawTransaction(
    string $hash
): \Tatum\Model\LtcTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\LtcTx**](../../Model/LtcTx)

### Description

> Get Litecoin Transaction by hash

#### 5 credits per API call.

Get Litecoin Transaction detail by transaction hash.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetTxByAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetTxByAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetTxByAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/transaction/address/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetTxByAddress(
    string $address,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\LtcTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\LtcTx[]**](../../Model/LtcTx)

### Description

> Get Litecoin Transactions by address

#### 5 credits per API call.

Get Litecoin Transaction by address.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcGetUTXO()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcGetUTXO.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetUTXO.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/litecoin/utxo/{hash}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcGetUTXO(
    string $hash,
    float $index
): \Tatum\Model\LtcUTXO
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | The transaction hash |
 **$index** | **float**  | The index of the transaction output that you want to check for the UTXO |

### Return type

[**\Tatum\Model\LtcUTXO**](../../Model/LtcUTXO)

### Description

> Get information about a transaction output (UTXO) in a Litecoin transaction

**5 credits per API call**

Get information about a transaction output in a transaction and check whether this output is a UTXO or has been spent.

"UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of LTC that remains at a Litecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information the UTXO, see the [Bitcoin user documentation](https://developer.bitcoin.org/devguide/transactions.html).

* If the transaction output is an UTXO, the API returns data about it.
* If the transaction output has been spent and there is no UTXO to return, the API returns an error with the `404` response code.

[Back to top](#top){: .btn .btn-purple }

---


## `ltcTransactionAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcTransactionAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionAddress.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcTransactionAddress(
    \Tatum\Model\LtcTransactionAddress $ltc_transaction_address
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_address** | [**\Tatum\Model\LtcTransactionAddress**](../../Model/LtcTransactionAddress) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send LTC to Litecoin addresses

**10 credits per API call**

Send LTC to blockchain addresses.

Litecoin transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of LTC that remains at a Litecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the [Bitcoin user documentation](https://developer.bitcoin.org/devguide/transactions.html). To check UTXOs in a transaction, see the [API for getting information about a transaction output (UTXO) in a Litecoin transaction](https://apidoc.tatum.io/tag/Litecoin/#operation/ltcgetutxo).

You can build a LTC transaction by one of the following methods:

* **Sending LTC from blockchain addresses**The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from. To use this method, use the `LtcTransactionAddress` or `LtcTransactionAddressKMS` schema of the request body.
* **Sending LTC from UTXOs**The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send. To use this method, use the `LtcTransactionFromUTXO` or `LtcTransactionFromUTXOKMS` schema of the request body.

When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 LTC and T2 with 2 LTC. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 LTC to spend:`1 LTC (from T1) + 2 LTC (from T2) = 3 LTC (to spend in total)`

You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.

**Paying the gas fee and receiving the change** When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the `fee` and `changeAddress` parameters in the request body, correspondingly).

**Signing a transaction** When sending LTC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `ltcTransactionAddressKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcTransactionAddressKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionAddressKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcTransactionAddressKMS(
    \Tatum\Model\LtcTransactionAddressKMS $ltc_transaction_address_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_address_kms** | [**\Tatum\Model\LtcTransactionAddressKMS**](../../Model/LtcTransactionAddressKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send LTC to Litecoin addresses



[Back to top](#top){: .btn .btn-purple }

---


## `ltcTransactionUTXO()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcTransactionUTXO.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionUTXO.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcTransactionUTXO(
    \Tatum\Model\LtcTransactionUTXO $ltc_transaction_utxo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_utxo** | [**\Tatum\Model\LtcTransactionUTXO**](../../Model/LtcTransactionUTXO) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send LTC to Litecoin addresses



[Back to top](#top){: .btn .btn-purple }

---


## `ltcTransactionUTXOKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **ltcTransactionUTXOKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionUTXOKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->litecoin()->ltcTransactionUTXOKMS(
    \Tatum\Model\LtcTransactionUTXOKMS $ltc_transaction_utxokms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_utxokms** | [**\Tatum\Model\LtcTransactionUTXOKMS**](../../Model/LtcTransactionUTXOKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send LTC to Litecoin addresses



[Back to top](#top){: .btn .btn-purple }

---
