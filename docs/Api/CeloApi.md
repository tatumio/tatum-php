# Tatum/Api/CeloApi

* Celo [documentation](https://apidoc.tatum.io/tag/Celo/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**call Celo Read Smart Contract Method()**](#callceloreadsmartcontractmethod) | **POST** `/v3 /celo /smartcontract` | Invoke a method in a smart contract on Celo
[**call Celo Smart Contract Method()**](#callcelosmartcontractmethod) | **POST** `/v3 /celo /smartcontract` | Invoke a method in a smart contract on Celo
[**call Celo Smart Contract Method KMS()**](#callcelosmartcontractmethodkms) | **POST** `/v3 /celo /smartcontract` | Invoke a method in a smart contract on Celo
[**celo Broadcast()**](#celobroadcast) | **POST** `/v3 /celo /broadcast` | Broadcast signed Celo transaction
[**celo Generate Address()**](#celogenerateaddress) | **GET** `/v3 /celo /address /{xpub} /{index}` | Generate Celo account address from Extended public key
[**celo Generate Address Private Key()**](#celogenerateaddressprivatekey) | **POST** `/v3 /celo /wallet /priv` | Generate Celo private key
[**celo Generate Wallet()**](#celogeneratewallet) | **GET** `/v3 /celo /wallet` | Generate Celo wallet
[**celo Get Balance()**](#celogetbalance) | **GET** `/v3 /celo /account /balance /{address}` | Get Celo Account balance
[**celo Get Block()**](#celogetblock) | **GET** `/v3 /celo /block /{hash}` | Get Celo block by hash
[**celo Get Current Block()**](#celogetcurrentblock) | **GET** `/v3 /celo /block /current` | Get current block number
[**celo Get Transaction()**](#celogettransaction) | **GET** `/v3 /celo /transaction /{hash}` | Get Celo Transaction
[**celo Get Transaction By Address()**](#celogettransactionbyaddress) | **GET** `/v3 /celo /account /transaction /{address}` | Get Celo transactions by address
[**celo Get Transaction Count()**](#celogettransactioncount) | **GET** `/v3 /celo /transaction /count /{address}` | Get count of outgoing Celo transactions
[**celo Web3 Driver()**](#celoweb3driver) | **POST** `/v3 /celo /web3 /{xApiKey}` | Web3 HTTP driver
[**transfer Celo Blockchain()**](#transferceloblockchain) | **POST** `/v3 /celo /transaction` | Send Celo / ERC20 from account to account
[**transfer Celo Blockchain KMS()**](#transferceloblockchainkms) | **POST** `/v3 /celo /transaction` | Send Celo / ERC20 from account to account


## `callCeloReadSmartContractMethod()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->callCeloReadSmartContractMethod(
    \Tatum\Model\CallCeloReadSmartContractMethod $call_celo_read_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_celo_read_smart_contract_method** | [**\Tatum\Model\CallCeloReadSmartContractMethod**](../Model/CallCeloReadSmartContractMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Celo

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Celo.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "callCeloReadSmartContractMethod.php"](../../examples/Api/CeloApi/callCeloReadSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callCeloSmartContractMethod()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->callCeloSmartContractMethod(
    \Tatum\Model\CallCeloSmartContractMethod $call_celo_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_celo_smart_contract_method** | [**\Tatum\Model\CallCeloSmartContractMethod**](../Model/CallCeloSmartContractMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Celo

CallCeloSmartContractMethod operation

### Example

[✨ View "callCeloSmartContractMethod.php"](../../examples/Api/CeloApi/callCeloSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callCeloSmartContractMethodKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->callCeloSmartContractMethodKMS(
    \Tatum\Model\CallCeloSmartContractMethodKMS $call_celo_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_celo_smart_contract_method_kms** | [**\Tatum\Model\CallCeloSmartContractMethodKMS**](../Model/CallCeloSmartContractMethodKMS.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Celo

CallCeloSmartContractMethodKMS operation

### Example

[✨ View "callCeloSmartContractMethodKMS.php"](../../examples/Api/CeloApi/callCeloSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoBroadcast(
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

Broadcast signed Celo transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to Celo blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "celoBroadcast.php"](../../examples/Api/CeloApi/celoBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\CeloGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\CeloGenerateAddress200Response**](../Model/CeloGenerateAddress200Response.md)

### Description

Generate Celo account address from Extended public key

<p><b>1 credit per API call</b></p> <p>Generate Celo account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

[✨ View "celoGenerateAddress.php"](../../examples/Api/CeloApi/celoGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGenerateAddressPrivateKey(
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

Generate Celo private key

<p><b>1 credit per API call</b></p> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

[✨ View "celoGenerateAddressPrivateKey.php"](../../examples/Api/CeloApi/celoGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGenerateWallet(
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

Generate Celo wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Celo wallet with derivation path m'/44'/52752'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Celo wallet.</p>

### Example

[✨ View "celoGenerateWallet.php"](../../examples/Api/CeloApi/celoGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGetBalance(
    string $address
): \Tatum\Model\CeloGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\CeloGetBalance200Response**](../Model/CeloGetBalance200Response.md)

### Description

Get Celo Account balance

<p><b>1 credit per API call</b></p> <p>Get Celo account balance in ETH. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.</p>

### Example

[✨ View "celoGetBalance.php"](../../examples/Api/CeloApi/celoGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGetBlock(
    string $hash
): \Tatum\Model\CeloBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\CeloBlock**](../Model/CeloBlock.md)

### Description

Get Celo block by hash

<p><b>1 credit per API call</b></p> <p>Get Celo block by block hash or block number.</p>

### Example

[✨ View "celoGetBlock.php"](../../examples/Api/CeloApi/celoGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<p><b>1 credit per API call</b></p> <p>Get Celo current block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "celoGetCurrentBlock.php"](../../examples/Api/CeloApi/celoGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGetTransaction(
    string $hash
): \Tatum\Model\CeloTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\CeloTx**](../Model/CeloTx.md)

### Description

Get Celo Transaction

<p><b>2 credits per API call</b></p> <p>Get Celo transaction by transaction hash.</p>

### Example

[✨ View "celoGetTransaction.php"](../../examples/Api/CeloApi/celoGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGetTransactionByAddress(
    string $address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to, ]
    [ string $sort = 'DESC' ]
): \Tatum\Model\CeloTx[]
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

[**\Tatum\Model\CeloTx[]**](../Model/CeloTx.md)

### Description

Get Celo transactions by address

<p><b>1 credit per API call</b></p> <p>Get Celo transactions by address. This includes incoming and outgoing transactions for the address.</p>

### Example

[✨ View "celoGetTransactionByAddress.php"](../../examples/Api/CeloApi/celoGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoGetTransactionCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoGetTransactionCount(
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

Get count of outgoing Celo transactions

<p><b>1 credit per API call</b></p> <p>Get a number of outgoing Celo transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

[✨ View "celoGetTransactionCount.php"](../../examples/Api/CeloApi/celoGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoWeb3Driver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->celoWeb3Driver(
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

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the Celo node provided by Tatum. To learn more about Celo Web3, visit the <a href="https://explorer.celo.org/api-docs" target="_blank">Celo developer's guide</a>.</p>

### Example

[✨ View "celoWeb3Driver.php"](../../examples/Api/CeloApi/celoWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCeloBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->transferCeloBlockchain(
    \Tatum\Model\TransferCeloBlockchain $transfer_celo_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_blockchain** | [**\Tatum\Model\TransferCeloBlockchain**](../Model/TransferCeloBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Celo / ERC20 from account to account

<p><b>2 credits per API call</b></p> <p>Send Celo, cUSD or Tatum supported ERC20 token from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending CELO, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferCeloBlockchain.php"](../../examples/Api/CeloApi/transferCeloBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCeloBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->celo()->transferCeloBlockchainKMS(
    \Tatum\Model\TransferCeloBlockchainKMS $transfer_celo_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_blockchain_kms** | [**\Tatum\Model\TransferCeloBlockchainKMS**](../Model/TransferCeloBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Celo / ERC20 from account to account

TransferCeloBlockchainKMS operation

### Example

[✨ View "transferCeloBlockchainKMS.php"](../../examples/Api/CeloApi/transferCeloBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
