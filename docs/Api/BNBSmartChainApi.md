# Tatum/Api/BNBSmartChainApi

## References

[BNB Smart Chain API documentation](https://apidoc.tatum.io/tag/BNB-Smart-Chain/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **bscBroadcast()**](#bscbroadcast) 

> Broadcast signed BSC transaction
> 
> **POST** `/v3/bsc/broadcast`

[🔹 **bscGenerateAddress()**](#bscgenerateaddress) 

> Generate BSC account address from Extended public key
> 
> **GET** `/v3/bsc/address/{xpub}/{index}`

[🔹 **bscGenerateAddressPrivateKey()**](#bscgenerateaddressprivatekey) 

> Generate BSC private key
> 
> **POST** `/v3/bsc/wallet/priv`

[🔹 **bscGenerateWallet()**](#bscgeneratewallet) 

> Generate BSC wallet
> 
> **GET** `/v3/bsc/wallet`

[🔹 **bscGetBalance()**](#bscgetbalance) 

> Get BSC Account balance
> 
> **GET** `/v3/bsc/account/balance/{address}`

[🔹 **bscGetBlock()**](#bscgetblock) 

> Get BSC block by hash
> 
> **GET** `/v3/bsc/block/{hash}`

[🔹 **bscGetCurrentBlock()**](#bscgetcurrentblock) 

> Get current block number
> 
> **GET** `/v3/bsc/block/current`

[🔹 **bscGetTransaction()**](#bscgettransaction) 

> Get BSC Transaction
> 
> **GET** `/v3/bsc/transaction/{hash}`

[🔹 **bscGetTransactionCount()**](#bscgettransactioncount) 

> Get count of outgoing BSC transactions
> 
> **GET** `/v3/bsc/transaction/count/{address}`

[🔹 **bscWeb3Driver()**](#bscweb3driver) 

> Web3 HTTP driver
> 
> **POST** `/v3/bsc/web3/{xApiKey}`

[🔹 **callBscSmartContractMethod()**](#callbscsmartcontractmethod) 

> Invoke a method in a smart contract on BNB Smart Chain
> 
> **POST** `/v3/bsc/smartcontract`

[🔹 **callBscSmartContractMethodKMS()**](#callbscsmartcontractmethodkms) 

> Invoke a method in a smart contract on BNB Smart Chain
> 
> **POST** `/v3/bsc/smartcontract`

[🔹 **callBscSmartContractReadMethod()**](#callbscsmartcontractreadmethod) 

> Invoke a method in a smart contract on BNB Smart Chain
> 
> **POST** `/v3/bsc/smartcontract`

[🔹 **transferBscBlockchain()**](#transferbscblockchain) 

> Send BSC / BEP20 from account to account
> 
> **POST** `/v3/bsc/transaction`

[🔹 **transferBscBlockchainKMS()**](#transferbscblockchainkms) 

> Send BSC / BEP20 from account to account
> 
> **POST** `/v3/bsc/transaction`



## `bscBroadcast()`

> **POST** `/v3/bsc/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscBroadcast(
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

Broadcast signed BSC transaction

<p><b>2 credits per API call</b></p>
 <p>Broadcast signed transaction to BSC blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>


### Example

[✨ View "bscBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGenerateAddress()`

> **GET** `/v3/bsc/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGenerateAddress(
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

[**\Tatum\Model\GeneratedAddressBsc**](../Model/GeneratedAddressBsc.md)

### Description

Generate BSC account address from Extended public key

<p><b>1 credit per API call</b></p>
 <p>Generate BSC account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>


### Example

[✨ View "bscGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGenerateAddressPrivateKey()`

> **POST** `/v3/bsc/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGenerateAddressPrivateKey(
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

Generate BSC private key

<p><b>1 credit per API call</b></p>
 <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>


### Example

[✨ View "bscGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGenerateWallet()`

> **GET** `/v3/bsc/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGenerateWallet(
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

Generate BSC wallet

<p><b>1 credit per API call</b></p>
 <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.
Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p>
<p>Tatum follows BIP44 specification and generates for BSC wallet with derivation path m'/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible BSC wallet.</p>


### Example

[✨ View "bscGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGetBalance()`

> **GET** `/v3/bsc/account/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetBalance(
    string $address
): \Tatum\Model\BscBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\BscBalance**](../Model/BscBalance.md)

### Description

Get BSC Account balance

<p><b>1 credit per API call</b></p>
 <p>Get BSC account balance in BNB. This method does not prints any balance of the BEP20 or BEP721 tokens on the account.</p>


### Example

[✨ View "bscGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGetBlock()`

> **GET** `/v3/bsc/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetBlock(
    string $hash
): \Tatum\Model\EthBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

### Description

Get BSC block by hash

<p><b>1 credit per API call</b></p>
 <p>Get BSC block by block hash or block number.</p>


### Example

[✨ View "bscGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGetCurrentBlock()`

> **GET** `/v3/bsc/block/current`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<p><b>1 credit per API call</b></p>
 <p>Get BSC current block number. This is the number of the latest block in the blockchain.</p>


### Example

[✨ View "bscGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGetTransaction()`

> **GET** `/v3/bsc/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetTransaction(
    string $hash
): \Tatum\Model\BscTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BscTx**](../Model/BscTx.md)

### Description

Get BSC Transaction

<p><b>2 credits per API call</b></p>
 <p>Get BSC transaction by transaction hash.</p>


### Example

[✨ View "bscGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscGetTransactionCount()`

> **GET** `/v3/bsc/transaction/count/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscGetTransactionCount(
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

Get count of outgoing BSC transactions

<p><b>1 credit per API call</b></p>
 <p>Get a number of outgoing BSC transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>


### Example

[✨ View "bscGetTransactionCount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscWeb3Driver()`

> **POST** `/v3/bsc/web3/{xApiKey}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->bscWeb3Driver(
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

<p><b>2 credits per API call</b></p>
 <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p>

 <p>Use this endpoint URL as a http-based web3 driver to connect directly to the BSC node provided by Tatum. To learn more about BSC Web3, visit the <a href="https://bsc.org/en/developers/" target="_blank">BSC developer's guide.</a></p>


### Example

[✨ View "bscWeb3Driver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/bscWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callBscSmartContractMethod()`

> **POST** `/v3/bsc/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->callBscSmartContractMethod(
    \Tatum\Model\CallBscSmartContractMethod $call_bsc_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_bsc_smart_contract_method** | [**\Tatum\Model\CallBscSmartContractMethod**](../Model/CallBscSmartContractMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on BNB Smart Chain

CallBscSmartContractMethod operation

### Example

[✨ View "callBscSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/callBscSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callBscSmartContractMethodKMS()`

> **POST** `/v3/bsc/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->callBscSmartContractMethodKMS(
    \Tatum\Model\CallBscSmartContractMethodKMS $call_bsc_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_bsc_smart_contract_method_kms** | [**\Tatum\Model\CallBscSmartContractMethodKMS**](../Model/CallBscSmartContractMethodKMS.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on BNB Smart Chain

CallBscSmartContractMethodKMS operation

### Example

[✨ View "callBscSmartContractMethodKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/callBscSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callBscSmartContractReadMethod()`

> **POST** `/v3/bsc/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->callBscSmartContractReadMethod(
    \Tatum\Model\CallBscSmartContractReadMethod $call_bsc_smart_contract_read_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_bsc_smart_contract_read_method** | [**\Tatum\Model\CallBscSmartContractReadMethod**](../Model/CallBscSmartContractReadMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on BNB Smart Chain

<p><b>2 credits per API call</b></p>
 <p>Invoke a method in an existing smart contract on BNB Smart Chain.</p>
 <p>You can call a read-only or write method.</p>
 <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b>
 Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).
However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p>
 <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p>
 <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p>
 <p><b>Signing a transaction</b>
 When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "callBscSmartContractReadMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/callBscSmartContractReadMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferBscBlockchain()`

> **POST** `/v3/bsc/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->transferBscBlockchain(
    \Tatum\Model\TransferBscBlockchain $transfer_bsc_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_blockchain** | [**\Tatum\Model\TransferBscBlockchain**](../Model/TransferBscBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send BSC / BEP20 from account to account

<p><b>2 credits per API call</b></p>
 <p>Send BNB or Tatum supported BEP20 token from account to account.

 <p><b>Signing a transaction</b></p>
 <p>When sending BNB, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "transferBscBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/transferBscBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferBscBlockchainKMS()`

> **POST** `/v3/bsc/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bNBSmartChain()->transferBscBlockchainKMS(
    \Tatum\Model\TransferBscBlockchainKMS $transfer_bsc_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_blockchain_kms** | [**\Tatum\Model\TransferBscBlockchainKMS**](../Model/TransferBscBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send BSC / BEP20 from account to account

TransferBscBlockchainKMS operation

### Example

[✨ View "transferBscBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BNBSmartChainApi/transferBscBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
