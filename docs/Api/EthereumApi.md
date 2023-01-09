# Tatum/Api/EthereumApi

* Ethereum [documentation](https://apidoc.tatum.io/tag/Ethereum/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**call Read Smart Contract Method()**](#callreadsmartcontractmethod) | **POST** `/v3 /ethereum /smartcontract` | Invoke a method in a smart contract on Ethereum
[**call Smart Contract Method()**](#callsmartcontractmethod) | **POST** `/v3 /ethereum /smartcontract` | Invoke a method in a smart contract on Ethereum
[**call Smart Contract Method KMS()**](#callsmartcontractmethodkms) | **POST** `/v3 /ethereum /smartcontract` | Invoke a method in a smart contract on Ethereum
[**eth Broadcast()**](#ethbroadcast) | **POST** `/v3 /ethereum /broadcast` | Broadcast signed Ethereum transaction
[**eth Generate Address()**](#ethgenerateaddress) | **GET** `/v3 /ethereum /address /{xpub} /{index}` | Generate Ethereum account address from Extended public key
[**eth Generate Address Private Key()**](#ethgenerateaddressprivatekey) | **POST** `/v3 /ethereum /wallet /priv` | Generate Ethereum private key
[**eth Generate Wallet()**](#ethgeneratewallet) | **GET** `/v3 /ethereum /wallet` | Generate Ethereum wallet
[**eth Get Balance()**](#ethgetbalance) | **GET** `/v3 /ethereum /account /balance /{address}` | Get the ETH balance of an Ethereum account
[**eth Get Block()**](#ethgetblock) | **GET** `/v3 /ethereum /block /{hash}` | Get Ethereum block by hash
[**eth Get Current Block()**](#ethgetcurrentblock) | **GET** `/v3 /ethereum /block /current` | Get current block number
[**eth Get Internal Transaction By Address()**](#ethgetinternaltransactionbyaddress) | **GET** `/v3 /ethereum /account /transaction /erc20 /internal /{address}` | Get Ethereum internal transactions by address
[**eth Get Transaction()**](#ethgettransaction) | **GET** `/v3 /ethereum /transaction /{hash}` | Get Ethereum Transaction
[**eth Get Transaction By Address()**](#ethgettransactionbyaddress) | **GET** `/v3 /ethereum /account /transaction /{address}` | Get Ethereum transactions by address
[**eth Get Transaction Count()**](#ethgettransactioncount) | **GET** `/v3 /ethereum /transaction /count /{address}` | Get count of outgoing Ethereum transactions
[**eth Web3 Driver()**](#ethweb3driver) | **POST** `/v3 /ethereum /web3 /{xApiKey}` | Web3 HTTP driver
[**transfer Eth Blockchain()**](#transferethblockchain) | **POST** `/v3 /ethereum /transaction` | Send Ethereum / ERC20 from account to account
[**transfer Eth Blockchain KMS()**](#transferethblockchainkms) | **POST** `/v3 /ethereum /transaction` | Send Ethereum / ERC20 from account to account


## `callReadSmartContractMethod()`

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

[✨ View "callReadSmartContractMethod.php"](../../examples/Api/EthereumApi/callReadSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callSmartContractMethod()`

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

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Ethereum.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul> <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "callSmartContractMethod.php"](../../examples/Api/EthereumApi/callSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callSmartContractMethodKMS()`

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

[✨ View "callSmartContractMethodKMS.php"](../../examples/Api/EthereumApi/callSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethBroadcast()`

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

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to Ethereum blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "ethBroadcast.php"](../../examples/Api/EthereumApi/ethBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateAddress()`

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

<h4>1 credit per API call.</h4><br/> <p>Generates an Ethereum account deposit address from an Extended public key. The deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "ethGenerateAddress.php"](../../examples/Api/EthereumApi/ethGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateAddressPrivateKey()`

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

<h4>1 credit per API call.</h4><br/> <p>Generates the private key of an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "ethGenerateAddressPrivateKey.php"](../../examples/Api/EthereumApi/ethGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateWallet()`

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

<h4>1 credit per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value which should never be revealed</li><li>Public Key - a public address to be published</li><li>Derivation index - an index of generated address</li></ul></p><p>Tatum follows the BIP44 specification and generates for Ethereum wallets with the derivation path m/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generates a BIP44 compatible Ethereum wallet.</p>

### Example

[✨ View "ethGenerateWallet.php"](../../examples/Api/EthereumApi/ethGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetBalance()`

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

<p><b>1 credit per API call</b></p> <p>Get the balance of <b>ETH</b> of an Ethereum account.</p> <p>To get the balance of <b>tokens</b>, use the APIs for getting the balance of <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20GetBalanceAddress" target="_blank">fungible tokens (ERC-20)</a> and <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)#operation/NftGetTokensByAddressErc721" target="_blank">NFTs (ERC-721)</a>.</p>

### Example

[✨ View "ethGetBalance.php"](../../examples/Api/EthereumApi/ethGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetBlock()`

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

<h4>1 credit per API call.</h4><br/><p>Gets an Ethereum block-by-block hash or block number.</p>

### Example

[✨ View "ethGetBlock.php"](../../examples/Api/EthereumApi/ethGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetCurrentBlock()`

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

<h4>1 credit per API call.</h4><br/><p>Gets the current Ethereum block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "ethGetCurrentBlock.php"](../../examples/Api/EthereumApi/ethGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetInternalTransactionByAddress()`

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

<h4>1 credit per API call.</h4><br/> <p>Get Ethereum internal transactions by address.<br/></p>

### Example

[✨ View "ethGetInternalTransactionByAddress.php"](../../examples/Api/EthereumApi/ethGetInternalTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransaction()`

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

<h4>1 credit per API call.</h4><br/><p>Get Ethereum transaction by transaction hash.</p>

### Example

[✨ View "ethGetTransaction.php"](../../examples/Api/EthereumApi/ethGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransactionByAddress()`

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

<h4>1 credit per API call.</h4><br/><p>Get Ethereum transactions by address. This includes incoming and outgoing transactions for the address.</p>

### Example

[✨ View "ethGetTransactionByAddress.php"](../../examples/Api/EthereumApi/ethGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransactionCount()`

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

<h4>1 credit per API call.</h4><br/> <p>Get a number of outgoing Ethereum transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

[✨ View "ethGetTransactionCount.php"](../../examples/Api/EthereumApi/ethGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethWeb3Driver()`

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

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as an http-based web3 driver to connect directly to the Ethereum node provided by Tatum. To learn more about Ethereum Web3, visit the <a href="https://ethereum.org/en/developers/" target="_blank">Ethereum developers' guide</a>.</p>

### Example

[✨ View "ethWeb3Driver.php"](../../examples/Api/EthereumApi/ethWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferEthBlockchain()`

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

<p><b>2 credits per API call</b></p> <p>Send Ethereum or Tatum supported ERC20 token from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending ETH, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferEthBlockchain.php"](../../examples/Api/EthereumApi/transferEthBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferEthBlockchainKMS()`

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

[✨ View "transferEthBlockchainKMS.php"](../../examples/Api/EthereumApi/transferEthBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
