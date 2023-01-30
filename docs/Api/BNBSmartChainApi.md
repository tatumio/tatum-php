---
title: BNB Smart Chain
parent: API
layout: page
---

# Api/BNBSmartChainApi

[BNB Smart Chain API Reference](https://apidoc.tatum.io/tag/BNB-Smart-Chain/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->bNBSmartChain();

// TestNet API Call
$sdk->testnet()->api()->bNBSmartChain();
```

## Methods

Method | Description
------------- | -------------
[**bscBroadcast()**](#bscbroadcast) | Broadcast signed BSC transaction
[**bscGenerateAddress()**](#bscgenerateaddress) | Generate BSC account address from Extended public key
[**bscGenerateAddressPrivateKey()**](#bscgenerateaddressprivatekey) | Generate BSC private key
[**bscGenerateWallet()**](#bscgeneratewallet) | Generate BSC wallet
[**bscGetBalance()**](#bscgetbalance) | Get BSC Account balance
[**bscGetBlock()**](#bscgetblock) | Get BSC block by hash
[**bscGetCurrentBlock()**](#bscgetcurrentblock) | Get current block number
[**bscGetTransaction()**](#bscgettransaction) | Get BSC Transaction
[**bscGetTransactionCount()**](#bscgettransactioncount) | Get count of outgoing BSC transactions
[**callBscSmartContractMethod()**](#callbscsmartcontractmethod) | Invoke a method in a smart contract on BNB Smart Chain
[**callBscSmartContractMethodKMS()**](#callbscsmartcontractmethodkms) | Invoke a method in a smart contract on BNB Smart Chain
[**callBscSmartContractReadMethod()**](#callbscsmartcontractreadmethod) | Invoke a method in a smart contract on BNB Smart Chain
[**transferBscBlockchain()**](#transferbscblockchain) | Send BSC / BEP20 from account to account
[**transferBscBlockchainKMS()**](#transferbscblockchainkms) | Send BSC / BEP20 from account to account


## `bscBroadcast()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscBroadcast.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscBroadcast.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/bsc/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscBroadcast(
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

> Broadcast signed BSC transaction

**2 credits per API call**

Broadcast signed transaction to BSC blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGenerateAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGenerateAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGenerateAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/bsc/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\GeneratedAddressBsc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\GeneratedAddressBsc**](../../Model/GeneratedAddressBsc)

### Description

> Generate BSC account address from Extended public key

**1 credit per API call**

Generate BSC account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGenerateAddressPrivateKey()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGenerateAddressPrivateKey.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGenerateAddressPrivateKey.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/bsc/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGenerateAddressPrivateKey(
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

> Generate BSC private key

**1 credit per API call**

Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGenerateWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGenerateWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGenerateWallet.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/bsc/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGenerateWallet(
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

> Generate BSC wallet

**1 credit per API call**

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. Each address is identified by 3 main values:
* Private Key - your secret value, which should never be revealed
* Public Key - public address to be published
* Derivation index - index of generated address

Tatum follows BIP44 specification and generates for BSC wallet with derivation path m'/44'/60'/0'/0\. More about BIP44 HD wallets can be found here - [https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki](https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki). Generate BIP44 compatible BSC wallet.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGetBalance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGetBalance.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetBalance.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/bsc/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetBalance(
    string $address
): \Tatum\Model\BscBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\BscBalance**](../../Model/BscBalance)

### Description

> Get BSC Account balance

**1 credit per API call**

Get BSC account balance in BNB. This method does not prints any balance of the BEP20 or BEP721 tokens on the account.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGetBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGetBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/bsc/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetBlock(
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

> Get BSC block by hash

**1 credit per API call**

Get BSC block by block hash or block number.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGetCurrentBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGetCurrentBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetCurrentBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/bsc/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

> Get current block number

**1 credit per API call**

Get BSC current block number. This is the number of the latest block in the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGetTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGetTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetTransaction.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/bsc/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetTransaction(
    string $hash
): \Tatum\Model\BscTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BscTx**](../../Model/BscTx)

### Description

> Get BSC Transaction

**2 credits per API call**

Get BSC transaction by transaction hash.

[Back to top](#top){: .btn .btn-purple }

---


## `bscGetTransactionCount()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bscGetTransactionCount.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetTransactionCount.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/bsc/transaction/count/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetTransactionCount(
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

> Get count of outgoing BSC transactions

**1 credit per API call**

Get a number of outgoing BSC transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

[Back to top](#top){: .btn .btn-purple }

---


## `callBscSmartContractMethod()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **callBscSmartContractMethod.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/callBscSmartContractMethod.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/bsc/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->callBscSmartContractMethod(
    \Tatum\Model\CallBscSmartContractMethod $call_bsc_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_bsc_smart_contract_method** | [**\Tatum\Model\CallBscSmartContractMethod**](../../Model/CallBscSmartContractMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

> Invoke a method in a smart contract on BNB Smart Chain



[Back to top](#top){: .btn .btn-purple }

---


## `callBscSmartContractMethodKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **callBscSmartContractMethodKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/callBscSmartContractMethodKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/bsc/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->callBscSmartContractMethodKMS(
    \Tatum\Model\CallBscSmartContractMethodKMS $call_bsc_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_bsc_smart_contract_method_kms** | [**\Tatum\Model\CallBscSmartContractMethodKMS**](../../Model/CallBscSmartContractMethodKMS) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

> Invoke a method in a smart contract on BNB Smart Chain



[Back to top](#top){: .btn .btn-purple }

---


## `callBscSmartContractReadMethod()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **callBscSmartContractReadMethod.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/callBscSmartContractReadMethod.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/bsc/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->callBscSmartContractReadMethod(
    \Tatum\Model\CallBscSmartContractReadMethod $call_bsc_smart_contract_read_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_bsc_smart_contract_read_method** | [**\Tatum\Model\CallBscSmartContractReadMethod**](../../Model/CallBscSmartContractReadMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

> Invoke a method in a smart contract on BNB Smart Chain

**2 credits per API call**

Invoke a method in an existing smart contract on BNB Smart Chain.

You can call a read-only or write method.

* For **read-only** methods, the output of the invoked method is returned.
* For **write** methods, the ID of the associated transaction is returned.

**Troubleshooting a failed transaction** Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters). However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.

If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.

For more information about invoking methods in smart contracts, see [this article](https://support.tatum.io/support/solutions/articles/80001052441) on our Support Portal.

**Signing a transaction** When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `transferBscBlockchain()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferBscBlockchain.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/transferBscBlockchain.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/bsc/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->transferBscBlockchain(
    \Tatum\Model\TransferBscBlockchain $transfer_bsc_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_blockchain** | [**\Tatum\Model\TransferBscBlockchain**](../../Model/TransferBscBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send BSC / BEP20 from account to account

**2 credits per API call**

Send BNB or Tatum supported BEP20 token from account to account.

**Signing a transaction**

When sending BNB, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `transferBscBlockchainKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferBscBlockchainKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/transferBscBlockchainKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/bsc/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bNBSmartChain()->transferBscBlockchainKMS(
    \Tatum\Model\TransferBscBlockchainKMS $transfer_bsc_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_blockchain_kms** | [**\Tatum\Model\TransferBscBlockchainKMS**](../../Model/TransferBscBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send BSC / BEP20 from account to account



[Back to top](#top){: .btn .btn-purple }

---
