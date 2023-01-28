---
title: Tron
parent: API
layout: page
---

# Api/TronApi

[Tron API Reference](https://apidoc.tatum.io/tag/Tron/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->tron();

// TestNet API Call
$sdk->testnet()->api()->tron();
```

## Methods

Method | Description
------------- | -------------
[**createTronTrc10Blockchain()**](#createtrontrc10blockchain) | Create a TRC-10 token
[**createTronTrc10BlockchainKMS()**](#createtrontrc10blockchainkms) | Create a TRC-10 token
[**createTronTrc20Blockchain()**](#createtrontrc20blockchain) | Create a TRC-20 token
[**createTronTrc20BlockchainKMS()**](#createtrontrc20blockchainkms) | Create a TRC-20 token
[**freezeTron()**](#freezetron) | Freeze the balance of a TRON account
[**freezeTronKMS()**](#freezetronkms) | Freeze the balance of a TRON account
[**generateTronwallet()**](#generatetronwallet) | Generate a TRON wallet
[**transferTronBlockchain()**](#transfertronblockchain) | Send TRX to a TRON account
[**transferTronBlockchainKMS()**](#transfertronblockchainkms) | Send TRX to a TRON account
[**transferTronTrc10Blockchain()**](#transfertrontrc10blockchain) | Send TRC-10 tokens to a TRON account
[**transferTronTrc10BlockchainKMS()**](#transfertrontrc10blockchainkms) | Send TRC-10 tokens to a TRON account
[**transferTronTrc20Blockchain()**](#transfertrontrc20blockchain) | Send TRC-20 tokens to a TRON account
[**transferTronTrc20BlockchainKMS()**](#transfertrontrc20blockchainkms) | Send TRC-20 tokens to a TRON account
[**tronAccountTx()**](#tronaccounttx) | Get all transactions for a TRON account
[**tronAccountTx20()**](#tronaccounttx20) | Get TRC-20 transactions for a TRON account
[**tronBroadcast()**](#tronbroadcast) | Broadcast a TRON transaction
[**tronGenerateAddress()**](#trongenerateaddress) | Generate a TRON address from the wallet's extended public key
[**tronGenerateAddressPrivateKey()**](#trongenerateaddressprivatekey) | Generate the private key for a TRON address
[**tronGetAccount()**](#trongetaccount) | Get the TRON account by its address
[**tronGetBlock()**](#trongetblock) | Get a TRON block by its hash or height
[**tronGetCurrentBlock()**](#trongetcurrentblock) | Get the current TRON block
[**tronGetTransaction()**](#trongettransaction) | Get a TRON transaction by its hash
[**tronTrc10Detail()**](#trontrc10detail) | Get information about a TRC-10 token


## `createTronTrc10Blockchain()`

### Example

[👉 View "**createTronTrc10Blockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/createTronTrc10Blockchain.php)

### Request

> **POST** `/v3/tron/trc10/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->createTronTrc10Blockchain(
    \Tatum\Model\CreateTronTrc10Blockchain $create_tron_trc10_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc10_blockchain** | [**\Tatum\Model\CreateTronTrc10Blockchain**](../../Model/CreateTronTrc10Blockchain) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Create a TRC-10 token

**10 credits per API call**

 Create a TRON TRC-10 token.

 One TRON account can create only one TRC-10 token. The whole supply of the token is transferred to the issuer's account 100 seconds after the token has been created.

 **Signing a transaction**

 When creating a TRC-10 token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `createTronTrc10BlockchainKMS()`

### Example

[👉 View "**createTronTrc10BlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/createTronTrc10BlockchainKMS.php)

### Request

> **POST** `/v3/tron/trc10/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->createTronTrc10BlockchainKMS(
    \Tatum\Model\CreateTronTrc10BlockchainKMS $create_tron_trc10_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc10_blockchain_kms** | [**\Tatum\Model\CreateTronTrc10BlockchainKMS**](../../Model/CreateTronTrc10BlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Create a TRC-10 token

CreateTronTrc10BlockchainKMS operation

[Back to top](#top)



## `createTronTrc20Blockchain()`

### Example

[👉 View "**createTronTrc20Blockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/createTronTrc20Blockchain.php)

### Request

> **POST** `/v3/tron/trc20/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->createTronTrc20Blockchain(
    \Tatum\Model\CreateTronTrc20Blockchain $create_tron_trc20_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc20_blockchain** | [**\Tatum\Model\CreateTronTrc20Blockchain**](../../Model/CreateTronTrc20Blockchain) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Create a TRC-20 token

**10 credits per API call**

 Create a TRON TRC-20 token.

 **Signing a transaction**

 When creating a TRC-20 token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `createTronTrc20BlockchainKMS()`

### Example

[👉 View "**createTronTrc20BlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/createTronTrc20BlockchainKMS.php)

### Request

> **POST** `/v3/tron/trc20/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->createTronTrc20BlockchainKMS(
    \Tatum\Model\CreateTronTrc20BlockchainKMS $create_tron_trc20_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc20_blockchain_kms** | [**\Tatum\Model\CreateTronTrc20BlockchainKMS**](../../Model/CreateTronTrc20BlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Create a TRC-20 token

CreateTronTrc20BlockchainKMS operation

[Back to top](#top)



## `freezeTron()`

### Example

[👉 View "**freezeTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/freezeTron.php)

### Request

> **POST** `/v3/tron/freezeBalance`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->freezeTron(
    \Tatum\Model\FreezeTron $freeze_tron
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$freeze_tron** | [**\Tatum\Model\FreezeTron**](../../Model/FreezeTron) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Freeze the balance of a TRON account

**10 credits per API call**

 Freeze Tron assets on the address. By freezing assets, you can obtain energy or bandwidth to perform transactions.

 **Signing a transaction**

 When freezing the balance, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `freezeTronKMS()`

### Example

[👉 View "**freezeTronKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/freezeTronKMS.php)

### Request

> **POST** `/v3/tron/freezeBalance`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->freezeTronKMS(
    \Tatum\Model\FreezeTronKMS $freeze_tron_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$freeze_tron_kms** | [**\Tatum\Model\FreezeTronKMS**](../../Model/FreezeTronKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Freeze the balance of a TRON account

FreezeTronKMS operation

[Back to top](#top)



## `generateTronwallet()`

### Example

[👉 View "**generateTronwallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/generateTronwallet.php)

### Request

> **GET** `/v3/tron/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->generateTronwallet(
    [ string $mnemonic ]
): \Tatum\Model\TronWallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\TronWallet**](../../Model/TronWallet)

### Description

Generate a TRON wallet

**1 credit per API call**

 Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for Bitcoin wallet with derivation path m'/44'/195'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/tron/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Tron wallet.

[Back to top](#top)



## `transferTronBlockchain()`

### Example

[👉 View "**transferTronBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/transferTronBlockchain.php)

### Request

> **POST** `/v3/tron/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->transferTronBlockchain(
    \Tatum\Model\TransferTronBlockchain $transfer_tron_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_blockchain** | [**\Tatum\Model\TransferTronBlockchain**](../../Model/TransferTronBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send TRX to a TRON account

**10 credits per API call**

 Send an amount in TRX from address to address.

 **Signing a transaction**

 When sending TRX to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `transferTronBlockchainKMS()`

### Example

[👉 View "**transferTronBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/transferTronBlockchainKMS.php)

### Request

> **POST** `/v3/tron/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->transferTronBlockchainKMS(
    \Tatum\Model\TransferTronBlockchainKMS $transfer_tron_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_blockchain_kms** | [**\Tatum\Model\TransferTronBlockchainKMS**](../../Model/TransferTronBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send TRX to a TRON account

TransferTronBlockchainKMS operation

[Back to top](#top)



## `transferTronTrc10Blockchain()`

### Example

[👉 View "**transferTronTrc10Blockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/transferTronTrc10Blockchain.php)

### Request

> **POST** `/v3/tron/trc10/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->transferTronTrc10Blockchain(
    \Tatum\Model\TransferTronTrc10Blockchain $transfer_tron_trc10_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc10_blockchain** | [**\Tatum\Model\TransferTronTrc10Blockchain**](../../Model/TransferTronTrc10Blockchain) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send TRC-10 tokens to a TRON account

**10 credits per API call**

 Send TRC-10 tokens from address to address.

 **Signing a transaction**

 When sending TRC-10 tokens to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `transferTronTrc10BlockchainKMS()`

### Example

[👉 View "**transferTronTrc10BlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/transferTronTrc10BlockchainKMS.php)

### Request

> **POST** `/v3/tron/trc10/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->transferTronTrc10BlockchainKMS(
    \Tatum\Model\TransferTronTrc10BlockchainKMS $transfer_tron_trc10_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc10_blockchain_kms** | [**\Tatum\Model\TransferTronTrc10BlockchainKMS**](../../Model/TransferTronTrc10BlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send TRC-10 tokens to a TRON account

TransferTronTrc10BlockchainKMS operation

[Back to top](#top)



## `transferTronTrc20Blockchain()`

### Example

[👉 View "**transferTronTrc20Blockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/transferTronTrc20Blockchain.php)

### Request

> **POST** `/v3/tron/trc20/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->transferTronTrc20Blockchain(
    \Tatum\Model\TransferTronTrc20Blockchain $transfer_tron_trc20_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc20_blockchain** | [**\Tatum\Model\TransferTronTrc20Blockchain**](../../Model/TransferTronTrc20Blockchain) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send TRC-20 tokens to a TRON account

**10 credits per API call**

 Send TRC-20 tokens from address to address.

 **Signing a transaction**

 When sending TRC-20 tokens to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `transferTronTrc20BlockchainKMS()`

### Example

[👉 View "**transferTronTrc20BlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/transferTronTrc20BlockchainKMS.php)

### Request

> **POST** `/v3/tron/trc20/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->transferTronTrc20BlockchainKMS(
    \Tatum\Model\TransferTronTrc20BlockchainKMS $transfer_tron_trc20_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc20_blockchain_kms** | [**\Tatum\Model\TransferTronTrc20BlockchainKMS**](../../Model/TransferTronTrc20BlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send TRC-20 tokens to a TRON account

TransferTronTrc20BlockchainKMS operation

[Back to top](#top)



## `tronAccountTx()`

### Example

[👉 View "**tronAccountTx.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronAccountTx.php)

### Request

> **GET** `/v3/tron/transaction/account/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronAccountTx(
    string $address,
    [ string $next ]
): \Tatum\Model\TronAccountTx200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | The address of the TRON account to get all transactions for |
 **$next** | **string**  | The fingerprint of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). | [optional]

### Return type

[**\Tatum\Model\TronAccountTx200Response**](../../Model/TronAccountTx200Response)

### Description

Get all transactions for a TRON account

**5 credits per API call**

 Get all transactions for a TRON account.

 This API returns up to 200 transactions in one API call. If there are more than 200 transactions for the TRON account, the response body will contain the <code>next</code> parameter with the fingerprint of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list.

 To get the next 200 transactions, make another call using this API, but this time add the <code>next</code> parameter the endpoint URL and set it to the transaction fingerprint from the <code>next</code> parameter in the response, for example:

 <code>https://api.tatum.io/v3/tron/transaction/account/{address}?next=81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991</code>

[Back to top](#top)



## `tronAccountTx20()`

### Example

[👉 View "**tronAccountTx20.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronAccountTx20.php)

### Request

> **GET** `/v3/tron/transaction/account/{address}/trc20`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronAccountTx20(
    string $address,
    [ string $next ]
): \Tatum\Model\TronAccountTx20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | The address of the TRON account to get TRC-20 transactions for |
 **$next** | **string**  | The fingerprint of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). | [optional]

### Return type

[**\Tatum\Model\TronAccountTx20200Response**](../../Model/TronAccountTx20200Response)

### Description

Get TRC-20 transactions for a TRON account

**5 credits per API call**

 Get TRC-20 transactions for a TRON account.

 This API returns up to 200 transactions in one API call. If there are more than 200 transactions for the TRON account, the response body will contain the <code>next</code> parameter with the fingerprint of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list.

 To get the next 200 transactions, make another call using this API, but this time add the <code>next</code> parameter the endpoint URL and set it to the transaction fingerprint from the <code>next</code> parameter in the response, for example:

 <code>https://api.tatum.io/v3/tron/transaction/account/{address}/trc20?next=81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991</code>

[Back to top](#top)



## `tronBroadcast()`

### Example

[👉 View "**tronBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronBroadcast.php)

### Request

> **POST** `/v3/tron/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronBroadcast(
    \Tatum\Model\TronBroadcast $tron_broadcast
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_broadcast** | [**\Tatum\Model\TronBroadcast**](../../Model/TronBroadcast) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Broadcast a TRON transaction

**5 credits per API call**

 Broadcast Tron transaction. This method is used internally from Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `tronGenerateAddress()`

### Example

[👉 View "**tronGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronGenerateAddress.php)

### Request

> **GET** `/v3/tron/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\TronGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | The extended public key of the wallet; can be in the base58 format (111 characters) or the hexadecimal format (130 characters) |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\TronGenerateAddress200Response**](../../Model/TronGenerateAddress200Response)

### Description

Generate a TRON address from the wallet's extended public key

**5 credits per API call**

 Generate a TRON address from the extended public key of the wallet. The address is generated for the specific index - each extended public key can generate up to 2^32 addresses with the index starting from 0 up to 2^31.

[Back to top](#top)



## `tronGenerateAddressPrivateKey()`

### Example

[👉 View "**tronGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/tron/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronGenerateAddressPrivateKey(
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

Generate the private key for a TRON address

**10 credits per API call**

 Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

[Back to top](#top)



## `tronGetAccount()`

### Example

[👉 View "**tronGetAccount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronGetAccount.php)

### Request

> **GET** `/v3/tron/account/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronGetAccount(
    string $address
): \Tatum\Model\TronAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address. |

### Return type

[**\Tatum\Model\TronAccount**](../../Model/TronAccount)

### Description

Get the TRON account by its address

**5 credits per API call**

 Get Tron account by address.

[Back to top](#top)



## `tronGetBlock()`

### Example

[👉 View "**tronGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronGetBlock.php)

### Request

> **GET** `/v3/tron/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronGetBlock(
    string $hash
): \Tatum\Model\TronBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\TronBlock**](../../Model/TronBlock)

### Description

Get a TRON block by its hash or height

**5 credits per API call**

 Get Tron block by hash or height.

[Back to top](#top)



## `tronGetCurrentBlock()`

### Example

[👉 View "**tronGetCurrentBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronGetCurrentBlock.php)

### Request

> **GET** `/v3/tron/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronGetCurrentBlock(): \Tatum\Model\TronGetCurrentBlock200Response
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\TronGetCurrentBlock200Response**](../../Model/TronGetCurrentBlock200Response)

### Description

Get the current TRON block

**5 credits per API call**

 Get current Tron block.

[Back to top](#top)



## `tronGetTransaction()`

### Example

[👉 View "**tronGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronGetTransaction.php)

### Request

> **GET** `/v3/tron/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronGetTransaction(
    string $hash
): \Tatum\Model\TronTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash. |

### Return type

[**\Tatum\Model\TronTx**](../../Model/TronTx)

### Description

Get a TRON transaction by its hash

**5 credits per API call**

 Get Tron transaction by hash.

[Back to top](#top)



## `tronTrc10Detail()`

### Example

[👉 View "**tronTrc10Detail.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TronApi/tronTrc10Detail.php)

### Request

> **GET** `/v3/tron/trc10/detail/{idOrOwnerAddress}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->tron()->tronTrc10Detail(
    string $id_or_owner_address
): \Tatum\Model\TronTrc10Detail
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id_or_owner_address** | **string**  | The ID of the TRC-10 token or the address of the token&#39;s owner |

### Return type

[**\Tatum\Model\TronTrc10Detail**](../../Model/TronTrc10Detail)

### Description

Get information about a TRC-10 token

**5 credits per API call**

 Get information about a TRON TRC-10 token.

[Back to top](#top)

