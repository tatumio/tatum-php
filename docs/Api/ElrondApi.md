---
title: Elrond
parent: API
layout: page
---

# Api/ElrondApi

[Elrond API Reference](https://apidoc.tatum.io/tag/Elrond/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->elrond();

// TestNet API Call
$sdk->testnet()->api()->elrond();
```

## Methods

Method | Description
------------- | -------------
[**eGldGetCurrentBlock()**](#egldgetcurrentblock) | Get current block number
[**egldBroadcast()**](#egldbroadcast) | Broadcast signed EGLD transaction
[**egldGenerateAddress()**](#egldgenerateaddress) | Generate EGLD account address from mnemonic
[**egldGenerateAddressPrivateKey()**](#egldgenerateaddressprivatekey) | Generate EGLD private key
[**egldGenerateWallet()**](#egldgeneratewallet) | Generate EGLD wallet
[**egldGetBalance()**](#egldgetbalance) | Get EGLD Account balance
[**egldGetBlock()**](#egldgetblock) | Get EGLD block by hash
[**egldGetTransaction()**](#egldgettransaction) | Get EGLD Transaction
[**egldGetTransactionAddress()**](#egldgettransactionaddress) | Get count of outgoing EGLD transactions
[**egldGetTransactionCount()**](#egldgettransactioncount) | Get count of outgoing EGLD transactions
[**transferEgldBlockchain()**](#transferegldblockchain) | Send EGLD from account to account
[**transferEgldBlockchainKMS()**](#transferegldblockchainkms) | Send EGLD from account to account


## `eGldGetCurrentBlock()`

### Example

[👉 View "**eGldGetCurrentBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/eGldGetCurrentBlock.php)

### Request

> **GET** `/v3/egld/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->eGldGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<h4>1 credit per API call.</h4>

 Get EGLD current block number. This is the number of the latest block in the blockchain.

[Back to top](#top)



## `egldBroadcast()`

### Example

[👉 View "**egldBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldBroadcast.php)

### Request

> **POST** `/v3/egld/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldBroadcast(
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

Broadcast signed EGLD transaction

<h4>2 credits per API call.</h4>

 Broadcast signed transaction to EGLD blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `egldGenerateAddress()`

### Example

[👉 View "**egldGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGenerateAddress.php)

### Request

> **GET** `/v3/egld/address/{mnemonic}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGenerateAddress(
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

[**\Tatum\Model\EgldGenerateAddress200Response**](../../Model/EgldGenerateAddress200Response)

### Description

Generate EGLD account address from mnemonic

<h4>1 credit per API call.</h4>

 Generate EGLD account deposit address from mnemonic phrase. Deposit address is generated for the specific index - each mnemonic phrase can generate up to 2^31 addresses starting from index 0 until 2^31.

[Back to top](#top)



## `egldGenerateAddressPrivateKey()`

### Example

[👉 View "**egldGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/egld/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGenerateAddressPrivateKey(
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

Generate EGLD private key

<h4>1 credit per API call.</h4>

 Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

[Back to top](#top)



## `egldGenerateWallet()`

### Example

[👉 View "**egldGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGenerateWallet.php)

### Request

> **GET** `/v3/egld/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\EgldGenerateWallet200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of private key. | [optional]

### Return type

[**\Tatum\Model\EgldGenerateWallet200Response**](../../Model/EgldGenerateWallet200Response)

### Description

Generate EGLD wallet

<h4>1 credit per API call.</h4>

 The Elrond Address format is bech32, specified by the BIP 0173. The address always starts with an erd1. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. 

 Each address is identified by 3 main values: 

<ul><li>Private Key - your secret value, which should never be revealed</li> <li>Public Key - public address to be published</li> <li>Derivation index - index of generated address</li></ul>

 

 Tatum follows BIP44 specification and generates for EGLD wallet with derivation path m'/44'/508'/0'/0'. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible EGLD wallet.

[Back to top](#top)



## `egldGetBalance()`

### Example

[👉 View "**egldGetBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGetBalance.php)

### Request

> **GET** `/v3/egld/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGetBalance(
    string $address
): \Tatum\Model\EgldGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\EgldGetBalance200Response**](../../Model/EgldGetBalance200Response)

### Description

Get EGLD Account balance

<h4>1 credit per API call.</h4>

 Get account balance in EGLD.

[Back to top](#top)



## `egldGetBlock()`

### Example

[👉 View "**egldGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGetBlock.php)

### Request

> **GET** `/v3/egld/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGetBlock(
    string $hash
): \Tatum\Model\EgldBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or nonce |

### Return type

[**\Tatum\Model\EgldBlock**](../../Model/EgldBlock)

### Description

Get EGLD block by hash

<h4>1 credit per API call.</h4>

 Get EGLD block by block hash or block number. <a href='https://docs.elrond.com/sdk-and-tools/rest-api/blocks/' target='_blank'> EGLD docs </a>

[Back to top](#top)



## `egldGetTransaction()`

### Example

[👉 View "**egldGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGetTransaction.php)

### Request

> **GET** `/v3/egld/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGetTransaction(
    string $hash
): \Tatum\Model\EgldTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\EgldTx**](../../Model/EgldTx)

### Description

Get EGLD Transaction

<h4>1 credit per API call.</h4>

 Get EGLD transaction by transaction hash. Detail result please find here <a href='https://docs.elrond.com/sdk-and-tools/rest-api/transactions/#get-transaction' target='_blank'> EGLD docs </a>

[Back to top](#top)



## `egldGetTransactionAddress()`

### Example

[👉 View "**egldGetTransactionAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGetTransactionAddress.php)

### Request

> **GET** `/v3/egld/transaction/address/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGetTransactionAddress(
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

<h4>1 credit per API call.</h4>

 This endpoint allows one to retrieve the latest 20 transactions sent from an address.

[Back to top](#top)



## `egldGetTransactionCount()`

### Example

[👉 View "**egldGetTransactionCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/egldGetTransactionCount.php)

### Request

> **GET** `/v3/egld/transaction/count/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->egldGetTransactionCount(
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

<h4>1 credit per API call.</h4>

 Get a number of outgoing EGLD transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

[Back to top](#top)



## `transferEgldBlockchain()`

### Example

[👉 View "**transferEgldBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/transferEgldBlockchain.php)

### Request

> **POST** `/v3/egld/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->transferEgldBlockchain(
    \Tatum\Model\TransferEgldBlockchain $transfer_egld_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_egld_blockchain** | [**\Tatum\Model\TransferEgldBlockchain**](../../Model/TransferEgldBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send EGLD from account to account

<h4>2 credits per API call.</h4>

 Send EGLD from account to account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on devnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `transferEgldBlockchainKMS()`

### Example

[👉 View "**transferEgldBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ElrondApi/transferEgldBlockchainKMS.php)

### Request

> **POST** `/v3/egld/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->elrond()->transferEgldBlockchainKMS(
    \Tatum\Model\TransferEgldBlockchainKMS $transfer_egld_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_egld_blockchain_kms** | [**\Tatum\Model\TransferEgldBlockchainKMS**](../../Model/TransferEgldBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send EGLD from account to account

TransferEgldBlockchainKMS operation

[Back to top](#top)

