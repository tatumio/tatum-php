# Tatum/Api/EthereumApi

## References

[Ethereum API documentation](https://apidoc.tatum.io/tag/Ethereum/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **callReadSmartContractMethod()**](#callreadsmartcontractmethod) 

> Invoke a method in a smart contract on Ethereum
> 
> **POST** `/v3/ethereum/smartcontract`

[🔹 **callSmartContractMethod()**](#callsmartcontractmethod) 

> Invoke a method in a smart contract on Ethereum
> 
> **POST** `/v3/ethereum/smartcontract`

[🔹 **callSmartContractMethodKMS()**](#callsmartcontractmethodkms) 

> Invoke a method in a smart contract on Ethereum
> 
> **POST** `/v3/ethereum/smartcontract`

[🔹 **ethBroadcast()**](#ethbroadcast) 

> Broadcast signed Ethereum transaction
> 
> **POST** `/v3/ethereum/broadcast`

[🔹 **ethGenerateAddress()**](#ethgenerateaddress) 

> Generate Ethereum account address from Extended public key
> 
> **GET** `/v3/ethereum/address/{xpub}/{index}`

[🔹 **ethGenerateAddressPrivateKey()**](#ethgenerateaddressprivatekey) 

> Generate Ethereum private key
> 
> **POST** `/v3/ethereum/wallet/priv`

[🔹 **ethGenerateWallet()**](#ethgeneratewallet) 

> Generate Ethereum wallet
> 
> **GET** `/v3/ethereum/wallet`

[🔹 **ethGetBalance()**](#ethgetbalance) 

> Get the ETH balance of an Ethereum account
> 
> **GET** `/v3/ethereum/account/balance/{address}`

[🔹 **ethGetBlock()**](#ethgetblock) 

> Get Ethereum block by hash
> 
> **GET** `/v3/ethereum/block/{hash}`

[🔹 **ethGetCurrentBlock()**](#ethgetcurrentblock) 

> Get current block number
> 
> **GET** `/v3/ethereum/block/current`

[🔹 **ethGetInternalTransactionByAddress()**](#ethgetinternaltransactionbyaddress) 

> Get Ethereum internal transactions by address
> 
> **GET** `/v3/ethereum/account/transaction/erc20/internal/{address}`

[🔹 **ethGetTransaction()**](#ethgettransaction) 

> Get Ethereum Transaction
> 
> **GET** `/v3/ethereum/transaction/{hash}`

[🔹 **ethGetTransactionByAddress()**](#ethgettransactionbyaddress) 

> Get Ethereum transactions by address
> 
> **GET** `/v3/ethereum/account/transaction/{address}`

[🔹 **ethGetTransactionCount()**](#ethgettransactioncount) 

> Get count of outgoing Ethereum transactions
> 
> **GET** `/v3/ethereum/transaction/count/{address}`

[🔹 **ethWeb3Driver()**](#ethweb3driver) 

> Web3 HTTP driver
> 
> **POST** `/v3/ethereum/web3/{xApiKey}`

[🔹 **transferEthBlockchain()**](#transferethblockchain) 

> Send Ethereum / ERC20 from account to account
> 
> **POST** `/v3/ethereum/transaction`

[🔹 **transferEthBlockchainKMS()**](#transferethblockchainkms) 

> Send Ethereum / ERC20 from account to account
> 
> **POST** `/v3/ethereum/transaction`



## `callReadSmartContractMethod()`

> **POST** `/v3/ethereum/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->callReadSmartContractMethod(
    \Tatum\Model\CallReadSmartContractMethod $call_read_smart_contract_method,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_read_smart_contract_method** | [**\Tatum\Model\CallReadSmartContractMethod**](../Model/CallReadSmartContractMethod.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Ethereum

CallReadSmartContractMethod operation

### Example

[✨ View "callReadSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/callReadSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callSmartContractMethod()`

> **POST** `/v3/ethereum/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->callSmartContractMethod(
    \Tatum\Model\CallSmartContractMethod $call_smart_contract_method,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_smart_contract_method** | [**\Tatum\Model\CallSmartContractMethod**](../Model/CallSmartContractMethod.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Ethereum

<b>2 credits per API call</b>

 Invoke a method in an existing smart contract on Ethereum.

 You can call a read-only or write method.

 <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>
 <b>Troubleshooting a failed transaction</b>
 Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).
However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.

 If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.

 For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.

 <b>Signing a transaction</b>
 When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.

 For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "callSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/callSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callSmartContractMethodKMS()`

> **POST** `/v3/ethereum/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->callSmartContractMethodKMS(
    \Tatum\Model\CallSmartContractMethodKMS $call_smart_contract_method_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_smart_contract_method_kms** | [**\Tatum\Model\CallSmartContractMethodKMS**](../Model/CallSmartContractMethodKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on Ethereum

CallSmartContractMethodKMS operation

### Example

[✨ View "callSmartContractMethodKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/callSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethBroadcast()`

> **POST** `/v3/ethereum/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed Ethereum transaction

<b>2 credits per API call</b>

 Broadcast signed transaction to Ethereum blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

### Example

[✨ View "ethBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateAddress()`

> **GET** `/v3/ethereum/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGenerateAddress(
    string $xpub,
    float $index,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\GeneratedAddressEth
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of the address to be generated. |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\GeneratedAddressEth**](../Model/GeneratedAddressEth.md)

### Description

Generate Ethereum account address from Extended public key

<h4>1 credit per API call.</h4>

 Generates an Ethereum account deposit address from an Extended public key. The deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

### Example

[✨ View "ethGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateAddressPrivateKey()`

> **POST** `/v3/ethereum/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

### Description

Generate Ethereum private key

<h4>1 credit per API call.</h4>

 Generates the private key of an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

### Example

[✨ View "ethGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateWallet()`

> **GET** `/v3/ethereum/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGenerateWallet(
    [ string $mnemonic, ]
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generating extended public and private keys. | [optional]
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

### Description

Generate Ethereum wallet

<h4>1 credit per API call.</h4>

Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.
Each address is identified by 3 main values:<ul><li>Private Key - your secret value which should never be revealed</li><li>Public Key - a public address to be published</li><li>Derivation index - an index of generated address</li></ul>


Tatum follows the BIP44 specification and generates for Ethereum wallets with the derivation path m/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generates a BIP44 compatible Ethereum wallet.

### Example

[✨ View "ethGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetBalance()`

> **GET** `/v3/ethereum/account/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetBalance(
    string $address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthBalance**](../Model/EthBalance.md)

### Description

Get the ETH balance of an Ethereum account

<b>1 credit per API call</b>

 Get the balance of <b>ETH</b> of an Ethereum account.

 To get the balance of <b>tokens</b>, use the APIs for getting the balance of <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20GetBalanceAddress" target="_blank">fungible tokens (ERC-20)</a> and <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)#operation/NftGetTokensByAddressErc721" target="_blank">NFTs (ERC-721)</a>.

### Example

[✨ View "ethGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetBlock()`

> **GET** `/v3/ethereum/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetBlock(
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

### Description

Get Ethereum block by hash

<h4>1 credit per API call.</h4>

Gets an Ethereum block-by-block hash or block number.

### Example

[✨ View "ethGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetCurrentBlock()`

> **GET** `/v3/ethereum/block/current`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetCurrentBlock(
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**float**

### Description

Get current block number

<h4>1 credit per API call.</h4>

Gets the current Ethereum block number. This is the number of the latest block in the blockchain.

### Example

[✨ View "ethGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetInternalTransactionByAddress()`

> **GET** `/v3/ethereum/account/transaction/erc20/internal/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetInternalTransactionByAddress(
    string $address,
    float $page_size,
    [ float $offset, ]
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthTxInternal[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthTxInternal[]**](../Model/EthTxInternal.md)

### Description

Get Ethereum internal transactions by address

<h4>1 credit per API call.</h4>

 Get Ethereum internal transactions by address.

### Example

[✨ View "ethGetInternalTransactionByAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGetInternalTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransaction()`

> **GET** `/v3/ethereum/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetTransaction(
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthTx**](../Model/EthTx.md)

### Description

Get Ethereum Transaction

<h4>1 credit per API call.</h4>

Get Ethereum transaction by transaction hash.

### Example

[✨ View "ethGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransactionByAddress()`

> **GET** `/v3/ethereum/account/transaction/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetTransactionByAddress(
    string $address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to, ]
    [ string $sort = 'DESC', ]
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthTx[]
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
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthTx[]**](../Model/EthTx.md)

### Description

Get Ethereum transactions by address

<h4>1 credit per API call.</h4>

Get Ethereum transactions by address. This includes incoming and outgoing transactions for the address.

### Example

[✨ View "ethGetTransactionByAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransactionCount()`

> **GET** `/v3/ethereum/transaction/count/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetTransactionCount(
    string $address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | address |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**float**

### Description

Get count of outgoing Ethereum transactions

<h4>1 credit per API call.</h4>

 Get a number of outgoing Ethereum transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

### Example

[✨ View "ethGetTransactionCount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethWeb3Driver()`

> **POST** `/v3/ethereum/web3/{xApiKey}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethWeb3Driver(
    string $x_api_key,
    object $body,
    [ string $testnet_type = 'ethereum-sepolia' ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$body** | **object**  |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**object**

### Description

Web3 HTTP driver

<b>2 credits per API call</b>

 <b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b>


 Use this endpoint URL as an http-based web3 driver to connect directly to the Ethereum node provided by Tatum. To learn more about Ethereum Web3, visit the <a href="https://ethereum.org/en/developers/" target="_blank">Ethereum developers' guide</a>.

### Example

[✨ View "ethWeb3Driver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/ethWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferEthBlockchain()`

> **POST** `/v3/ethereum/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->transferEthBlockchain(
    \Tatum\Model\TransferEthBlockchain $transfer_eth_blockchain,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_blockchain** | [**\Tatum\Model\TransferEthBlockchain**](../Model/TransferEthBlockchain.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Ethereum / ERC20 from account to account

<b>2 credits per API call</b>

 Send Ethereum or Tatum supported ERC20 token from account to account.

 <b>Signing a transaction</b>

 When sending ETH, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.

 For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "transferEthBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/transferEthBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferEthBlockchainKMS()`

> **POST** `/v3/ethereum/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->transferEthBlockchainKMS(
    \Tatum\Model\TransferEthBlockchainKMS $transfer_eth_blockchain_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_blockchain_kms** | [**\Tatum\Model\TransferEthBlockchainKMS**](../Model/TransferEthBlockchainKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Ethereum / ERC20 from account to account

TransferEthBlockchainKMS operation

### Example

[✨ View "transferEthBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/EthereumApi/transferEthBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
