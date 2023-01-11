# Tatum/Api/PolygonApi

## References

[Polygon API documentation](https://apidoc.tatum.io/tag/Polygon/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **callPolygonSmartContractMethod()**](#callpolygonsmartcontractmethod) 

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **callPolygonSmartContractMethodCaller()**](#callpolygonsmartcontractmethodcaller) 

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **callPolygonSmartContractMethodKMS()**](#callpolygonsmartcontractmethodkms) 

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **callPolygonSmartContractReadMethod()**](#callpolygonsmartcontractreadmethod) 

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **polygonBroadcast()**](#polygonbroadcast) 

> **POST** `/v3/polygon/broadcast`
> 
> Broadcast signed Polygon transaction

[🔹 **polygonGenerateAddress()**](#polygongenerateaddress) 

> **GET** `/v3/polygon/address/{xpub}/{index}`
> 
> Generate Polygon account address from Extended public key

[🔹 **polygonGenerateAddressPrivateKey()**](#polygongenerateaddressprivatekey) 

> **POST** `/v3/polygon/wallet/priv`
> 
> Generate Polygon private key

[🔹 **polygonGenerateWallet()**](#polygongeneratewallet) 

> **GET** `/v3/polygon/wallet`
> 
> Generate Polygon wallet

[🔹 **polygonGetBalance()**](#polygongetbalance) 

> **GET** `/v3/polygon/account/balance/{address}`
> 
> Get Polygon Account balance

[🔹 **polygonGetBlock()**](#polygongetblock) 

> **GET** `/v3/polygon/block/{hash}`
> 
> Get Polygon block by hash

[🔹 **polygonGetCurrentBlock()**](#polygongetcurrentblock) 

> **GET** `/v3/polygon/block/current`
> 
> Get current block number

[🔹 **polygonGetTransaction()**](#polygongettransaction) 

> **GET** `/v3/polygon/transaction/{hash}`
> 
> Get Polygon Transaction

[🔹 **polygonGetTransactionByAddress()**](#polygongettransactionbyaddress) 

> **GET** `/v3/polygon/account/transaction/{address}`
> 
> Get Polygon transactions by address

[🔹 **polygonGetTransactionCount()**](#polygongettransactioncount) 

> **GET** `/v3/polygon/transaction/count/{address}`
> 
> Get count of outgoing Polygon transactions

[🔹 **polygonWeb3Driver()**](#polygonweb3driver) 

> **POST** `/v3/polygon/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **transferPolygonBlockchain()**](#transferpolygonblockchain) 

> **POST** `/v3/polygon/transaction`
> 
> Send MATIC from account to account

[🔹 **transferPolygonBlockchainKMS()**](#transferpolygonblockchainkms) 

> **POST** `/v3/polygon/transaction`
> 
> Send MATIC from account to account



## `callPolygonSmartContractMethod()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->callPolygonSmartContractMethod(
    \Tatum\Model\CallPolygonSmartContractMethod $call_polygon_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_polygon_smart_contract_method** | [**\Tatum\Model\CallPolygonSmartContractMethod**](../Model/CallPolygonSmartContractMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Polygon

CallPolygonSmartContractMethod operation

### Example

[✨ View "callPolygonSmartContractMethod.php"](../../examples/Api/PolygonApi/callPolygonSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callPolygonSmartContractMethodCaller()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->callPolygonSmartContractMethodCaller(
    \Tatum\Model\CallPolygonSmartContractMethodCaller $call_polygon_smart_contract_method_caller
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_polygon_smart_contract_method_caller** | [**\Tatum\Model\CallPolygonSmartContractMethodCaller**](../Model/CallPolygonSmartContractMethodCaller.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Polygon

CallPolygonSmartContractMethodCaller operation

### Example

[✨ View "callPolygonSmartContractMethodCaller.php"](../../examples/Api/PolygonApi/callPolygonSmartContractMethodCaller.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callPolygonSmartContractMethodKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->callPolygonSmartContractMethodKMS(
    \Tatum\Model\CallPolygonSmartContractMethodKMS $call_polygon_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_polygon_smart_contract_method_kms** | [**\Tatum\Model\CallPolygonSmartContractMethodKMS**](../Model/CallPolygonSmartContractMethodKMS.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Polygon

CallPolygonSmartContractMethodKMS operation

### Example

[✨ View "callPolygonSmartContractMethodKMS.php"](../../examples/Api/PolygonApi/callPolygonSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callPolygonSmartContractReadMethod()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->callPolygonSmartContractReadMethod(
    \Tatum\Model\CallPolygonSmartContractReadMethod $call_polygon_smart_contract_read_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_polygon_smart_contract_read_method** | [**\Tatum\Model\CallPolygonSmartContractReadMethod**](../Model/CallPolygonSmartContractReadMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Polygon

<b><p>2 credits per API call</p></b> <p>Invoke a method in an existing smart contract on Polygon.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>If <b>caller</b> field is present instead of the private key, Tatum will sign the transaction with the managed private key connected to the caller address. This is applicable only for paid mainnet plans and all testnet plans. Keep in mind that the caller address must have enough access right to perform the action in the smart contract method.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "callPolygonSmartContractReadMethod.php"](../../examples/Api/PolygonApi/callPolygonSmartContractReadMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonBroadcast(
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

Broadcast signed Polygon transaction

<b><p>2 credits per API call</p></b> <p>Broadcast signed transaction to Polygon blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "polygonBroadcast.php"](../../examples/Api/PolygonApi/polygonBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\GeneratedAddressMatic
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\GeneratedAddressMatic**](../Model/GeneratedAddressMatic.md)

### Description

Generate Polygon account address from Extended public key

<b><p>1 credit per API call</p></b> <p>Generate Polygon account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

[✨ View "polygonGenerateAddress.php"](../../examples/Api/PolygonApi/polygonGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGenerateAddressPrivateKey(
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

Generate Polygon private key

<b><p>1 credit per API call</p></b> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

[✨ View "polygonGenerateAddressPrivateKey.php"](../../examples/Api/PolygonApi/polygonGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGenerateWallet(
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

Generate Polygon wallet

<b><p>1 credit per API call</p></b> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Polygon wallet with derivation path m'/44'/966'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Polygon wallet.</p>

### Example

[✨ View "polygonGenerateWallet.php"](../../examples/Api/PolygonApi/polygonGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGetBalance(
    string $address
): \Tatum\Model\MaticBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\MaticBalance**](../Model/MaticBalance.md)

### Description

Get Polygon Account balance

<b><p>1 credit per API call</p></b> <p>Get Polygon account balance in MATIC. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.</p>

### Example

[✨ View "polygonGetBalance.php"](../../examples/Api/PolygonApi/polygonGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGetBlock(
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

Get Polygon block by hash

<b><p>1 credit per API call</p></b> <p>Get Polygon block by block hash or block number.</p>

### Example

[✨ View "polygonGetBlock.php"](../../examples/Api/PolygonApi/polygonGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<b><p>1 credit per API call</p></b> <p>Get Polygon current block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "polygonGetCurrentBlock.php"](../../examples/Api/PolygonApi/polygonGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGetTransaction(
    string $hash
): \Tatum\Model\PolygonTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\PolygonTx**](../Model/PolygonTx.md)

### Description

Get Polygon Transaction

<b><p>2 credits per API call</p></b> <p>Get Polygon transaction by transaction hash.</p>

### Example

[✨ View "polygonGetTransaction.php"](../../examples/Api/PolygonApi/polygonGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGetTransactionByAddress(
    string $address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to, ]
    [ string $sort = 'DESC' ]
): \Tatum\Model\PolygonTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$from** | **float**  | Transactions from this block onwards will be included. | [optional]
 **$to** | **float**  | Transactions up to this block will be included. | [optional]
 **$sort** | **string**  | Sorting of the data. ASC - oldest first, DESC - newest first. | [optional] [default to &#39;DESC&#39;]

### Return type

[**\Tatum\Model\PolygonTx[]**](../Model/PolygonTx.md)

### Description

Get Polygon transactions by address

<b><p>1 credit per API call</p></b> <p>Get Polygon transactions by address. This includes incoming and outgoing transactions for the address.</p>

### Example

[✨ View "polygonGetTransactionByAddress.php"](../../examples/Api/PolygonApi/polygonGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetTransactionCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonGetTransactionCount(
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

Get count of outgoing Polygon transactions

<b><p>1 credit per API call</p></b> <p>Get a number of outgoing Polygon transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

[✨ View "polygonGetTransactionCount.php"](../../examples/Api/PolygonApi/polygonGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonWeb3Driver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->polygonWeb3Driver(
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

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the Polygon node provided by Tatum. To learn more about Polygon Web3, visit the <a href="https://docs.matic.network/" target="_blank">Polygon developer's guide</a>.</p>

### Example

[✨ View "polygonWeb3Driver.php"](../../examples/Api/PolygonApi/polygonWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferPolygonBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->transferPolygonBlockchain(
    \Tatum\Model\TransferPolygonBlockchain $transfer_polygon_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_polygon_blockchain** | [**\Tatum\Model\TransferPolygonBlockchain**](../Model/TransferPolygonBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send MATIC from account to account

<b><p>2 credits per API call</p></b> <p>Send MATIC from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending MATIC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferPolygonBlockchain.php"](../../examples/Api/PolygonApi/transferPolygonBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferPolygonBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->polygon()->transferPolygonBlockchainKMS(
    \Tatum\Model\TransferPolygonBlockchainKMS $transfer_polygon_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_polygon_blockchain_kms** | [**\Tatum\Model\TransferPolygonBlockchainKMS**](../Model/TransferPolygonBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send MATIC from account to account

TransferPolygonBlockchainKMS operation

### Example

[✨ View "transferPolygonBlockchainKMS.php"](../../examples/Api/PolygonApi/transferPolygonBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
