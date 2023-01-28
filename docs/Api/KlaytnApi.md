---
title: Klaytn
parent: API
layout: page
---

# Api/KlaytnApi

[Klaytn API Reference](https://apidoc.tatum.io/tag/Klaytn/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->klaytn();

// TestNet API Call
$sdk->testnet()->api()->klaytn();
```

## Methods

Method | Description
------------- | -------------
[**callKlaytnSmartContractMethod()**](#callklaytnsmartcontractmethod) | Invoke a method in a smart contract on Klaytn
[**callKlaytnSmartContractMethodKMS()**](#callklaytnsmartcontractmethodkms) | Invoke a method in a smart contract on Klaytn
[**callKlaytnSmartContractReadMethod()**](#callklaytnsmartcontractreadmethod) | Invoke a method in a smart contract on Klaytn
[**klaytnBroadcast()**](#klaytnbroadcast) | Broadcast signed Klaytn transaction
[**klaytnGenerateAddress()**](#klaytngenerateaddress) | Generate Klaytn account address from Extended public key
[**klaytnGenerateAddressPrivateKey()**](#klaytngenerateaddressprivatekey) | Generate Klaytn private key
[**klaytnGenerateWallet()**](#klaytngeneratewallet) | Generate Klaytn wallet
[**klaytnGetBalance()**](#klaytngetbalance) | Get Klaytn Account balance
[**klaytnGetBlock()**](#klaytngetblock) | Get Klaytn block by hash
[**klaytnGetCurrentBlock()**](#klaytngetcurrentblock) | Get current block number
[**klaytnGetTransaction()**](#klaytngettransaction) | Get Klaytn Transaction
[**klaytnGetTransactionCount()**](#klaytngettransactioncount) | Get count of outgoing Klaytn transactions
[**transferKlaytnBlockchain()**](#transferklaytnblockchain) | Send KLAY from account to account
[**transferKlaytnBlockchainKMS()**](#transferklaytnblockchainkms) | Send KLAY from account to account


## `callKlaytnSmartContractMethod()`

### Example

[👉 View "**callKlaytnSmartContractMethod.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/callKlaytnSmartContractMethod.php)

### Request

> **POST** `/v3/klaytn/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->callKlaytnSmartContractMethod(
    \Tatum\Model\CallKlaytnSmartContractMethod $call_klaytn_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_klaytn_smart_contract_method** | [**\Tatum\Model\CallKlaytnSmartContractMethod**](../../Model/CallKlaytnSmartContractMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on Klaytn

CallKlaytnSmartContractMethod operation

[Back to top](#top)



## `callKlaytnSmartContractMethodKMS()`

### Example

[👉 View "**callKlaytnSmartContractMethodKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/callKlaytnSmartContractMethodKMS.php)

### Request

> **POST** `/v3/klaytn/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->callKlaytnSmartContractMethodKMS(
    \Tatum\Model\CallKlaytnSmartContractMethodKMS $call_klaytn_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_klaytn_smart_contract_method_kms** | [**\Tatum\Model\CallKlaytnSmartContractMethodKMS**](../../Model/CallKlaytnSmartContractMethodKMS) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on Klaytn

CallKlaytnSmartContractMethodKMS operation

[Back to top](#top)



## `callKlaytnSmartContractReadMethod()`

### Example

[👉 View "**callKlaytnSmartContractReadMethod.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/callKlaytnSmartContractReadMethod.php)

### Request

> **POST** `/v3/klaytn/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->callKlaytnSmartContractReadMethod(
    \Tatum\Model\CallKlaytnSmartContractReadMethod $call_klaytn_smart_contract_read_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_klaytn_smart_contract_read_method** | [**\Tatum\Model\CallKlaytnSmartContractReadMethod**](../../Model/CallKlaytnSmartContractReadMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on Klaytn

**2 credits per API call**

 Invoke a method in an existing smart contract on Klaytn.

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

[Back to top](#top)



## `klaytnBroadcast()`

### Example

[👉 View "**klaytnBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnBroadcast.php)

### Request

> **POST** `/v3/klaytn/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnBroadcast(
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

Broadcast signed Klaytn transaction

**2 credits per API call**

 Broadcast signed transaction to Klaytn blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `klaytnGenerateAddress()`

### Example

[👉 View "**klaytnGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGenerateAddress.php)

### Request

> **GET** `/v3/klaytn/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\KlaytnGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\KlaytnGenerateAddress200Response**](../../Model/KlaytnGenerateAddress200Response)

### Description

Generate Klaytn account address from Extended public key

**1 credit per API call**

 Generate Klaytn account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.

[Back to top](#top)



## `klaytnGenerateAddressPrivateKey()`

### Example

[👉 View "**klaytnGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/klaytn/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGenerateAddressPrivateKey(
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

Generate Klaytn private key

**1 credit per API call**

 Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

[Back to top](#top)



## `klaytnGenerateWallet()`

### Example

[👉 View "**klaytnGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGenerateWallet.php)

### Request

> **GET** `/v3/klaytn/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGenerateWallet(
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

Generate Klaytn wallet

**1 credit per API call**

 Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for Klaytn wallet with derivation path m'/44'/966'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Klaytn wallet.

[Back to top](#top)



## `klaytnGetBalance()`

### Example

[👉 View "**klaytnGetBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetBalance.php)

### Request

> **GET** `/v3/klaytn/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGetBalance(
    string $address
): \Tatum\Model\KlaytnGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\KlaytnGetBalance200Response**](../../Model/KlaytnGetBalance200Response)

### Description

Get Klaytn Account balance

**1 credit per API call**

 Get Klaytn account balance in KLAY. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.

[Back to top](#top)



## `klaytnGetBlock()`

### Example

[👉 View "**klaytnGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetBlock.php)

### Request

> **GET** `/v3/klaytn/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGetBlock(
    string $hash
): \Tatum\Model\KlaytnBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\KlaytnBlock**](../../Model/KlaytnBlock)

### Description

Get Klaytn block by hash

**1 credit per API call**

 Get Klaytn block by block hash or block number.

[Back to top](#top)



## `klaytnGetCurrentBlock()`

### Example

[👉 View "**klaytnGetCurrentBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetCurrentBlock.php)

### Request

> **GET** `/v3/klaytn/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

**1 credit per API call**

 Get Klaytn current block number. This is the number of the latest block in the blockchain.

[Back to top](#top)



## `klaytnGetTransaction()`

### Example

[👉 View "**klaytnGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetTransaction.php)

### Request

> **GET** `/v3/klaytn/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGetTransaction(
    string $hash
): \Tatum\Model\KlaytnTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\KlaytnTx**](../../Model/KlaytnTx)

### Description

Get Klaytn Transaction

**2 credits per API call**

 Get Klaytn transaction by transaction hash.

[Back to top](#top)



## `klaytnGetTransactionCount()`

### Example

[👉 View "**klaytnGetTransactionCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetTransactionCount.php)

### Request

> **GET** `/v3/klaytn/transaction/count/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->klaytnGetTransactionCount(
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

Get count of outgoing Klaytn transactions

**1 credit per API call**

 Get a number of outgoing Klaytn transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

[Back to top](#top)



## `transferKlaytnBlockchain()`

### Example

[👉 View "**transferKlaytnBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/transferKlaytnBlockchain.php)

### Request

> **POST** `/v3/klaytn/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->transferKlaytnBlockchain(
    \Tatum\Model\TransferKlaytnBlockchain $transfer_klaytn_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_klaytn_blockchain** | [**\Tatum\Model\TransferKlaytnBlockchain**](../../Model/TransferKlaytnBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send KLAY from account to account

**2 credits per API call**

 Send KLAY from account to account.

 **Signing a transaction**

 When sending KLAY, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `transferKlaytnBlockchainKMS()`

### Example

[👉 View "**transferKlaytnBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/transferKlaytnBlockchainKMS.php)

### Request

> **POST** `/v3/klaytn/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->klaytn()->transferKlaytnBlockchainKMS(
    \Tatum\Model\TransferKlaytnBlockchainKMS $transfer_klaytn_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_klaytn_blockchain_kms** | [**\Tatum\Model\TransferKlaytnBlockchainKMS**](../../Model/TransferKlaytnBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send KLAY from account to account

TransferKlaytnBlockchainKMS operation

[Back to top](#top)

