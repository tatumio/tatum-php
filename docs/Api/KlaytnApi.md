# Tatum/Api/KlaytnApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**klaytnBlockchainSmartContractInvocation()**](#klaytnblockchainsmartcontractinvocation) | **POST** /v3/klaytn/smartcontract | Invoke a method in a smart contract on Klaytn
[**klaytnBlockchainTransfer()**](#klaytnblockchaintransfer) | **POST** /v3/klaytn/transaction | Send KLAY from account to account
[**klaytnBroadcast()**](#klaytnbroadcast) | **POST** /v3/klaytn/broadcast | Broadcast signed Klaytn transaction
[**klaytnGenerateAddress()**](#klaytngenerateaddress) | **GET** /v3/klaytn/address/{xpub}/{index} | Generate Klaytn account address from Extended public key
[**klaytnGenerateAddressPrivateKey()**](#klaytngenerateaddressprivatekey) | **POST** /v3/klaytn/wallet/priv | Generate Klaytn private key
[**klaytnGenerateWallet()**](#klaytngeneratewallet) | **GET** /v3/klaytn/wallet | Generate Klaytn wallet
[**klaytnGetBalance()**](#klaytngetbalance) | **GET** /v3/klaytn/account/balance/{address} | Get Klaytn Account balance
[**klaytnGetBlock()**](#klaytngetblock) | **GET** /v3/klaytn/block/{hash} | Get Klaytn block by hash
[**klaytnGetCurrentBlock()**](#klaytngetcurrentblock) | **GET** /v3/klaytn/block/current | Get current block number
[**klaytnGetTransaction()**](#klaytngettransaction) | **GET** /v3/klaytn/transaction/{hash} | Get Klaytn Transaction
[**klaytnGetTransactionCount()**](#klaytngettransactioncount) | **GET** /v3/klaytn/transaction/count/{address} | Get count of outgoing Klaytn transactions
[**klaytnWeb3Driver()**](#klaytnweb3driver) | **POST** /v3/klaytn/web3/{xApiKey} | Web3 HTTP driver


## `klaytnBlockchainSmartContractInvocation()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnBlockchainSmartContractInvocation(
    \Tatum\Model\KlaytnBlockchainSmartContractInvocationRequest $klaytn_blockchain_smart_contract_invocation_request
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$klaytn_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\KlaytnBlockchainSmartContractInvocationRequest**](../Model/KlaytnBlockchainSmartContractInvocationRequest.md) |  |

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

### Description

Invoke a method in a smart contract on Klaytn

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Klaytn.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "klaytnBlockchainSmartContractInvocation.php"](../../examples/Api/KlaytnApi/klaytnBlockchainSmartContractInvocation.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->klaytn()->klaytnBlockchainTransfer(
    \Tatum\Model\KlaytnBlockchainTransferRequest $klaytn_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$klaytn_blockchain_transfer_request** | [**\Tatum\Model\KlaytnBlockchainTransferRequest**](../Model/KlaytnBlockchainTransferRequest.md) |  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send KLAY from account to account

<p><b>2 credits per API call</b></p> <p>Send KLAY from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending KLAY, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "klaytnBlockchainTransfer.php"](../../examples/Api/KlaytnApi/klaytnBlockchainTransfer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnBroadcast()`

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

[✨ View "klaytnBroadcast.php"](../../examples/Api/KlaytnApi/klaytnBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGenerateAddress()`

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

[✨ View "klaytnGenerateAddress.php"](../../examples/Api/KlaytnApi/klaytnGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGenerateAddressPrivateKey()`

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

[✨ View "klaytnGenerateAddressPrivateKey.php"](../../examples/Api/KlaytnApi/klaytnGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGenerateWallet()`

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

[✨ View "klaytnGenerateWallet.php"](../../examples/Api/KlaytnApi/klaytnGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetBalance()`

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

[✨ View "klaytnGetBalance.php"](../../examples/Api/KlaytnApi/klaytnGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetBlock()`

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

[✨ View "klaytnGetBlock.php"](../../examples/Api/KlaytnApi/klaytnGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetCurrentBlock()`

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

[✨ View "klaytnGetCurrentBlock.php"](../../examples/Api/KlaytnApi/klaytnGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetTransaction()`

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

[✨ View "klaytnGetTransaction.php"](../../examples/Api/KlaytnApi/klaytnGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnGetTransactionCount()`

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

[✨ View "klaytnGetTransactionCount.php"](../../examples/Api/KlaytnApi/klaytnGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnWeb3Driver()`

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

[✨ View "klaytnWeb3Driver.php"](../../examples/Api/KlaytnApi/klaytnWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
