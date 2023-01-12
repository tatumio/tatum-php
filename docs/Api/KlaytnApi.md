# Tatum/Api/KlaytnApi

## References

[Klaytn API documentation](https://apidoc.tatum.io/tag/Klaytn/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **callKlaytnSmartContractMethod()**](#callklaytnsmartcontractmethod) 

> Invoke a method in a smart contract on Klaytn
> 
> **POST** `/v3/klaytn/smartcontract`

[🔹 **callKlaytnSmartContractMethodKMS()**](#callklaytnsmartcontractmethodkms) 

> Invoke a method in a smart contract on Klaytn
> 
> **POST** `/v3/klaytn/smartcontract`

[🔹 **callKlaytnSmartContractReadMethod()**](#callklaytnsmartcontractreadmethod) 

> Invoke a method in a smart contract on Klaytn
> 
> **POST** `/v3/klaytn/smartcontract`

[🔹 **klaytnBroadcast()**](#klaytnbroadcast) 

> Broadcast signed Klaytn transaction
> 
> **POST** `/v3/klaytn/broadcast`

[🔹 **klaytnGenerateAddress()**](#klaytngenerateaddress) 

> Generate Klaytn account address from Extended public key
> 
> **GET** `/v3/klaytn/address/{xpub}/{index}`

[🔹 **klaytnGenerateAddressPrivateKey()**](#klaytngenerateaddressprivatekey) 

> Generate Klaytn private key
> 
> **POST** `/v3/klaytn/wallet/priv`

[🔹 **klaytnGenerateWallet()**](#klaytngeneratewallet) 

> Generate Klaytn wallet
> 
> **GET** `/v3/klaytn/wallet`

[🔹 **klaytnGetBalance()**](#klaytngetbalance) 

> Get Klaytn Account balance
> 
> **GET** `/v3/klaytn/account/balance/{address}`

[🔹 **klaytnGetBlock()**](#klaytngetblock) 

> Get Klaytn block by hash
> 
> **GET** `/v3/klaytn/block/{hash}`

[🔹 **klaytnGetCurrentBlock()**](#klaytngetcurrentblock) 

> Get current block number
> 
> **GET** `/v3/klaytn/block/current`

[🔹 **klaytnGetTransaction()**](#klaytngettransaction) 

> Get Klaytn Transaction
> 
> **GET** `/v3/klaytn/transaction/{hash}`

[🔹 **klaytnGetTransactionCount()**](#klaytngettransactioncount) 

> Get count of outgoing Klaytn transactions
> 
> **GET** `/v3/klaytn/transaction/count/{address}`

[🔹 **klaytnWeb3Driver()**](#klaytnweb3driver) 

> Web3 HTTP driver
> 
> **POST** `/v3/klaytn/web3/{xApiKey}`

[🔹 **transferKlaytnBlockchain()**](#transferklaytnblockchain) 

> Send KLAY from account to account
> 
> **POST** `/v3/klaytn/transaction`

[🔹 **transferKlaytnBlockchainKMS()**](#transferklaytnblockchainkms) 

> Send KLAY from account to account
> 
> **POST** `/v3/klaytn/transaction`



## `callKlaytnSmartContractMethod()`

> **POST** `/v3/klaytn/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->callKlaytnSmartContractMethod(
    \Tatum\Model\CallKlaytnSmartContractMethod $call_klaytn_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_klaytn_smart_contract_method** | [**\Tatum\Model\CallKlaytnSmartContractMethod**](../Model/CallKlaytnSmartContractMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Klaytn

CallKlaytnSmartContractMethod operation

### Example

[✨ View "callKlaytnSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/callKlaytnSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callKlaytnSmartContractMethodKMS()`

> **POST** `/v3/klaytn/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->callKlaytnSmartContractMethodKMS(
    \Tatum\Model\CallKlaytnSmartContractMethodKMS $call_klaytn_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_klaytn_smart_contract_method_kms** | [**\Tatum\Model\CallKlaytnSmartContractMethodKMS**](../Model/CallKlaytnSmartContractMethodKMS.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Klaytn

CallKlaytnSmartContractMethodKMS operation

### Example

[✨ View "callKlaytnSmartContractMethodKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/callKlaytnSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callKlaytnSmartContractReadMethod()`

> **POST** `/v3/klaytn/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->callKlaytnSmartContractReadMethod(
    \Tatum\Model\CallKlaytnSmartContractReadMethod $call_klaytn_smart_contract_read_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_klaytn_smart_contract_read_method** | [**\Tatum\Model\CallKlaytnSmartContractReadMethod**](../Model/CallKlaytnSmartContractReadMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Klaytn

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Klaytn.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "callKlaytnSmartContractReadMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/callKlaytnSmartContractReadMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnBroadcast()`

> **POST** `/v3/klaytn/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnBroadcast(
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

Broadcast signed Klaytn transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to Klaytn blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "klaytnBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGenerateAddress()`

> **GET** `/v3/klaytn/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGenerateAddress(
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

[**\Tatum\Model\KlaytnGenerateAddress200Response**](../Model/KlaytnGenerateAddress200Response.md)

### Description

Generate Klaytn account address from Extended public key

<p><b>1 credit per API call</b></p> <p>Generate Klaytn account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

[✨ View "klaytnGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGenerateAddressPrivateKey()`

> **POST** `/v3/klaytn/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGenerateAddressPrivateKey(
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

Generate Klaytn private key

<p><b>1 credit per API call</b></p> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

[✨ View "klaytnGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGenerateWallet()`

> **GET** `/v3/klaytn/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGenerateWallet(
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

Generate Klaytn wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Klaytn wallet with derivation path m'/44'/966'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Klaytn wallet.</p>

### Example

[✨ View "klaytnGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetBalance()`

> **GET** `/v3/klaytn/account/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGetBalance(
    string $address
): \Tatum\Model\KlaytnGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\KlaytnGetBalance200Response**](../Model/KlaytnGetBalance200Response.md)

### Description

Get Klaytn Account balance

<p><b>1 credit per API call</b></p> <p>Get Klaytn account balance in KLAY. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.</p>

### Example

[✨ View "klaytnGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetBlock()`

> **GET** `/v3/klaytn/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGetBlock(
    string $hash
): \Tatum\Model\KlaytnBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\KlaytnBlock**](../Model/KlaytnBlock.md)

### Description

Get Klaytn block by hash

<p><b>1 credit per API call</b></p> <p>Get Klaytn block by block hash or block number.</p>

### Example

[✨ View "klaytnGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetCurrentBlock()`

> **GET** `/v3/klaytn/block/current`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<p><b>1 credit per API call</b></p> <p>Get Klaytn current block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "klaytnGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetTransaction()`

> **GET** `/v3/klaytn/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGetTransaction(
    string $hash
): \Tatum\Model\KlaytnTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\KlaytnTx**](../Model/KlaytnTx.md)

### Description

Get Klaytn Transaction

<p><b>2 credits per API call</b></p> <p>Get Klaytn transaction by transaction hash.</p>

### Example

[✨ View "klaytnGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetTransactionCount()`

> **GET** `/v3/klaytn/transaction/count/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnGetTransactionCount(
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

<p><b>1 credit per API call</b></p> <p>Get a number of outgoing Klaytn transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

[✨ View "klaytnGetTransactionCount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnWeb3Driver()`

> **POST** `/v3/klaytn/web3/{xApiKey}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnWeb3Driver(
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

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the Klaytn node provided by Tatum. To learn more about Klaytn Web3, visit the <a href="https://docs.klaytn.foundation/dapp/json-rpc" target="_blank">Klaytn developer's guide</a>.</p>

### Example

[✨ View "klaytnWeb3Driver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/klaytnWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferKlaytnBlockchain()`

> **POST** `/v3/klaytn/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->transferKlaytnBlockchain(
    \Tatum\Model\TransferKlaytnBlockchain $transfer_klaytn_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_klaytn_blockchain** | [**\Tatum\Model\TransferKlaytnBlockchain**](../Model/TransferKlaytnBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send KLAY from account to account

<p><b>2 credits per API call</b></p> <p>Send KLAY from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending KLAY, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferKlaytnBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/transferKlaytnBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferKlaytnBlockchainKMS()`

> **POST** `/v3/klaytn/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->transferKlaytnBlockchainKMS(
    \Tatum\Model\TransferKlaytnBlockchainKMS $transfer_klaytn_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_klaytn_blockchain_kms** | [**\Tatum\Model\TransferKlaytnBlockchainKMS**](../Model/TransferKlaytnBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send KLAY from account to account

TransferKlaytnBlockchainKMS operation

### Example

[✨ View "transferKlaytnBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/KlaytnApi/transferKlaytnBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
