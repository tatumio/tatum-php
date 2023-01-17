---
title: Cardano
parent: API
layout: page
---

# Api/CardanoApi

## References

[Cardano API documentation](https://apidoc.tatum.io/tag/Cardano/)

## Methods

Method | Description
------------- | -------------
[**adaBroadcast()**](#adabroadcast) | Broadcast signed Ada transaction
[**adaGenerateAddress()**](#adagenerateaddress) | Generate Ada deposit address from Extended public key
[**adaGenerateAddressPrivateKey()**](#adagenerateaddressprivatekey) | Generate Ada private key
[**adaGenerateWallet()**](#adageneratewallet) | Generate Ada wallet
[**adaGetAccount()**](#adagetaccount) | Gets a Ada account by address
[**adaGetBlock()**](#adagetblock) | Get Block by hash or height
[**adaGetBlockChainInfo()**](#adagetblockchaininfo) | Get Blockchain information
[**adaGetRawTransaction()**](#adagetrawtransaction) | Get transaction by hash
[**adaGetTxByAddress()**](#adagettxbyaddress) | Get transactions by address
[**adaGetUTXOByAddress()**](#adagetutxobyaddress) | Get UTXOs by address
[**adaTransactionFromAddress()**](#adatransactionfromaddress) | Send ADA to Cardano addresses
[**adaTransactionFromAddressKMS()**](#adatransactionfromaddresskms) | Send ADA to Cardano addresses
[**adaTransactionFromUTXO()**](#adatransactionfromutxo) | Send ADA to Cardano addresses
[**adaTransactionFromUTXOKMS()**](#adatransactionfromutxokms) | Send ADA to Cardano addresses


## `adaBroadcast()`

> **POST** `/v3/ada/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaBroadcast(
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

Broadcast signed Ada transaction

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>2 credits per API call.</h4>

 Broadcasts a signed transaction to the Ada blockchain. This method is used internally from Tatum KMS or Tatum Client Libraries. It is possible to create a custom signing mechanism and only use this method for broadcasting data to the blockchain.

### Example

[✨ View "adaBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaBroadcast.php)

[[Back to top]](#top)



## `adaGenerateAddress()`

> **GET** `/v3/ada/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\AdaGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of a wallet. |
 **$index** | **float**  | Derivation index of the desired address to be generated. |

### Return type

[**\Tatum\Model\AdaGenerateAddress200Response**](../../Model/AdaGenerateAddress200Response)

### Description

Generate Ada deposit address from Extended public key

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>1 credit per API call.</h4>

 Generates a Ada deposit address from an Extended public key. The deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

### Example

[✨ View "adaGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGenerateAddress.php)

[[Back to top]](#top)



## `adaGenerateAddressPrivateKey()`

> **POST** `/v3/ada/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGenerateAddressPrivateKey(
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

Generate Ada private key

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>1 credit per API call.</h4>

 Generates a private key for an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

### Example

[✨ View "adaGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGenerateAddressPrivateKey.php)

[[Back to top]](#top)



## `adaGenerateWallet()`

> **GET** `/v3/ada/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGenerateWallet(
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

Generate Ada wallet

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>1 credit per API call.</h4>

Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for ADA wallet with derivation path m/1852'/1815'/0'. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Ada wallet.

### Example

[✨ View "adaGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGenerateWallet.php)

[[Back to top]](#top)



## `adaGetAccount()`

> **GET** `/v3/ada/account/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetAccount(
    string $address
): array[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |

### Return type

**array[]**

### Description

Gets a Ada account by address

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>2 credits per API call.</h4>

 Gets a Ada account by address.

### Example

[✨ View "adaGetAccount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGetAccount.php)

[[Back to top]](#top)



## `adaGetBlock()`

> **GET** `/v3/ada/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetBlock(
    string $hash
): \Tatum\Model\AdaBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\AdaBlock**](../../Model/AdaBlock)

### Description

Get Block by hash or height

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets Ada block detail by block hash or height.

### Example

[✨ View "adaGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGetBlock.php)

[[Back to top]](#top)



## `adaGetBlockChainInfo()`

> **GET** `/v3/ada/info`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetBlockChainInfo(
): \Tatum\Model\AdaInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\AdaInfo**](../../Model/AdaInfo)

### Description

Get Blockchain information

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets Ada blockchain information. Obtains basic info like the testnet / mainnet version of the chain, the current block number and its hash.

### Example

[✨ View "adaGetBlockChainInfo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGetBlockChainInfo.php)

[[Back to top]](#top)



## `adaGetRawTransaction()`

> **GET** `/v3/ada/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetRawTransaction(
    string $hash
): \Tatum\Model\AdaTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\AdaTx**](../../Model/AdaTx)

### Description

Get transaction by hash

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Get Ada Transaction detail by transaction hash.

### Example

[✨ View "adaGetRawTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGetRawTransaction.php)

[[Back to top]](#top)



## `adaGetTxByAddress()`

> **GET** `/v3/ada/transaction/address/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetTxByAddress(
    string $address,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\AdaTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\AdaTx[]**](../../Model/AdaTx)

### Description

Get transactions by address

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets a Ada transaction by address.

### Example

[✨ View "adaGetTxByAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGetTxByAddress.php)

[[Back to top]](#top)



## `adaGetUTXOByAddress()`

> **GET** `/v3/ada/{address}/utxos`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetUTXOByAddress(
    string $address
): \Tatum\Model\AdaUTXO[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |

### Return type

[**\Tatum\Model\AdaUTXO[]**](../../Model/AdaUTXO)

### Description

Get UTXOs by address

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets a Ada UTXOs by address.

### Example

[✨ View "adaGetUTXOByAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaGetUTXOByAddress.php)

[[Back to top]](#top)



## `adaTransactionFromAddress()`

> **POST** `/v3/ada/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromAddress(
    \Tatum\Model\AdaTransactionFromAddress $ada_transaction_from_address
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_address** | [**\Tatum\Model\AdaTransactionFromAddress**](../../Model/AdaTransactionFromAddress) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send ADA to Cardano addresses

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 **2 credits per API call**

 Send ADA to blockchain addresses.

 Cardano transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of ADA that remains at a Cardano address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.

 You can build an ADA transaction by one of the following methods:

 

<ul> <li>**Sending ADA from blockchain addresses**

The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.

 To use this method, use the `AdaTransactionFromAddress` or `AdaTransactionFromAddressKMS` schema of the request body.</li> <li>**Sending ADA from UTXOs**

The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.

 To use this method, use the `AdaTransactionFromUTXO` or `AdaTransactionFromUTXOKMS` schema of the request body.</li> </ul>

 When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 ADA and T2 with 2 ADA. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 ADA to spend:

`1 ADA (from T1) + 2 ADA (from T2) = 3 ADA (to spend in total)`

 You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.

 **Paying the gas fee and receiving the change**

 When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the `fee` and `changeAddress` parameters in the request body, correspondingly).

 **Signing a transaction**

 When sending ADA, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "adaTransactionFromAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaTransactionFromAddress.php)

[[Back to top]](#top)



## `adaTransactionFromAddressKMS()`

> **POST** `/v3/ada/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromAddressKMS(
    \Tatum\Model\AdaTransactionFromAddressKMS $ada_transaction_from_address_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_address_kms** | [**\Tatum\Model\AdaTransactionFromAddressKMS**](../../Model/AdaTransactionFromAddressKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send ADA to Cardano addresses

AdaTransactionFromAddressKMS operation

### Example

[✨ View "adaTransactionFromAddressKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaTransactionFromAddressKMS.php)

[[Back to top]](#top)



## `adaTransactionFromUTXO()`

> **POST** `/v3/ada/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromUTXO(
    \Tatum\Model\AdaTransactionFromUTXO $ada_transaction_from_utxo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_utxo** | [**\Tatum\Model\AdaTransactionFromUTXO**](../../Model/AdaTransactionFromUTXO) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send ADA to Cardano addresses

AdaTransactionFromUTXO operation

### Example

[✨ View "adaTransactionFromUTXO.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaTransactionFromUTXO.php)

[[Back to top]](#top)



## `adaTransactionFromUTXOKMS()`

> **POST** `/v3/ada/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromUTXOKMS(
    \Tatum\Model\AdaTransactionFromUTXOKMS $ada_transaction_from_utxokms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_utxokms** | [**\Tatum\Model\AdaTransactionFromUTXOKMS**](../../Model/AdaTransactionFromUTXOKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send ADA to Cardano addresses

AdaTransactionFromUTXOKMS operation

### Example

[✨ View "adaTransactionFromUTXOKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CardanoApi/adaTransactionFromUTXOKMS.php)

[[Back to top]](#top)

