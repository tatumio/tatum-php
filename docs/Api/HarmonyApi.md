# Tatum/Api/HarmonyApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**oneBlockchainSmartContractInvocation()**](#oneblockchainsmartcontractinvocation) | **POST** /v3/one/smartcontract | Invoke a method in a smart contract on Harmony
[**oneBlockchainTransfer()**](#oneblockchaintransfer) | **POST** /v3/one/transaction | Send ONE / HRM20 from account to account
[**oneBroadcast()**](#onebroadcast) | **POST** /v3/one/broadcast | Broadcast signed ONE transaction
[**oneFormatAddress()**](#oneformataddress) | **GET** /v3/one/address/format/{address} | Transform HEX address to Bech32 ONE address format
[**oneGenerateAddress()**](#onegenerateaddress) | **GET** /v3/one/address/{xpub}/{index} | Generate ONE account address from Extended public key
[**oneGenerateAddressPrivateKey()**](#onegenerateaddressprivatekey) | **POST** /v3/one/wallet/priv | Generate ONE private key
[**oneGenerateWallet()**](#onegeneratewallet) | **GET** /v3/one/wallet | Generate ONE wallet
[**oneGetBalance()**](#onegetbalance) | **GET** /v3/one/account/balance/{address} | Get ONE Account balance
[**oneGetBlock()**](#onegetblock) | **GET** /v3/one/block/{hash} | Get ONE block by hash
[**oneGetCurrentBlock()**](#onegetcurrentblock) | **GET** /v3/one/block/current | Get current block number
[**oneGetTransaction()**](#onegettransaction) | **GET** /v3/one/transaction/{hash} | Get ONE Transaction
[**oneGetTransactionCount()**](#onegettransactioncount) | **GET** /v3/one/transaction/count/{address} | Get count of outgoing ONE transactions
[**oneWeb3Driver()**](#oneweb3driver) | **POST** /v3/one/web3/{xApiKey} | Web3 HTTP driver


## `oneBlockchainSmartContractInvocation()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneBlockchainSmartContractInvocation(
    \Tatum\Model\OneBlockchainSmartContractInvocationRequest $one_blockchain_smart_contract_invocation_request,
    [ float $shard_id = 0 ]
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$one_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\OneBlockchainSmartContractInvocationRequest**](../Model/OneBlockchainSmartContractInvocationRequest.md) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

### Description

Invoke a method in a smart contract on Harmony

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Harmony.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "oneBlockchainSmartContractInvocation.php"](../../samples/Api/HarmonyApi/oneBlockchainSmartContractInvocation.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneBlockchainTransfer(
    \Tatum\Model\OneBlockchainTransferRequest $one_blockchain_transfer_request,
    [ float $shard_id = 0 ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$one_blockchain_transfer_request** | [**\Tatum\Model\OneBlockchainTransferRequest**](../Model/OneBlockchainTransferRequest.md) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send ONE / HRM20 from account to account

<p><b>2 credits per API call</b></p> <p>Send ONE or Tatum supported HRM20 token from account to account.<br/><br/> Default shard 0 is used for sender and recipient.<br/> <p><b>Signing a transaction</b></p> <p>When sending ONE, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p> Alternatively, using the Tatum client library for supported languages.</p>

### Example

[✨ View "oneBlockchainTransfer.php"](../../samples/Api/HarmonyApi/oneBlockchainTransfer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms,
    [ float $shard_id = 0 ]
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed ONE transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to ONE blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "oneBroadcast.php"](../../samples/Api/HarmonyApi/oneBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneFormatAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneFormatAddress(
    string $address
): \Tatum\Model\GeneratedAddressOne
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address in HEX (ETH compatible) format. |

### Return type

[**\Tatum\Model\GeneratedAddressOne**](../Model/GeneratedAddressOne.md)

### Description

Transform HEX address to Bech32 ONE address format

<p><b>1 credit per API call</b></p> <p>Transform HEX address to Bech32 format with one prefix.</p>

### Example

[✨ View "oneFormatAddress.php"](../../samples/Api/HarmonyApi/oneFormatAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGenerateAddress(
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

[**\Tatum\Model\GeneratedAddressOne**](../Model/GeneratedAddressOne.md)

### Description

Generate ONE account address from Extended public key

<p><b>1 credit per API call</b></p> <p>Generate ONE account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

[✨ View "oneGenerateAddress.php"](../../samples/Api/HarmonyApi/oneGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGenerateAddressPrivateKey(
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

Generate ONE private key

<p><b>1 credit per API call</b></p> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

[✨ View "oneGenerateAddressPrivateKey.php"](../../samples/Api/HarmonyApi/oneGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGenerateWallet(
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

Generate ONE wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for ONE wallet with derivation path m'/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible ONE wallet.</p>

### Example

[✨ View "oneGenerateWallet.php"](../../samples/Api/HarmonyApi/oneGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGetBalance(
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

[**\Tatum\Model\OneBalance**](../Model/OneBalance.md)

### Description

Get ONE Account balance

<p><b>1 credit per API call</b></p> <p>Get ONE account balance in ONE. This method does not prints any balance of the HRM20 or HRM721 tokens on the account.</p>

### Example

[✨ View "oneGetBalance.php"](../../samples/Api/HarmonyApi/oneGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGetBlock(
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

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

### Description

Get ONE block by hash

<p><b>1 credit per API call</b></p> <p>Get ONE block by block hash or block number.</p>

### Example

[✨ View "oneGetBlock.php"](../../samples/Api/HarmonyApi/oneGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGetCurrentBlock(
): \Tatum\Model\OneBlockCurrent[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\OneBlockCurrent[]**](../Model/OneBlockCurrent.md)

### Description

Get current block number

<p><b>1 credit per API call</b></p> <p>Get ONE current block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "oneGetCurrentBlock.php"](../../samples/Api/HarmonyApi/oneGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGetTransaction(
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

[**\Tatum\Model\OneTx**](../Model/OneTx.md)

### Description

Get ONE Transaction

<p><b>2 credits per API call</b></p> <p>Get ONE transaction by transaction hash.</p>

### Example

[✨ View "oneGetTransaction.php"](../../samples/Api/HarmonyApi/oneGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneGetTransactionCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneGetTransactionCount(
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

<p><b>1 credit per API call</b></p> <p>Get a number of outgoing ONE transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

[✨ View "oneGetTransactionCount.php"](../../samples/Api/HarmonyApi/oneGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneWeb3Driver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->harmony()->oneWeb3Driver(
    string $x_api_key,
    object $body,
    [ float $shard_id = 0 ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$body** | **object**  |  |
 **$shard_id** | **float**  | Shard to read data from | [optional] [default to 0]

### Return type

**object**

### Description

Web3 HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the ONE node provided by Tatum. To learn more about ONE Web3, visit the <a href="https://docs.harmony.one/home/developers/api" target="_blank">ONE developer's guide</a>.</p>

### Example

[✨ View "oneWeb3Driver.php"](../../samples/Api/HarmonyApi/oneWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
