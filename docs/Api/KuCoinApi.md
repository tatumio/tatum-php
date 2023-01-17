---
title: KuCoin
parent: API
layout: page
---

# Api/KuCoinApi

## References

[KuCoin API documentation](https://apidoc.tatum.io/tag/KuCoin/)

## Methods

Method | Description
------------- | -------------
[**callKcsSmartContractMethod()**](#callkcssmartcontractmethod) | Invoke a method in a smart contract on KuCoin Community Chain
[**callKcsSmartContractMethodKMS()**](#callkcssmartcontractmethodkms) | Invoke a method in a smart contract on KuCoin Community Chain
[**callKcsSmartContractReadMethod()**](#callkcssmartcontractreadmethod) | Invoke a method in a smart contract on KuCoin Community Chain
[**kcsBroadcast()**](#kcsbroadcast) | Broadcast signed Kcs transaction
[**kcsGenerateAddress()**](#kcsgenerateaddress) | Generate Kcs account address from Extended public key
[**kcsGenerateAddressPrivateKey()**](#kcsgenerateaddressprivatekey) | Generate Kcs private key
[**kcsGenerateWallet()**](#kcsgeneratewallet) | Generate Kcs wallet
[**kcsGetBalance()**](#kcsgetbalance) | Get Kcs Account balance
[**kcsGetBlock()**](#kcsgetblock) | Get Kcs block by hash
[**kcsGetCurrentBlock()**](#kcsgetcurrentblock) | Get current block number
[**kcsGetTransaction()**](#kcsgettransaction) | Get Kcs Transaction
[**kcsGetTransactionCount()**](#kcsgettransactioncount) | Get count of outgoing Kcs transactions
[**kcsWeb3Driver()**](#kcsweb3driver) | Web3 HTTP driver
[**transferKcsBlockchain()**](#transferkcsblockchain) | Send KCS from account to account
[**transferKcsBlockchainKMS()**](#transferkcsblockchainkms) | Send KCS from account to account


## `callKcsSmartContractMethod()`

> **POST** `/v3/kcs/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->callKcsSmartContractMethod(
    \Tatum\Model\CallKcsSmartContractMethod $call_kcs_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_kcs_smart_contract_method** | [**\Tatum\Model\CallKcsSmartContractMethod**](../../Model/CallKcsSmartContractMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on KuCoin Community Chain

CallKcsSmartContractMethod operation

### Example

[✨ View "callKcsSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/callKcsSmartContractMethod.php)

[[Back to top]](#top)



## `callKcsSmartContractMethodKMS()`

> **POST** `/v3/kcs/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->callKcsSmartContractMethodKMS(
    \Tatum\Model\CallKcsSmartContractMethodKMS $call_kcs_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_kcs_smart_contract_method_kms** | [**\Tatum\Model\CallKcsSmartContractMethodKMS**](../../Model/CallKcsSmartContractMethodKMS) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on KuCoin Community Chain

CallKcsSmartContractMethodKMS operation

### Example

[✨ View "callKcsSmartContractMethodKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/callKcsSmartContractMethodKMS.php)

[[Back to top]](#top)



## `callKcsSmartContractReadMethod()`

> **POST** `/v3/kcs/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->callKcsSmartContractReadMethod(
    \Tatum\Model\CallKcsSmartContractReadMethod $call_kcs_smart_contract_read_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_kcs_smart_contract_read_method** | [**\Tatum\Model\CallKcsSmartContractReadMethod**](../../Model/CallKcsSmartContractReadMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on KuCoin Community Chain

**2 credits per API call**

 Invoke a method in an existing smart contract on KuCoin Community Chain.

 You can call a read-only or write method.

 

<ul> <li>For **read-only** methods, the output of the invoked method is returned.</li> <li>For **write** methods, the ID of the associated transaction is returned.</li> </ul>

 **Troubleshooting a failed transaction**

 Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).

However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.

 If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.

 For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.

 **Signing a transaction**

 When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "callKcsSmartContractReadMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/callKcsSmartContractReadMethod.php)

[[Back to top]](#top)



## `kcsBroadcast()`

> **POST** `/v3/kcs/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsBroadcast(
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

Broadcast signed Kcs transaction

**2 credits per API call**

 Broadcast signed transaction to Kcs blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

### Example

[✨ View "kcsBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsBroadcast.php)

[[Back to top]](#top)



## `kcsGenerateAddress()`

> **GET** `/v3/kcs/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\KcsGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\KcsGenerateAddress200Response**](../../Model/KcsGenerateAddress200Response)

### Description

Generate Kcs account address from Extended public key

**1 credit per API call**

 Generate Kcs account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.

### Example

[✨ View "kcsGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGenerateAddress.php)

[[Back to top]](#top)



## `kcsGenerateAddressPrivateKey()`

> **POST** `/v3/kcs/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGenerateAddressPrivateKey(
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

Generate Kcs private key

**1 credit per API call**

 Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

### Example

[✨ View "kcsGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGenerateAddressPrivateKey.php)

[[Back to top]](#top)



## `kcsGenerateWallet()`

> **GET** `/v3/kcs/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGenerateWallet(
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

Generate Kcs wallet

**1 credit per API call**

 Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for Kcs wallet with derivation path m'/44'/966'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Kcs wallet.

### Example

[✨ View "kcsGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGenerateWallet.php)

[[Back to top]](#top)



## `kcsGetBalance()`

> **GET** `/v3/kcs/account/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetBalance(
    string $address
): \Tatum\Model\KcsGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\KcsGetBalance200Response**](../../Model/KcsGetBalance200Response)

### Description

Get Kcs Account balance

**1 credit per API call**

 Get Kcs account balance in KCS. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.

### Example

[✨ View "kcsGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGetBalance.php)

[[Back to top]](#top)



## `kcsGetBlock()`

> **GET** `/v3/kcs/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetBlock(
    string $hash
): \Tatum\Model\EthBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\EthBlock**](../../Model/EthBlock)

### Description

Get Kcs block by hash

**1 credit per API call**

 Get Kcs block by block hash or block number.

### Example

[✨ View "kcsGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGetBlock.php)

[[Back to top]](#top)



## `kcsGetCurrentBlock()`

> **GET** `/v3/kcs/block/current`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

**1 credit per API call**

 Get Kcs current block number. This is the number of the latest block in the blockchain.

### Example

[✨ View "kcsGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGetCurrentBlock.php)

[[Back to top]](#top)



## `kcsGetTransaction()`

> **GET** `/v3/kcs/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetTransaction(
    string $hash
): \Tatum\Model\KcsTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\KcsTx**](../../Model/KcsTx)

### Description

Get Kcs Transaction

**2 credits per API call**

 Get Kcs transaction by transaction hash.

### Example

[✨ View "kcsGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGetTransaction.php)

[[Back to top]](#top)



## `kcsGetTransactionCount()`

> **GET** `/v3/kcs/transaction/count/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetTransactionCount(
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

Get count of outgoing Kcs transactions

**1 credit per API call**

 Get a number of outgoing Kcs transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

### Example

[✨ View "kcsGetTransactionCount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsGetTransactionCount.php)

[[Back to top]](#top)



## `kcsWeb3Driver()`

> **POST** `/v3/kcs/web3/{xApiKey}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsWeb3Driver(
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

Web3 HTTP driver

**2 credits per API call**

 **This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.**

 Use this endpoint URL as a http-based web3 driver to connect directly to the Kcs node provided by Tatum. To learn more about Kcs Web3, visit the <a href="https://docs.kcc.io/" target="_blank">Kcs developer's guide</a>.

### Example

[✨ View "kcsWeb3Driver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/kcsWeb3Driver.php)

[[Back to top]](#top)



## `transferKcsBlockchain()`

> **POST** `/v3/kcs/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->transferKcsBlockchain(
    \Tatum\Model\TransferKcsBlockchain $transfer_kcs_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcs_blockchain** | [**\Tatum\Model\TransferKcsBlockchain**](../../Model/TransferKcsBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send KCS from account to account

**2 credits per API call**

 Send KCS from account to account.

 **Signing a transaction**

 When sending KCS, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

 Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferKcsBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/transferKcsBlockchain.php)

[[Back to top]](#top)



## `transferKcsBlockchainKMS()`

> **POST** `/v3/kcs/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->transferKcsBlockchainKMS(
    \Tatum\Model\TransferKcsBlockchainKMS $transfer_kcs_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcs_blockchain_kms** | [**\Tatum\Model\TransferKcsBlockchainKMS**](../../Model/TransferKcsBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send KCS from account to account

TransferKcsBlockchainKMS operation

### Example

[✨ View "transferKcsBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KuCoinApi/transferKcsBlockchainKMS.php)

[[Back to top]](#top)

