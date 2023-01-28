---
title: Harmony
parent: API
layout: page
---

# Api/HarmonyApi

[Harmony API Reference](https://apidoc.tatum.io/tag/Harmony/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->harmony();

// TestNet API Call
$sdk->testnet()->api()->harmony();
```

## Methods

Method | Description
------------- | -------------
[**callOneReadSmartContractMethod()**](#callonereadsmartcontractmethod) | Invoke a method in a smart contract on Harmony
[**callOneSmartContractMethod()**](#callonesmartcontractmethod) | Invoke a method in a smart contract on Harmony
[**callOneSmartContractMethodKMS()**](#callonesmartcontractmethodkms) | Invoke a method in a smart contract on Harmony
[**oneBroadcast()**](#onebroadcast) | Broadcast signed ONE transaction
[**oneFormatAddress()**](#oneformataddress) | Transform HEX address to Bech32 ONE address format
[**oneGenerateAddress()**](#onegenerateaddress) | Generate ONE account address from Extended public key
[**oneGenerateAddressPrivateKey()**](#onegenerateaddressprivatekey) | Generate ONE private key
[**oneGenerateWallet()**](#onegeneratewallet) | Generate ONE wallet
[**oneGetBalance()**](#onegetbalance) | Get ONE Account balance
[**oneGetBlock()**](#onegetblock) | Get ONE block by hash
[**oneGetCurrentBlock()**](#onegetcurrentblock) | Get current block number
[**oneGetTransaction()**](#onegettransaction) | Get ONE Transaction
[**oneGetTransactionCount()**](#onegettransactioncount) | Get count of outgoing ONE transactions
[**transferOneBlockchain()**](#transferoneblockchain) | Send ONE from account to account
[**transferOneBlockchainKMS()**](#transferoneblockchainkms) | Send ONE from account to account


## `callOneReadSmartContractMethod()`

### Example

[👉 View "**callOneReadSmartContractMethod.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/callOneReadSmartContractMethod.php)

### Request

> **POST** `/v3/one/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->callOneReadSmartContractMethod(
    \Tatum\Model\CallOneReadSmartContractMethod $call_one_read_smart_contract_method,
    [ float $shard_id = 0 ]
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_one_read_smart_contract_method** | [**\Tatum\Model\CallOneReadSmartContractMethod**](../../Model/CallOneReadSmartContractMethod) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on Harmony

**2 credits per API call**

 Invoke a method in an existing smart contract on Harmony.

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



## `callOneSmartContractMethod()`

### Example

[👉 View "**callOneSmartContractMethod.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/callOneSmartContractMethod.php)

### Request

> **POST** `/v3/one/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->callOneSmartContractMethod(
    \Tatum\Model\CallOneSmartContractMethod $call_one_smart_contract_method,
    [ float $shard_id = 0 ]
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_one_smart_contract_method** | [**\Tatum\Model\CallOneSmartContractMethod**](../../Model/CallOneSmartContractMethod) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on Harmony

CallOneSmartContractMethod operation

[Back to top](#top)



## `callOneSmartContractMethodKMS()`

### Example

[👉 View "**callOneSmartContractMethodKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/callOneSmartContractMethodKMS.php)

### Request

> **POST** `/v3/one/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->callOneSmartContractMethodKMS(
    \Tatum\Model\CallOneSmartContractMethodKMS $call_one_smart_contract_method_kms,
    [ float $shard_id = 0 ]
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_one_smart_contract_method_kms** | [**\Tatum\Model\CallOneSmartContractMethodKMS**](../../Model/CallOneSmartContractMethodKMS) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on Harmony

CallOneSmartContractMethodKMS operation

[Back to top](#top)



## `oneBroadcast()`

### Example

[👉 View "**oneBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneBroadcast.php)

### Request

> **POST** `/v3/one/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms,
    [ float $shard_id = 0 ]
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../../Model/BroadcastKMS) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Broadcast signed ONE transaction

**2 credits per API call**

 Broadcast signed transaction to ONE blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `oneFormatAddress()`

### Example

[👉 View "**oneFormatAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneFormatAddress.php)

### Request

> **GET** `/v3/one/address/format/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneFormatAddress(
    string $address
): \Tatum\Model\GeneratedAddressOne
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address in HEX (ETH compatible) format. |

### Return type

[**\Tatum\Model\GeneratedAddressOne**](../../Model/GeneratedAddressOne)

### Description

Transform HEX address to Bech32 ONE address format

**1 credit per API call**

 Transform HEX address to Bech32 format with one prefix.

[Back to top](#top)



## `oneGenerateAddress()`

### Example

[👉 View "**oneGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGenerateAddress.php)

### Request

> **GET** `/v3/one/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\GeneratedAddressOne
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\GeneratedAddressOne**](../../Model/GeneratedAddressOne)

### Description

Generate ONE account address from Extended public key

**1 credit per API call**

 Generate ONE account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.

[Back to top](#top)



## `oneGenerateAddressPrivateKey()`

### Example

[👉 View "**oneGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/one/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGenerateAddressPrivateKey(
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

Generate ONE private key

**1 credit per API call**

 Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

[Back to top](#top)



## `oneGenerateWallet()`

### Example

[👉 View "**oneGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGenerateWallet.php)

### Request

> **GET** `/v3/one/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGenerateWallet(
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

Generate ONE wallet

**1 credit per API call**

 Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for ONE wallet with derivation path m'/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible ONE wallet.

[Back to top](#top)



## `oneGetBalance()`

### Example

[👉 View "**oneGetBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGetBalance.php)

### Request

> **GET** `/v3/one/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGetBalance(
    string $address,
    [ float $shard_id = 0 ]
): \Tatum\Model\OneBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\OneBalance**](../../Model/OneBalance)

### Description

Get ONE Account balance

**1 credit per API call**

 Get ONE account balance in ONE. This method does not prints any balance of the HRM20 or HRM721 tokens on the account.

[Back to top](#top)



## `oneGetBlock()`

### Example

[👉 View "**oneGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGetBlock.php)

### Request

> **GET** `/v3/one/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGetBlock(
    string $hash,
    [ float $shard_id = 0 ]
): \Tatum\Model\EthBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\EthBlock**](../../Model/EthBlock)

### Description

Get ONE block by hash

**1 credit per API call**

 Get ONE block by block hash or block number.

[Back to top](#top)



## `oneGetCurrentBlock()`

### Example

[👉 View "**oneGetCurrentBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGetCurrentBlock.php)

### Request

> **GET** `/v3/one/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGetCurrentBlock(): \Tatum\Model\OneBlockCurrent[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\OneBlockCurrent[]**](../../Model/OneBlockCurrent)

### Description

Get current block number

**1 credit per API call**

 Get ONE current block number. This is the number of the latest block in the blockchain.

[Back to top](#top)



## `oneGetTransaction()`

### Example

[👉 View "**oneGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGetTransaction.php)

### Request

> **GET** `/v3/one/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGetTransaction(
    string $hash,
    [ float $shard_id = 0 ]
): \Tatum\Model\OneTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\OneTx**](../../Model/OneTx)

### Description

Get ONE Transaction

**2 credits per API call**

 Get ONE transaction by transaction hash.

[Back to top](#top)



## `oneGetTransactionCount()`

### Example

[👉 View "**oneGetTransactionCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/oneGetTransactionCount.php)

### Request

> **GET** `/v3/one/transaction/count/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->oneGetTransactionCount(
    string $address,
    [ float $shard_id = 0 ]
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | address |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

**float**

### Description

Get count of outgoing ONE transactions

**1 credit per API call**

 Get a number of outgoing ONE transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

[Back to top](#top)



## `transferOneBlockchain()`

### Example

[👉 View "**transferOneBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/transferOneBlockchain.php)

### Request

> **POST** `/v3/one/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->transferOneBlockchain(
    \Tatum\Model\TransferOneBlockchain $transfer_one_blockchain,
    [ float $shard_id = 0 ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_one_blockchain** | [**\Tatum\Model\TransferOneBlockchain**](../../Model/TransferOneBlockchain) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send ONE from account to account

**2 credits per API call**

 Send ONE from account to account.

 The default shard <code>0</code> is used for the sender and the recipient.

 **Signing a transaction**

 When sending ONE, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

 Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `transferOneBlockchainKMS()`

### Example

[👉 View "**transferOneBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/HarmonyApi/transferOneBlockchainKMS.php)

### Request

> **POST** `/v3/one/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->harmony()->transferOneBlockchainKMS(
    \Tatum\Model\TransferOneBlockchainKMS $transfer_one_blockchain_kms,
    [ float $shard_id = 0 ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_one_blockchain_kms** | [**\Tatum\Model\TransferOneBlockchainKMS**](../../Model/TransferOneBlockchainKMS) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send ONE from account to account

TransferOneBlockchainKMS operation

[Back to top](#top)

