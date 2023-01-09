# Tatum/Api/TronApi

* Tron [documentation](https://apidoc.tatum.io/tag/Tron/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**create Tron Trc10 Blockchain()**](#createtrontrc10blockchain) | **POST** `/v3 /tron /trc10 /deploy` | Create a TRC-10 token
[**create Tron Trc10 Blockchain KMS()**](#createtrontrc10blockchainkms) | **POST** `/v3 /tron /trc10 /deploy` | Create a TRC-10 token
[**create Tron Trc20 Blockchain()**](#createtrontrc20blockchain) | **POST** `/v3 /tron /trc20 /deploy` | Create a TRC-20 token
[**create Tron Trc20 Blockchain KMS()**](#createtrontrc20blockchainkms) | **POST** `/v3 /tron /trc20 /deploy` | Create a TRC-20 token
[**freeze Tron()**](#freezetron) | **POST** `/v3 /tron /freezeBalance` | Freeze the balance of a TRON account
[**freeze Tron KMS()**](#freezetronkms) | **POST** `/v3 /tron /freezeBalance` | Freeze the balance of a TRON account
[**generate Tronwallet()**](#generatetronwallet) | **GET** `/v3 /tron /wallet` | Generate a TRON wallet
[**transfer Tron Blockchain()**](#transfertronblockchain) | **POST** `/v3 /tron /transaction` | Send TRX to a TRON account
[**transfer Tron Blockchain KMS()**](#transfertronblockchainkms) | **POST** `/v3 /tron /transaction` | Send TRX to a TRON account
[**transfer Tron Trc10 Blockchain()**](#transfertrontrc10blockchain) | **POST** `/v3 /tron /trc10 /transaction` | Send TRC-10 tokens to a TRON account
[**transfer Tron Trc10 Blockchain KMS()**](#transfertrontrc10blockchainkms) | **POST** `/v3 /tron /trc10 /transaction` | Send TRC-10 tokens to a TRON account
[**transfer Tron Trc20 Blockchain()**](#transfertrontrc20blockchain) | **POST** `/v3 /tron /trc20 /transaction` | Send TRC-20 tokens to a TRON account
[**transfer Tron Trc20 Blockchain KMS()**](#transfertrontrc20blockchainkms) | **POST** `/v3 /tron /trc20 /transaction` | Send TRC-20 tokens to a TRON account
[**tron Account Tx()**](#tronaccounttx) | **GET** `/v3 /tron /transaction /account /{address}` | Get all transactions for a TRON account
[**tron Account Tx20()**](#tronaccounttx20) | **GET** `/v3 /tron /transaction /account /{address} /trc20` | Get TRC-20 transactions for a TRON account
[**tron Broadcast()**](#tronbroadcast) | **POST** `/v3 /tron /broadcast` | Broadcast a TRON transaction
[**tron Generate Address()**](#trongenerateaddress) | **GET** `/v3 /tron /address /{xpub} /{index}` | Generate a TRON address from the wallet's extended public key
[**tron Generate Address Private Key()**](#trongenerateaddressprivatekey) | **POST** `/v3 /tron /wallet /priv` | Generate the private key for a TRON address
[**tron Get Account()**](#trongetaccount) | **GET** `/v3 /tron /account /{address}` | Get the TRON account by its address
[**tron Get Block()**](#trongetblock) | **GET** `/v3 /tron /block /{hash}` | Get a TRON block by its hash or height
[**tron Get Current Block()**](#trongetcurrentblock) | **GET** `/v3 /tron /info` | Get the current TRON block
[**tron Get Transaction()**](#trongettransaction) | **GET** `/v3 /tron /transaction /{hash}` | Get a TRON transaction by its hash
[**tron Trc10 Detail()**](#trontrc10detail) | **GET** `/v3 /tron /trc10 /detail /{idOrOwnerAddress}` | Get information about a TRC-10 token


## `createTronTrc10Blockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->createTronTrc10Blockchain(
    \Tatum\Model\CreateTronTrc10Blockchain $create_tron_trc10_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc10_blockchain** | [**\Tatum\Model\CreateTronTrc10Blockchain**](../Model/CreateTronTrc10Blockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Create a TRC-10 token

<p><b>10 credits per API call</b></p> <p>Create a TRON TRC-10 token.</p> <p>One TRON account can create only one TRC-10 token. The whole supply of the token is transferred to the issuer's account 100 seconds after the token has been created.</p> <p><b>Signing a transaction</b><br/> When creating a TRC-10 token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "createTronTrc10Blockchain.php"](../../examples/Api/TronApi/createTronTrc10Blockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createTronTrc10BlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->createTronTrc10BlockchainKMS(
    \Tatum\Model\CreateTronTrc10BlockchainKMS $create_tron_trc10_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc10_blockchain_kms** | [**\Tatum\Model\CreateTronTrc10BlockchainKMS**](../Model/CreateTronTrc10BlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Create a TRC-10 token

CreateTronTrc10BlockchainKMS operation

### Example

[✨ View "createTronTrc10BlockchainKMS.php"](../../examples/Api/TronApi/createTronTrc10BlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createTronTrc20Blockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->createTronTrc20Blockchain(
    \Tatum\Model\CreateTronTrc20Blockchain $create_tron_trc20_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc20_blockchain** | [**\Tatum\Model\CreateTronTrc20Blockchain**](../Model/CreateTronTrc20Blockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Create a TRC-20 token

<p><b>10 credits per API call</b></p> <p>Create a TRON TRC-20 token.</p> <p><b>Signing a transaction</b><br/> When creating a TRC-20 token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "createTronTrc20Blockchain.php"](../../examples/Api/TronApi/createTronTrc20Blockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createTronTrc20BlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->createTronTrc20BlockchainKMS(
    \Tatum\Model\CreateTronTrc20BlockchainKMS $create_tron_trc20_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_tron_trc20_blockchain_kms** | [**\Tatum\Model\CreateTronTrc20BlockchainKMS**](../Model/CreateTronTrc20BlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Create a TRC-20 token

CreateTronTrc20BlockchainKMS operation

### Example

[✨ View "createTronTrc20BlockchainKMS.php"](../../examples/Api/TronApi/createTronTrc20BlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `freezeTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->freezeTron(
    \Tatum\Model\FreezeTron $freeze_tron
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$freeze_tron** | [**\Tatum\Model\FreezeTron**](../Model/FreezeTron.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Freeze the balance of a TRON account

<p><b>10 credits per API call</b></p> <p>Freeze Tron assets on the address. By freezing assets, you can obtain energy or bandwidth to perform transactions.</p> <p><b>Signing a transaction</b></p> <p>When freezing the balance, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "freezeTron.php"](../../examples/Api/TronApi/freezeTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `freezeTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->freezeTronKMS(
    \Tatum\Model\FreezeTronKMS $freeze_tron_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$freeze_tron_kms** | [**\Tatum\Model\FreezeTronKMS**](../Model/FreezeTronKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Freeze the balance of a TRON account

FreezeTronKMS operation

### Example

[✨ View "freezeTronKMS.php"](../../examples/Api/TronApi/freezeTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateTronwallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->generateTronwallet(
    [ string $mnemonic ]
): \Tatum\Model\TronWallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\TronWallet**](../Model/TronWallet.md)

### Description

Generate a TRON wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Bitcoin wallet with derivation path m'/44'/195'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/tron/bips/blob/master/bip-0044.mediawiki</a>.         Generate BIP44 compatible Tron wallet.</p>

### Example

[✨ View "generateTronwallet.php"](../../examples/Api/TronApi/generateTronwallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferTronBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->transferTronBlockchain(
    \Tatum\Model\TransferTronBlockchain $transfer_tron_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_blockchain** | [**\Tatum\Model\TransferTronBlockchain**](../Model/TransferTronBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRX to a TRON account

<p><b>10 credits per API call</b></p> <p>Send an amount in TRX from address to address.</p> <p><b>Signing a transaction</b></p> <p>When sending TRX to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferTronBlockchain.php"](../../examples/Api/TronApi/transferTronBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferTronBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->transferTronBlockchainKMS(
    \Tatum\Model\TransferTronBlockchainKMS $transfer_tron_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_blockchain_kms** | [**\Tatum\Model\TransferTronBlockchainKMS**](../Model/TransferTronBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRX to a TRON account

TransferTronBlockchainKMS operation

### Example

[✨ View "transferTronBlockchainKMS.php"](../../examples/Api/TronApi/transferTronBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferTronTrc10Blockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->transferTronTrc10Blockchain(
    \Tatum\Model\TransferTronTrc10Blockchain $transfer_tron_trc10_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc10_blockchain** | [**\Tatum\Model\TransferTronTrc10Blockchain**](../Model/TransferTronTrc10Blockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRC-10 tokens to a TRON account

<p><b>10 credits per API call</b></p> <p>Send TRC-10 tokens from address to address.</p> <p><b>Signing a transaction</b></p> <p>When sending TRC-10 tokens to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferTronTrc10Blockchain.php"](../../examples/Api/TronApi/transferTronTrc10Blockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferTronTrc10BlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->transferTronTrc10BlockchainKMS(
    \Tatum\Model\TransferTronTrc10BlockchainKMS $transfer_tron_trc10_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc10_blockchain_kms** | [**\Tatum\Model\TransferTronTrc10BlockchainKMS**](../Model/TransferTronTrc10BlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRC-10 tokens to a TRON account

TransferTronTrc10BlockchainKMS operation

### Example

[✨ View "transferTronTrc10BlockchainKMS.php"](../../examples/Api/TronApi/transferTronTrc10BlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferTronTrc20Blockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->transferTronTrc20Blockchain(
    \Tatum\Model\TransferTronTrc20Blockchain $transfer_tron_trc20_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc20_blockchain** | [**\Tatum\Model\TransferTronTrc20Blockchain**](../Model/TransferTronTrc20Blockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRC-20 tokens to a TRON account

<p><b>10 credits per API call</b></p> <p>Send TRC-20 tokens from address to address.</p> <p><b>Signing a transaction</b></p> <p>When sending TRC-20 tokens to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferTronTrc20Blockchain.php"](../../examples/Api/TronApi/transferTronTrc20Blockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferTronTrc20BlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->transferTronTrc20BlockchainKMS(
    \Tatum\Model\TransferTronTrc20BlockchainKMS $transfer_tron_trc20_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_trc20_blockchain_kms** | [**\Tatum\Model\TransferTronTrc20BlockchainKMS**](../Model/TransferTronTrc20BlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRC-20 tokens to a TRON account

TransferTronTrc20BlockchainKMS operation

### Example

[✨ View "transferTronTrc20BlockchainKMS.php"](../../examples/Api/TronApi/transferTronTrc20BlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronAccountTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronAccountTx(
    string $address,
    [ string $next ]
): \Tatum\Model\TronAccountTx200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | The address of the TRON account to get all transactions for |
 **$next** | **string**  | The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). | [optional]

### Return type

[**\Tatum\Model\TronAccountTx200Response**](../Model/TronAccountTx200Response.md)

### Description

Get all transactions for a TRON account

<p><b>5 credits per API call</b></p> <p>Get all transactions for a TRON account.</p> <p>This API returns up to 200 transactions in one API call. If there are more than 200 transactions for the TRON account, the response body will contain the <code>next</code> parameter with the ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list.</p> <p>To get the next 200 transactions, make another call using this API, but this time add the <code>next</code> parameter the endpoint URL and set it to the transaction ID from the <code>next</code> parameter in the response, for example:</p> <p><code>https://{region}.tatum.io/v3/tron/transaction/account/{address}?next=81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991</code></p>

### Example

[✨ View "tronAccountTx.php"](../../examples/Api/TronApi/tronAccountTx.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronAccountTx20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronAccountTx20(
    string $address,
    [ string $next ]
): \Tatum\Model\TronAccountTx20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | The address of the TRON account to get TRC-20 transactions for |
 **$next** | **string**  | The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). | [optional]

### Return type

[**\Tatum\Model\TronAccountTx20200Response**](../Model/TronAccountTx20200Response.md)

### Description

Get TRC-20 transactions for a TRON account

<p><b>5 credits per API call</b></p> <p>Get TRC-20 transactions for a TRON account.</p> <p>This API returns up to 200 transactions in one API call. If there are more than 200 transactions for the TRON account, the response body will contain the <code>next</code> parameter with the ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list.</p> <p>To get the next 200 transactions, make another call using this API, but this time add the <code>next</code> parameter the endpoint URL and set it to the transaction ID from the <code>next</code> parameter in the response, for example:</p> <p><code>https://{region}.tatum.io/v3/tron/transaction/account/{address}/trc20?next=81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991</code></p>

### Example

[✨ View "tronAccountTx20.php"](../../examples/Api/TronApi/tronAccountTx20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronBroadcast(
    \Tatum\Model\TronBroadcast $tron_broadcast
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_broadcast** | [**\Tatum\Model\TronBroadcast**](../Model/TronBroadcast.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast a TRON transaction

<p><b>5 credits per API call</b></p> <p>Broadcast Tron transaction. This method is used internally from Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "tronBroadcast.php"](../../examples/Api/TronApi/tronBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGenerateAddress(
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

[**\Tatum\Model\TronGenerateAddress200Response**](../Model/TronGenerateAddress200Response.md)

### Description

Generate a TRON address from the wallet's extended public key

<p><b>5 credits per API call</b></p> <p>Generate a TRON address from the extended public key of the wallet. The address is generated for the specific index - each extended public key can generate up to 2^32 addresses with the index starting from 0 up to 2^31.</p>

### Example

[✨ View "tronGenerateAddress.php"](../../examples/Api/TronApi/tronGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGenerateAddressPrivateKey(
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

Generate the private key for a TRON address

<p><b>10 credits per API call</b></p> <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

[✨ View "tronGenerateAddressPrivateKey.php"](../../examples/Api/TronApi/tronGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetAccount(
    string $address
): \Tatum\Model\TronAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address. |

### Return type

[**\Tatum\Model\TronAccount**](../Model/TronAccount.md)

### Description

Get the TRON account by its address

<p><b>5 credits per API call</b></p> <p>Get Tron account by address.</p>

### Example

[✨ View "tronGetAccount.php"](../../examples/Api/TronApi/tronGetAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetBlock(
    string $hash
): \Tatum\Model\TronBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\TronBlock**](../Model/TronBlock.md)

### Description

Get a TRON block by its hash or height

<p><b>5 credits per API call</b></p> <p>Get Tron block by hash or height.</p>

### Example

[✨ View "tronGetBlock.php"](../../examples/Api/TronApi/tronGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetCurrentBlock(
): \Tatum\Model\TronGetCurrentBlock200Response
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\TronGetCurrentBlock200Response**](../Model/TronGetCurrentBlock200Response.md)

### Description

Get the current TRON block

<p><b>5 credits per API call</b></p> <p>Get current Tron block.</p>

### Example

[✨ View "tronGetCurrentBlock.php"](../../examples/Api/TronApi/tronGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetTransaction(
    string $hash
): \Tatum\Model\TronTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash. |

### Return type

[**\Tatum\Model\TronTx**](../Model/TronTx.md)

### Description

Get a TRON transaction by its hash

<p><b>5 credits per API call</b></p> <p>Get Tron transaction by hash.</p>

### Example

[✨ View "tronGetTransaction.php"](../../examples/Api/TronApi/tronGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronTrc10Detail()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronTrc10Detail(
    string $id_or_owner_address
): \Tatum\Model\TronTrc10Detail
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id_or_owner_address** | **string**  | The ID of the TRC-10 token or the address of the token&#39;s owner |

### Return type

[**\Tatum\Model\TronTrc10Detail**](../Model/TronTrc10Detail.md)

### Description

Get information about a TRC-10 token

<p><b>5 credits per API call</b></p> <p>Get information about a TRON TRC-10 token.</p>

### Example

[✨ View "tronTrc10Detail.php"](../../examples/Api/TronApi/tronTrc10Detail.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
