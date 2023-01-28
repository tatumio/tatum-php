---
title: XinFin
parent: API
layout: page
---

# Api/XinFinApi

[XinFin API Reference](https://apidoc.tatum.io/tag/XinFin/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->xinFin();

// TestNet API Call
$sdk->testnet()->api()->xinFin();
```

## Methods

Method | Description
------------- | -------------
[**callXdcReadSmartContractMethod()**](#callxdcreadsmartcontractmethod) | Invoke a method in a smart contract on XinFin
[**callXdcSmartContractMethod()**](#callxdcsmartcontractmethod) | Invoke a method in a smart contract on XinFin
[**callXdcSmartContractMethodKMS()**](#callxdcsmartcontractmethodkms) | Invoke a method in a smart contract on XinFin
[**transferXdcBlockchain()**](#transferxdcblockchain) | Send XDC / ERC20 from account to account
[**transferXdcBlockchainKMS()**](#transferxdcblockchainkms) | Send XDC / ERC20 from account to account
[**xdcBroadcast()**](#xdcbroadcast) | Broadcast signed XDC transaction
[**xdcGenerateAddress()**](#xdcgenerateaddress) | Generate XDC account address from Extended public key
[**xdcGenerateAddressPrivateKey()**](#xdcgenerateaddressprivatekey) | Generate XDC private key
[**xdcGenerateWallet()**](#xdcgeneratewallet) | Generate XDC wallet
[**xdcGetBalance()**](#xdcgetbalance) | Get XDC Account balance
[**xdcGetBlock()**](#xdcgetblock) | Get XDC block by hash
[**xdcGetCurrentBlock()**](#xdcgetcurrentblock) | Get current block number
[**xdcGetTransaction()**](#xdcgettransaction) | Get XDC Transaction
[**xdcGetTransactionCount()**](#xdcgettransactioncount) | Get count of outgoing XDC transactions


## `callXdcReadSmartContractMethod()`

### Example

[👉 View "**callXdcReadSmartContractMethod.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/callXdcReadSmartContractMethod.php)

### Request

> **POST** `/v3/xdc/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->callXdcReadSmartContractMethod(
    \Tatum\Model\CallXdcReadSmartContractMethod $call_xdc_read_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_xdc_read_smart_contract_method** | [**\Tatum\Model\CallXdcReadSmartContractMethod**](../../Model/CallXdcReadSmartContractMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on XinFin

**2 credits per API call**

 Invoke a method in an existing smart contract on XinFin.

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



## `callXdcSmartContractMethod()`

### Example

[👉 View "**callXdcSmartContractMethod.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/callXdcSmartContractMethod.php)

### Request

> **POST** `/v3/xdc/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->callXdcSmartContractMethod(
    \Tatum\Model\CallXdcSmartContractMethod $call_xdc_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_xdc_smart_contract_method** | [**\Tatum\Model\CallXdcSmartContractMethod**](../../Model/CallXdcSmartContractMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on XinFin

CallXdcSmartContractMethod operation

[Back to top](#top)



## `callXdcSmartContractMethodKMS()`

### Example

[👉 View "**callXdcSmartContractMethodKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/callXdcSmartContractMethodKMS.php)

### Request

> **POST** `/v3/xdc/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->callXdcSmartContractMethodKMS(
    \Tatum\Model\CallXdcSmartContractMethodKMS $call_xdc_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_xdc_smart_contract_method_kms** | [**\Tatum\Model\CallXdcSmartContractMethodKMS**](../../Model/CallXdcSmartContractMethodKMS) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

Invoke a method in a smart contract on XinFin

CallXdcSmartContractMethodKMS operation

[Back to top](#top)



## `transferXdcBlockchain()`

### Example

[👉 View "**transferXdcBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/transferXdcBlockchain.php)

### Request

> **POST** `/v3/xdc/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->transferXdcBlockchain(
    \Tatum\Model\TransferXdcBlockchain $transfer_xdc_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xdc_blockchain** | [**\Tatum\Model\TransferXdcBlockchain**](../../Model/TransferXdcBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XDC / ERC20 from account to account

**2 credits per API call**

 Send XDC or Tatum supported ERC20 token from account to account.

 **Signing a transaction**

 When sending XDC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

 Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `transferXdcBlockchainKMS()`

### Example

[👉 View "**transferXdcBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/transferXdcBlockchainKMS.php)

### Request

> **POST** `/v3/xdc/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->transferXdcBlockchainKMS(
    \Tatum\Model\TransferXdcBlockchainKMS $transfer_xdc_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xdc_blockchain_kms** | [**\Tatum\Model\TransferXdcBlockchainKMS**](../../Model/TransferXdcBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XDC / ERC20 from account to account

TransferXdcBlockchainKMS operation

[Back to top](#top)



## `xdcBroadcast()`

### Example

[👉 View "**xdcBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcBroadcast.php)

### Request

> **POST** `/v3/xdc/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcBroadcast(
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

Broadcast signed XDC transaction

**2 credits per API call**

 Broadcast signed transaction to XDC blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `xdcGenerateAddress()`

### Example

[👉 View "**xdcGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGenerateAddress.php)

### Request

> **GET** `/v3/xdc/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\XdcGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\XdcGenerateAddress200Response**](../../Model/XdcGenerateAddress200Response)

### Description

Generate XDC account address from Extended public key

**1 credit per API call**

 Generate XDC account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.

[Back to top](#top)



## `xdcGenerateAddressPrivateKey()`

### Example

[👉 View "**xdcGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/xdc/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGenerateAddressPrivateKey(
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

Generate XDC private key

**1 credit per API call**

 Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

[Back to top](#top)



## `xdcGenerateWallet()`

### Example

[👉 View "**xdcGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGenerateWallet.php)

### Request

> **GET** `/v3/xdc/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGenerateWallet(
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

Generate XDC wallet

**1 credit per API call**

 Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. 

 Each address is identified by 3 main values: 

<ul><li>Private Key - your secret value, which should never be revealed</li> <li>Public Key - public address to be published</li> <li>Derivation index - index of generated address</li></ul>

 

 Tatum follows BIP44 specification and generates for XDC wallet with derivation path m'/44'/550'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible XDC wallet.

[Back to top](#top)



## `xdcGetBalance()`

### Example

[👉 View "**xdcGetBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetBalance.php)

### Request

> **GET** `/v3/xdc/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGetBalance(
    string $address
): \Tatum\Model\XdcGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XdcGetBalance200Response**](../../Model/XdcGetBalance200Response)

### Description

Get XDC Account balance

**1 credit per API call**

 Get account balance in XDC. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.

[Back to top](#top)



## `xdcGetBlock()`

### Example

[👉 View "**xdcGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetBlock.php)

### Request

> **GET** `/v3/xdc/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGetBlock(
    string $hash
): \Tatum\Model\XdcBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\XdcBlock**](../../Model/XdcBlock)

### Description

Get XDC block by hash

**1 credit per API call**

 Get XDC block by block hash or block number.

[Back to top](#top)



## `xdcGetCurrentBlock()`

### Example

[👉 View "**xdcGetCurrentBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetCurrentBlock.php)

### Request

> **GET** `/v3/xdc/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

**1 credit per API call**

 Get XDC current block number. This is the number of the latest block in the blockchain.

[Back to top](#top)



## `xdcGetTransaction()`

### Example

[👉 View "**xdcGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetTransaction.php)

### Request

> **GET** `/v3/xdc/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGetTransaction(
    string $hash
): \Tatum\Model\XdcTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XdcTx**](../../Model/XdcTx)

### Description

Get XDC Transaction

**2 credits per API call**

 Get XDC transaction by transaction hash.

[Back to top](#top)



## `xdcGetTransactionCount()`

### Example

[👉 View "**xdcGetTransactionCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetTransactionCount.php)

### Request

> **GET** `/v3/xdc/transaction/count/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xinFin()->xdcGetTransactionCount(
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

Get count of outgoing XDC transactions

**1 credit per API call**

 Get a number of outgoing XDC transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

[Back to top](#top)

