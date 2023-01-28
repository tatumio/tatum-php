---
title: VeChain
parent: API
layout: page
---

# Api/VeChainApi

[VeChain API Reference](https://apidoc.tatum.io/tag/VeChain/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->veChain();

// TestNet API Call
$sdk->testnet()->api()->veChain();
```

## Methods

Method | Description
------------- | -------------
[**transferVetBlockchain()**](#transfervetblockchain) | Send VeChain from account to account
[**transferVetBlockchainKMS()**](#transfervetblockchainkms) | Send VeChain from account to account
[**vetBroadcast()**](#vetbroadcast) | Broadcast signed VeChain transaction
[**vetGenerateAddress()**](#vetgenerateaddress) | Generate VeChain account address from Extended public key
[**vetGenerateAddressPrivateKey()**](#vetgenerateaddressprivatekey) | Generate VeChain private key
[**vetGenerateWallet()**](#vetgeneratewallet) | Generate VeChain wallet
[**vetGetBalance()**](#vetgetbalance) | Get VeChain Account balance
[**vetGetBlock()**](#vetgetblock) | Get VeChain Block by hash
[**vetGetCurrentBlock()**](#vetgetcurrentblock) | Get VeChain current block
[**vetGetEnergy()**](#vetgetenergy) | Get VeChain Account energy (VTHO)
[**vetGetTransaction()**](#vetgettransaction) | Get VeChain Transaction
[**vetGetTransactionReceipt()**](#vetgettransactionreceipt) | Get VeChain Transaction Receipt


## `transferVetBlockchain()`

### Example

[👉 View "**transferVetBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/transferVetBlockchain.php)

### Request

> **POST** `/v3/vet/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->transferVetBlockchain(
    \Tatum\Model\TransferVetBlockchain $transfer_vet_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_vet_blockchain** | [**\Tatum\Model\TransferVetBlockchain**](../../Model/TransferVetBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send VeChain from account to account

<h4>10 credits per API call.</h4>

 Send VET from account to account. Fee for the transaction is paid in VTHO.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `transferVetBlockchainKMS()`

### Example

[👉 View "**transferVetBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/transferVetBlockchainKMS.php)

### Request

> **POST** `/v3/vet/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->transferVetBlockchainKMS(
    \Tatum\Model\TransferVetBlockchainKMS $transfer_vet_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_vet_blockchain_kms** | [**\Tatum\Model\TransferVetBlockchainKMS**](../../Model/TransferVetBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Send VeChain from account to account

TransferVetBlockchainKMS operation

[Back to top](#top)



## `vetBroadcast()`

### Example

[👉 View "**vetBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetBroadcast.php)

### Request

> **POST** `/v3/vet/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetBroadcast(
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

Broadcast signed VeChain transaction

<h4>5 credits per API call.</h4>

 Broadcast signed transaction to VeChain blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `vetGenerateAddress()`

### Example

[👉 View "**vetGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGenerateAddress.php)

### Request

> **GET** `/v3/vet/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\VetGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\VetGenerateAddress200Response**](../../Model/VetGenerateAddress200Response)

### Description

Generate VeChain account address from Extended public key

<h4>5 credits per API call.</h4>

 Generate VeChain account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

[Back to top](#top)



## `vetGenerateAddressPrivateKey()`

### Example

[👉 View "**vetGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/vet/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGenerateAddressPrivateKey(
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

Generate VeChain private key

<h4>5 credits per API call.</h4>

 Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

[Back to top](#top)



## `vetGenerateWallet()`

### Example

[👉 View "**vetGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGenerateWallet.php)

### Request

> **GET** `/v3/vet/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGenerateWallet(
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

Generate VeChain wallet

<h4>5 credits per API call.</h4>

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for VeChain wallet with derivation path m'/44'/818'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible VeChain wallet.

[Back to top](#top)



## `vetGetBalance()`

### Example

[👉 View "**vetGetBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetBalance.php)

### Request

> **GET** `/v3/vet/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGetBalance(
    string $address
): \Tatum\Model\VetGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\VetGetBalance200Response**](../../Model/VetGetBalance200Response)

### Description

Get VeChain Account balance

<h4>5 credits per API call.</h4>

Get VeChain Account balance in VET.

[Back to top](#top)



## `vetGetBlock()`

### Example

[👉 View "**vetGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetBlock.php)

### Request

> **GET** `/v3/vet/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGetBlock(
    string $hash
): \Tatum\Model\VetBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\VetBlock**](../../Model/VetBlock)

### Description

Get VeChain Block by hash

<h4>5 credits per API call.</h4>

Get VeChain Block by block hash or block number.

[Back to top](#top)



## `vetGetCurrentBlock()`

### Example

[👉 View "**vetGetCurrentBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetCurrentBlock.php)

### Request

> **GET** `/v3/vet/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get VeChain current block

<h4>5 credits per API call.</h4>

Get VeChain current block number.

[Back to top](#top)



## `vetGetEnergy()`

### Example

[👉 View "**vetGetEnergy.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetEnergy.php)

### Request

> **GET** `/v3/vet/account/energy/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGetEnergy(
    string $address
): \Tatum\Model\VetGetEnergy200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\VetGetEnergy200Response**](../../Model/VetGetEnergy200Response)

### Description

Get VeChain Account energy (VTHO)

<h4>5 credits per API call.</h4>

Get VeChain Account energy in VTHO. VTHO is used for paying for the transaction fee.

[Back to top](#top)



## `vetGetTransaction()`

### Example

[👉 View "**vetGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetTransaction.php)

### Request

> **GET** `/v3/vet/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGetTransaction(
    string $hash
): \Tatum\Model\VetTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\VetTx**](../../Model/VetTx)

### Description

Get VeChain Transaction

<h4>10 credits per API call.</h4>

Get VeChain Transaction by transaction hash.

[Back to top](#top)



## `vetGetTransactionReceipt()`

### Example

[👉 View "**vetGetTransactionReceipt.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetTransactionReceipt.php)

### Request

> **GET** `/v3/vet/transaction/{hash}/receipt`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->veChain()->vetGetTransactionReceipt(
    string $hash
): \Tatum\Model\VetTxReceipt
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\VetTxReceipt**](../../Model/VetTxReceipt)

### Description

Get VeChain Transaction Receipt

<h4>5 credits per API call.</h4>

 Get VeChain Transaction Receipt by transaction hash. Transaction receipt is available only after transaction is included in the block and contains information about paid fee or created contract address and much more.

[Back to top](#top)

