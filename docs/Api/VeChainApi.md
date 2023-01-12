# Tatum/Api/VeChainApi

## References

[VeChain API documentation](https://apidoc.tatum.io/tag/VeChain/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **transferVetBlockchain()**](#transfervetblockchain) 

> Send VeChain from account to account
> 
> **POST** `/v3/vet/transaction`

[🔹 **transferVetBlockchainKMS()**](#transfervetblockchainkms) 

> Send VeChain from account to account
> 
> **POST** `/v3/vet/transaction`

[🔹 **vetBroadcast()**](#vetbroadcast) 

> Broadcast signed VeChain transaction
> 
> **POST** `/v3/vet/broadcast`

[🔹 **vetGenerateAddress()**](#vetgenerateaddress) 

> Generate VeChain account address from Extended public key
> 
> **GET** `/v3/vet/address/{xpub}/{index}`

[🔹 **vetGenerateAddressPrivateKey()**](#vetgenerateaddressprivatekey) 

> Generate VeChain private key
> 
> **POST** `/v3/vet/wallet/priv`

[🔹 **vetGenerateWallet()**](#vetgeneratewallet) 

> Generate VeChain wallet
> 
> **GET** `/v3/vet/wallet`

[🔹 **vetGetBalance()**](#vetgetbalance) 

> Get VeChain Account balance
> 
> **GET** `/v3/vet/account/balance/{address}`

[🔹 **vetGetBlock()**](#vetgetblock) 

> Get VeChain Block by hash
> 
> **GET** `/v3/vet/block/{hash}`

[🔹 **vetGetCurrentBlock()**](#vetgetcurrentblock) 

> Get VeChain current block
> 
> **GET** `/v3/vet/block/current`

[🔹 **vetGetEnergy()**](#vetgetenergy) 

> Get VeChain Account energy (VTHO)
> 
> **GET** `/v3/vet/account/energy/{address}`

[🔹 **vetGetTransaction()**](#vetgettransaction) 

> Get VeChain Transaction
> 
> **GET** `/v3/vet/transaction/{hash}`

[🔹 **vetGetTransactionReceipt()**](#vetgettransactionreceipt) 

> Get VeChain Transaction Receipt
> 
> **GET** `/v3/vet/transaction/{hash}/receipt`



## `transferVetBlockchain()`

> **POST** `/v3/vet/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->transferVetBlockchain(
    \Tatum\Model\TransferVetBlockchain $transfer_vet_blockchain
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_vet_blockchain** | [**\Tatum\Model\TransferVetBlockchain**](../Model/TransferVetBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send VeChain from account to account

<h4>10 credits per API call.</h4>

 Send VET from account to account. Fee for the transaction is paid in VTHO.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferVetBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/transferVetBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferVetBlockchainKMS()`

> **POST** `/v3/vet/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->transferVetBlockchainKMS(
    \Tatum\Model\TransferVetBlockchainKMS $transfer_vet_blockchain_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_vet_blockchain_kms** | [**\Tatum\Model\TransferVetBlockchainKMS**](../Model/TransferVetBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send VeChain from account to account

TransferVetBlockchainKMS operation

### Example

[✨ View "transferVetBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/transferVetBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetBroadcast()`

> **POST** `/v3/vet/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetBroadcast(
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

Broadcast signed VeChain transaction

<h4>5 credits per API call.</h4>

 Broadcast signed transaction to VeChain blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

### Example

[✨ View "vetBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGenerateAddress()`

> **GET** `/v3/vet/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGenerateAddress(
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

[**\Tatum\Model\VetGenerateAddress200Response**](../Model/VetGenerateAddress200Response.md)

### Description

Generate VeChain account address from Extended public key

<h4>5 credits per API call.</h4>

 Generate VeChain account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

### Example

[✨ View "vetGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGenerateAddressPrivateKey()`

> **POST** `/v3/vet/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGenerateAddressPrivateKey(
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

Generate VeChain private key

<h4>5 credits per API call.</h4>

 Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

### Example

[✨ View "vetGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGenerateWallet()`

> **GET** `/v3/vet/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

### Description

Generate VeChain wallet

<h4>5 credits per API call.</h4>

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for VeChain wallet with derivation path m'/44'/818'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible VeChain wallet.

### Example

[✨ View "vetGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetBalance()`

> **GET** `/v3/vet/account/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetBalance(
    string $address
): \Tatum\Model\VetGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\VetGetBalance200Response**](../Model/VetGetBalance200Response.md)

### Description

Get VeChain Account balance

<h4>5 credits per API call.</h4>

Get VeChain Account balance in VET.

### Example

[✨ View "vetGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetBlock()`

> **GET** `/v3/vet/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetBlock(
    string $hash
): \Tatum\Model\VetBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\VetBlock**](../Model/VetBlock.md)

### Description

Get VeChain Block by hash

<h4>5 credits per API call.</h4>

Get VeChain Block by block hash or block number.

### Example

[✨ View "vetGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetCurrentBlock()`

> **GET** `/v3/vet/block/current`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get VeChain current block

<h4>5 credits per API call.</h4>

Get VeChain current block number.

### Example

[✨ View "vetGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetEnergy()`

> **GET** `/v3/vet/account/energy/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetEnergy(
    string $address
): \Tatum\Model\VetGetEnergy200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\VetGetEnergy200Response**](../Model/VetGetEnergy200Response.md)

### Description

Get VeChain Account energy (VTHO)

<h4>5 credits per API call.</h4>

Get VeChain Account energy in VTHO. VTHO is used for paying for the transaction fee.

### Example

[✨ View "vetGetEnergy.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetEnergy.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetTransaction()`

> **GET** `/v3/vet/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetTransaction(
    string $hash
): \Tatum\Model\VetTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\VetTx**](../Model/VetTx.md)

### Description

Get VeChain Transaction

<h4>10 credits per API call.</h4>

Get VeChain Transaction by transaction hash.

### Example

[✨ View "vetGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetTransactionReceipt()`

> **GET** `/v3/vet/transaction/{hash}/receipt`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetTransactionReceipt(
    string $hash
): \Tatum\Model\VetTxReceipt
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\VetTxReceipt**](../Model/VetTxReceipt.md)

### Description

Get VeChain Transaction Receipt

<h4>5 credits per API call.</h4>

 Get VeChain Transaction Receipt by transaction hash. Transaction receipt is available only after transaction is included in the block and contains information about paid fee or created contract address and much more.

### Example

[✨ View "vetGetTransactionReceipt.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VeChainApi/vetGetTransactionReceipt.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
