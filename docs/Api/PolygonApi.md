# Tatum/Api/PolygonApi

## References

[Polygon API documentation](https://apidoc.tatum.io/tag/Polygon/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **callPolygonSmartContractMethod()**](#callpolygonsmartcontractmethod) 

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **callPolygonSmartContractMethodCaller()**](#callpolygonsmartcontractmethodcaller) 

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **callPolygonSmartContractMethodKMS()**](#callpolygonsmartcontractmethodkms) 

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **callPolygonSmartContractReadMethod()**](#callpolygonsmartcontractreadmethod) 

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **polygonBroadcast()**](#polygonbroadcast) 

> Broadcast signed Polygon transaction
> 
> **POST** `/v3/polygon/broadcast`

[🔹 **polygonGenerateAddress()**](#polygongenerateaddress) 

> Generate Polygon account address from Extended public key
> 
> **GET** `/v3/polygon/address/{xpub}/{index}`

[🔹 **polygonGenerateAddressPrivateKey()**](#polygongenerateaddressprivatekey) 

> Generate Polygon private key
> 
> **POST** `/v3/polygon/wallet/priv`

[🔹 **polygonGenerateWallet()**](#polygongeneratewallet) 

> Generate Polygon wallet
> 
> **GET** `/v3/polygon/wallet`

[🔹 **polygonGetBalance()**](#polygongetbalance) 

> Get Polygon Account balance
> 
> **GET** `/v3/polygon/account/balance/{address}`

[🔹 **polygonGetBlock()**](#polygongetblock) 

> Get Polygon block by hash
> 
> **GET** `/v3/polygon/block/{hash}`

[🔹 **polygonGetCurrentBlock()**](#polygongetcurrentblock) 

> Get current block number
> 
> **GET** `/v3/polygon/block/current`

[🔹 **polygonGetTransaction()**](#polygongettransaction) 

> Get Polygon Transaction
> 
> **GET** `/v3/polygon/transaction/{hash}`

[🔹 **polygonGetTransactionByAddress()**](#polygongettransactionbyaddress) 

> Get Polygon transactions by address
> 
> **GET** `/v3/polygon/account/transaction/{address}`

[🔹 **polygonGetTransactionCount()**](#polygongettransactioncount) 

> Get count of outgoing Polygon transactions
> 
> **GET** `/v3/polygon/transaction/count/{address}`

[🔹 **polygonWeb3Driver()**](#polygonweb3driver) 

> Web3 HTTP driver
> 
> **POST** `/v3/polygon/web3/{xApiKey}`

[🔹 **transferPolygonBlockchain()**](#transferpolygonblockchain) 

> Send MATIC from account to account
> 
> **POST** `/v3/polygon/transaction`

[🔹 **transferPolygonBlockchainKMS()**](#transferpolygonblockchainkms) 

> Send MATIC from account to account
> 
> **POST** `/v3/polygon/transaction`



## `callPolygonSmartContractMethod()`

> **POST** `/v3/polygon/smartcontract`

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

[✨ View "callPolygonSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/callPolygonSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callPolygonSmartContractMethodCaller()`

> **POST** `/v3/polygon/smartcontract`

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

[✨ View "callPolygonSmartContractMethodCaller.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/callPolygonSmartContractMethodCaller.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callPolygonSmartContractMethodKMS()`

> **POST** `/v3/polygon/smartcontract`

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

[✨ View "callPolygonSmartContractMethodKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/callPolygonSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callPolygonSmartContractReadMethod()`

> **POST** `/v3/polygon/smartcontract`

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

<b>2 credits per API call

</b> Invoke a method in an existing smart contract on Polygon.

 You can call a read-only or write method.

 <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>
         <b>Troubleshooting a failed transaction</b>
 Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).
However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.

 If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.

 For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.

 <b>Signing a transaction</b>
 When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 If <b>caller</b> field is present instead of the private key, Tatum will sign the transaction with the managed private key connected to the caller address. This is applicable only for paid mainnet plans and all testnet plans. Keep in mind that the caller address must have enough access right to perform the action in the smart contract method.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.

 For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "callPolygonSmartContractReadMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/callPolygonSmartContractReadMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonBroadcast()`

> **POST** `/v3/polygon/broadcast`

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

<b>2 credits per API call

</b> Broadcast signed transaction to Polygon blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

### Example

[✨ View "polygonBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGenerateAddress()`

> **GET** `/v3/polygon/address/{xpub}/{index}`

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

<b>1 credit per API call

</b> Generate Polygon account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.

### Example

[✨ View "polygonGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGenerateAddressPrivateKey()`

> **POST** `/v3/polygon/wallet/priv`

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

<b>1 credit per API call

</b> Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

### Example

[✨ View "polygonGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGenerateWallet()`

> **GET** `/v3/polygon/wallet`

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

<b>1 credit per API call

</b> Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.
Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>


Tatum follows BIP44 specification and generates for Polygon wallet with derivation path m'/44'/966'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Polygon wallet.

### Example

[✨ View "polygonGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetBalance()`

> **GET** `/v3/polygon/account/balance/{address}`

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

<b>1 credit per API call

</b> Get Polygon account balance in MATIC. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.

### Example

[✨ View "polygonGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetBlock()`

> **GET** `/v3/polygon/block/{hash}`

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

<b>1 credit per API call

</b> Get Polygon block by block hash or block number.

### Example

[✨ View "polygonGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetCurrentBlock()`

> **GET** `/v3/polygon/block/current`

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

<b>1 credit per API call

</b> Get Polygon current block number. This is the number of the latest block in the blockchain.

### Example

[✨ View "polygonGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetTransaction()`

> **GET** `/v3/polygon/transaction/{hash}`

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

<b>2 credits per API call

</b> Get Polygon transaction by transaction hash.

### Example

[✨ View "polygonGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetTransactionByAddress()`

> **GET** `/v3/polygon/account/transaction/{address}`

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

<b>1 credit per API call

</b> Get Polygon transactions by address. This includes incoming and outgoing transactions for the address.

### Example

[✨ View "polygonGetTransactionByAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonGetTransactionCount()`

> **GET** `/v3/polygon/transaction/count/{address}`

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

<b>1 credit per API call

</b> Get a number of outgoing Polygon transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

### Example

[✨ View "polygonGetTransactionCount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonWeb3Driver()`

> **POST** `/v3/polygon/web3/{xApiKey}`

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

<b>2 credits per API call</b>

 <b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b>


 Use this endpoint URL as a http-based web3 driver to connect directly to the Polygon node provided by Tatum. To learn more about Polygon Web3, visit the <a href="https://docs.matic.network/" target="_blank">Polygon developer's guide</a>.

### Example

[✨ View "polygonWeb3Driver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/polygonWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferPolygonBlockchain()`

> **POST** `/v3/polygon/transaction`

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

<b>2 credits per API call

</b> Send MATIC from account to account.

 <b>Signing a transaction</b>

 When sending MATIC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.

 For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "transferPolygonBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/transferPolygonBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferPolygonBlockchainKMS()`

> **POST** `/v3/polygon/transaction`

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

[✨ View "transferPolygonBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/PolygonApi/transferPolygonBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
