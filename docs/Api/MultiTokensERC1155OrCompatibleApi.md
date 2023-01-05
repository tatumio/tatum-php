# Tatum/Api/MultiTokensERC1155OrCompatibleApi

* Multi Tokens (ERC-1155 or compatible) [documentation](https://apidoc.tatum.io/tag/Multi-Tokens-(ERC-1155-or-compatible)/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**multiTokenGetAddressBalance()**](#multitokengetaddressbalance) | **GET** `/v3/multitoken/address/balance/{chain}/{address}` | Get all Multi Tokens that a blockchain address holds
[**multiTokenGetBalance()**](#multitokengetbalance) | **GET** `/v3/multitoken/balance/{chain}/{contractAddress}/{address}/{tokenId}` | Get the amount of a specific MultiToken that a blockchain address holds
[**multiTokenGetBalanceBatch()**](#multitokengetbalancebatch) | **GET** `/v3/multitoken/balance/batch/{chain}/{contractAddress}` | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
[**multiTokenGetContractAddress()**](#multitokengetcontractaddress) | **GET** `/v3/multitoken/address/{chain}/{hash}` | Get the address of a Multi Token smart contract by its transaction hash
[**multiTokenGetMetadata()**](#multitokengetmetadata) | **GET** `/v3/multitoken/metadata/{chain}/{contractAddress}/{token}` | Get Multi Token metadata
[**multiTokenGetTransaction()**](#multitokengettransaction) | **GET** `/v3/multitoken/transaction/{chain}/{hash}` | Get a Multi Token transaction by its hash
[**multiTokenGetTransactionByAddress()**](#multitokengettransactionbyaddress) | **GET** `/v3/multitoken/transaction/{chain}/{address}/{tokenAddress}` | Get Multi Token transactions on a blockchain address
[**multitokenBurnBatchBurnMultiTokenBatch()**](#multitokenburnbatchburnmultitokenbatch) | **POST** `/v3/multitoken/burn/batch` | Burn multiple Multi Tokens
[**multitokenBurnBatchBurnMultiTokenBatchCelo()**](#multitokenburnbatchburnmultitokenbatchcelo) | **POST** `/v3/multitoken/burn/batch` | Burn multiple Multi Tokens
[**multitokenBurnBatchBurnMultiTokenBatchKMS()**](#multitokenburnbatchburnmultitokenbatchkms) | **POST** `/v3/multitoken/burn/batch` | Burn multiple Multi Tokens
[**multitokenBurnBatchBurnMultiTokenBatchKMSCelo()**](#multitokenburnbatchburnmultitokenbatchkmscelo) | **POST** `/v3/multitoken/burn/batch` | Burn multiple Multi Tokens
[**multitokenBurnMultiToken()**](#multitokenburnmultitoken) | **POST** `/v3/multitoken/burn` | Burn a Multi Token
[**multitokenBurnMultiTokenCelo()**](#multitokenburnmultitokencelo) | **POST** `/v3/multitoken/burn` | Burn a Multi Token
[**multitokenBurnMultiTokenKMS()**](#multitokenburnmultitokenkms) | **POST** `/v3/multitoken/burn` | Burn a Multi Token
[**multitokenBurnMultiTokenKMSCelo()**](#multitokenburnmultitokenkmscelo) | **POST** `/v3/multitoken/burn` | Burn a Multi Token
[**multitokenDeployMultiToken()**](#multitokendeploymultitoken) | **POST** `/v3/multitoken/deploy` | Deploy a Multi Token smart contract
[**multitokenDeployMultiTokenCelo()**](#multitokendeploymultitokencelo) | **POST** `/v3/multitoken/deploy` | Deploy a Multi Token smart contract
[**multitokenDeployMultiTokenCeloKMS()**](#multitokendeploymultitokencelokms) | **POST** `/v3/multitoken/deploy` | Deploy a Multi Token smart contract
[**multitokenDeployMultiTokenKMS()**](#multitokendeploymultitokenkms) | **POST** `/v3/multitoken/deploy` | Deploy a Multi Token smart contract
[**multitokenMintAddMultiTokenMinter()**](#multitokenmintaddmultitokenminter) | **POST** `/v3/multitoken/mint/add` | Add a Multi Token minter
[**multitokenMintAddMultiTokenMinterKMS()**](#multitokenmintaddmultitokenminterkms) | **POST** `/v3/multitoken/mint/add` | Add a Multi Token minter
[**multitokenMintBatchMintMultiTokenBatch()**](#multitokenmintbatchmintmultitokenbatch) | **POST** `/v3/multitoken/mint/batch` | Mint multiple Multi Tokens
[**multitokenMintBatchMintMultiTokenBatchCelo()**](#multitokenmintbatchmintmultitokenbatchcelo) | **POST** `/v3/multitoken/mint/batch` | Mint multiple Multi Tokens
[**multitokenMintBatchMintMultiTokenBatchKMS()**](#multitokenmintbatchmintmultitokenbatchkms) | **POST** `/v3/multitoken/mint/batch` | Mint multiple Multi Tokens
[**multitokenMintBatchMintMultiTokenBatchKMSCelo()**](#multitokenmintbatchmintmultitokenbatchkmscelo) | **POST** `/v3/multitoken/mint/batch` | Mint multiple Multi Tokens
[**multitokenMintMultiToken()**](#multitokenmintmultitoken) | **POST** `/v3/multitoken/mint` | Mint a Multi Token
[**multitokenMintMultiTokenCelo()**](#multitokenmintmultitokencelo) | **POST** `/v3/multitoken/mint` | Mint a Multi Token
[**multitokenMintMultiTokenKMS()**](#multitokenmintmultitokenkms) | **POST** `/v3/multitoken/mint` | Mint a Multi Token
[**multitokenMintMultiTokenKMSCelo()**](#multitokenmintmultitokenkmscelo) | **POST** `/v3/multitoken/mint` | Mint a Multi Token
[**multitokenTransactionBatchTransferMultiTokenBatch()**](#multitokentransactionbatchtransfermultitokenbatch) | **POST** `/v3/multitoken/transaction/batch` | Transfer multiple Multi Tokens
[**multitokenTransactionBatchTransferMultiTokenBatchCelo()**](#multitokentransactionbatchtransfermultitokenbatchcelo) | **POST** `/v3/multitoken/transaction/batch` | Transfer multiple Multi Tokens
[**multitokenTransactionBatchTransferMultiTokenBatchKMS()**](#multitokentransactionbatchtransfermultitokenbatchkms) | **POST** `/v3/multitoken/transaction/batch` | Transfer multiple Multi Tokens
[**multitokenTransactionBatchTransferMultiTokenBatchKMSCelo()**](#multitokentransactionbatchtransfermultitokenbatchkmscelo) | **POST** `/v3/multitoken/transaction/batch` | Transfer multiple Multi Tokens
[**multitokenTransactionTransferMultiToken()**](#multitokentransactiontransfermultitoken) | **POST** `/v3/multitoken/transaction` | Transfer a Multi Token
[**multitokenTransactionTransferMultiTokenCelo()**](#multitokentransactiontransfermultitokencelo) | **POST** `/v3/multitoken/transaction` | Transfer a Multi Token
[**multitokenTransactionTransferMultiTokenKMS()**](#multitokentransactiontransfermultitokenkms) | **POST** `/v3/multitoken/transaction` | Transfer a Multi Token
[**multitokenTransactionTransferMultiTokenKMSCelo()**](#multitokentransactiontransfermultitokenkmscelo) | **POST** `/v3/multitoken/transaction` | Transfer a Multi Token


## `multiTokenGetAddressBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetAddressBalance(
    string $chain,
    string $address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetAddressBalance200ResponseInner[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$address** | **string**  | Blockchain address |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetAddressBalance200ResponseInner[]**](../Model/MultiTokenGetAddressBalance200ResponseInner.md)

### Description

Get all Multi Tokens that a blockchain address holds

<p><b>1 credit per API call</b></p> <p>Get all Multi Tokens that a blockchain address holds. The Multi Tokens are returned grouped by the smart contracts they were minted on.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "multiTokenGetAddressBalance.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetAddressBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetBalance(
    string $chain,
    string $address,
    string $contract_address,
    string $token_id,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$address** | **string**  | The blockchain address that you want to get the token balance of |
 **$contract_address** | **string**  | The address of the Multi Token smart contract |
 **$token_id** | **string**  | The ID of the Multi Token |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetBalance200Response**](../Model/MultiTokenGetBalance200Response.md)

### Description

Get the amount of a specific MultiToken that a blockchain address holds

<p><b>1 credit per API call</b></p> <p>Get the amount of a specific Multi Token (minted on the smart contract specified by the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "multiTokenGetBalance.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetBalanceBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetBalanceBatch(
    string $chain,
    string $contract_address,
    string $token_id,
    string $address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | The address of the Multi Token smart contract |
 **$token_id** | **string**  | Comma-separated IDs of the Multi Tokens to get the amounts for |
 **$address** | **string**  | Comma-separated blockchain addresses to get the token balance for |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**string[]**

### Description

Get the amount of one or multiple Multi Tokens for multiple blockchain addresses

<p><b>1 credit per API call</b></p> <p>For multiple blockchain addresses, get the amount of one or multiple Multi Tokens (minted on the smart contract specified by the <code>contractAddress</code> path parameter in the request endpoint URL) that those addresses hold.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "multiTokenGetBalanceBatch.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetBalanceBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetContractAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetContractAddress(
    string $chain,
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetContractAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$hash** | **string**  | Transaction hash |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetContractAddress200Response**](../Model/MultiTokenGetContractAddress200Response.md)

### Description

Get the address of a Multi Token smart contract by its transaction hash

<p><p>This endpoint is deprecated. Do not use it.<br/> Instead, use <a href="https://apidoc.tatum.io/tag/Blockchain-utils#operation/SCGetContractAddress" target="_blank">this API</a>.</b></p><br/> <p><b>1 credit per API call</b></p> <p>Get Multi Token contract address from deploy transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "multiTokenGetContractAddress.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetContractAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetMetadata()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetMetadata(
    string $chain,
    string $token,
    string $contract_address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetMetadata200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$token** | **string**  | Token ID |
 **$contract_address** | **string**  | Multi Token contract address |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetMetadata200Response**](../Model/MultiTokenGetMetadata200Response.md)

### Description

Get Multi Token metadata

<p><b>1 credit per API call</b></p> <p>Get Multi Token metadata.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "multiTokenGetMetadata.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetMetadata.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetTransaction(
    string $chain,
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetTransaction200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$hash** | **string**  | Transaction hash |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetTransaction200Response**](../Model/MultiTokenGetTransaction200Response.md)

### Description

Get a Multi Token transaction by its hash

<p><b>1 credit per API call</b></p> <p>Get Multi Token transaction by transaction hash.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "multiTokenGetTransaction.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetTransactionByAddress(
    string $chain,
    string $address,
    string $token_address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to ]
): \Tatum\Model\MultiTokenGetTransactionByAddress200ResponseInner[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$address** | **string**  | Account address you want to get balance of |
 **$token_address** | **string**  | Address of the token smart contract |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$from** | **float**  | Transactions from this block onwards will be included. | [optional]
 **$to** | **float**  | Transactions up to this block will be included. | [optional]

### Return type

[**\Tatum\Model\MultiTokenGetTransactionByAddress200ResponseInner[]**](../Model/MultiTokenGetTransactionByAddress200ResponseInner.md)

### Description

Get Multi Token transactions on a blockchain address

<p><b>1 credit per API call</b></p> <p>Get incoming and outgoing Multi Token transactions on a blockchain address.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "multiTokenGetTransactionByAddress.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnBatchBurnMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnBatchBurnMultiTokenBatch(
    \Tatum\Model\BurnMultiTokenBatch $burn_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch** | [**\Tatum\Model\BurnMultiTokenBatch**](../Model/BurnMultiTokenBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Burn multiple Multi Token Tokens by id assigned to same address in one transaction. This method destroys any Multi Tokens token from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When burning multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenBurnBatchBurnMultiTokenBatch.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnBatchBurnMultiTokenBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnBatchBurnMultiTokenBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnBatchBurnMultiTokenBatchCelo(
    \Tatum\Model\BurnMultiTokenBatchCelo $burn_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_celo** | [**\Tatum\Model\BurnMultiTokenBatchCelo**](../Model/BurnMultiTokenBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchCelo operation

### Example

[✨ View "multitokenBurnBatchBurnMultiTokenBatchCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnBatchBurnMultiTokenBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnBatchBurnMultiTokenBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnBatchBurnMultiTokenBatchKMS(
    \Tatum\Model\BurnMultiTokenBatchKMS $burn_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_kms** | [**\Tatum\Model\BurnMultiTokenBatchKMS**](../Model/BurnMultiTokenBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchKMS operation

### Example

[✨ View "multitokenBurnBatchBurnMultiTokenBatchKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnBatchBurnMultiTokenBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnBatchBurnMultiTokenBatchKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnBatchBurnMultiTokenBatchKMSCelo(
    \Tatum\Model\BurnMultiTokenBatchKMSCelo $burn_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_kms_celo** | [**\Tatum\Model\BurnMultiTokenBatchKMSCelo**](../Model/BurnMultiTokenBatchKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchKMSCelo operation

### Example

[✨ View "multitokenBurnBatchBurnMultiTokenBatchKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnBatchBurnMultiTokenBatchKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnMultiToken(
    \Tatum\Model\BurnMultiToken $burn_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token** | [**\Tatum\Model\BurnMultiToken**](../Model/BurnMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn a Multi Token

<p><b>2 credits per API call</b></p> <p>Burn a fixed amount of Multi Tokens by id. This method destroys Multi Tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When burning a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenBurnMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnMultiTokenCelo(
    \Tatum\Model\BurnMultiTokenCelo $burn_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_celo** | [**\Tatum\Model\BurnMultiTokenCelo**](../Model/BurnMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn a Multi Token

BurnMultiTokenCelo operation

### Example

[✨ View "multitokenBurnMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnMultiTokenKMS(
    \Tatum\Model\BurnMultiTokenKMS $burn_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_kms** | [**\Tatum\Model\BurnMultiTokenKMS**](../Model/BurnMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn a Multi Token

BurnMultiTokenKMS operation

### Example

[✨ View "multitokenBurnMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenBurnMultiTokenKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenBurnMultiTokenKMSCelo(
    \Tatum\Model\BurnMultiTokenKMSCelo $burn_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_kms_celo** | [**\Tatum\Model\BurnMultiTokenKMSCelo**](../Model/BurnMultiTokenKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn a Multi Token

BurnMultiTokenKMSCelo operation

### Example

[✨ View "multitokenBurnMultiTokenKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenBurnMultiTokenKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenDeployMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenDeployMultiToken(
    \Tatum\Model\DeployMultiToken $deploy_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token** | [**\Tatum\Model\DeployMultiToken**](../Model/DeployMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy a Multi Token smart contract

<p><b>2 credits per API call</b></p> <p>Deploy Multi Token Smart Contract. This method creates new ERC1155 Smart Contract (Multi Tokens) on the blockchain. Smart contract is standardized and audited. It is possible to mint, burn and transfer tokens. It is also possible to mint multiple tokens at once.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When deploying a Multi Token smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenDeployMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenDeployMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenDeployMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenDeployMultiTokenCelo(
    \Tatum\Model\DeployMultiTokenCelo $deploy_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_celo** | [**\Tatum\Model\DeployMultiTokenCelo**](../Model/DeployMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenCelo operation

### Example

[✨ View "multitokenDeployMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenDeployMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenDeployMultiTokenCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenDeployMultiTokenCeloKMS(
    \Tatum\Model\DeployMultiTokenCeloKMS $deploy_multi_token_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_celo_kms** | [**\Tatum\Model\DeployMultiTokenCeloKMS**](../Model/DeployMultiTokenCeloKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenCeloKMS operation

### Example

[✨ View "multitokenDeployMultiTokenCeloKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenDeployMultiTokenCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenDeployMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenDeployMultiTokenKMS(
    \Tatum\Model\DeployMultiTokenKMS $deploy_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_kms** | [**\Tatum\Model\DeployMultiTokenKMS**](../Model/DeployMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenKMS operation

### Example

[✨ View "multitokenDeployMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenDeployMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintAddMultiTokenMinter()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintAddMultiTokenMinter(
    \Tatum\Model\AddMultiTokenMinter $add_multi_token_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_multi_token_minter** | [**\Tatum\Model\AddMultiTokenMinter**](../Model/AddMultiTokenMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Add a Multi Token minter

<p><b>2 credits per API call</b></p> <p>Add Multi Token minter.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When adding a Multi Token minter, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenMintAddMultiTokenMinter.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintAddMultiTokenMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintAddMultiTokenMinterKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintAddMultiTokenMinterKMS(
    \Tatum\Model\AddMultiTokenMinterKMS $add_multi_token_minter_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_multi_token_minter_kms** | [**\Tatum\Model\AddMultiTokenMinterKMS**](../Model/AddMultiTokenMinterKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Add a Multi Token minter

AddMultiTokenMinterKMS operation

### Example

[✨ View "multitokenMintAddMultiTokenMinterKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintAddMultiTokenMinterKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintBatchMintMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintBatchMintMultiTokenBatch(
    \Tatum\Model\MintMultiTokenBatch $mint_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch** | [**\Tatum\Model\MintMultiTokenBatch**](../Model/MintMultiTokenBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Create a fixed amount of multiple Multi Tokens Tokens and transfer them to destination account in one transaction. Create and transfer Multi Tokens tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When minting multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenMintBatchMintMultiTokenBatch.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintBatchMintMultiTokenBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintBatchMintMultiTokenBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintBatchMintMultiTokenBatchCelo(
    \Tatum\Model\MintMultiTokenBatchCelo $mint_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_celo** | [**\Tatum\Model\MintMultiTokenBatchCelo**](../Model/MintMultiTokenBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchCelo operation

### Example

[✨ View "multitokenMintBatchMintMultiTokenBatchCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintBatchMintMultiTokenBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintBatchMintMultiTokenBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintBatchMintMultiTokenBatchKMS(
    \Tatum\Model\MintMultiTokenBatchKMS $mint_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_kms** | [**\Tatum\Model\MintMultiTokenBatchKMS**](../Model/MintMultiTokenBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchKMS operation

### Example

[✨ View "multitokenMintBatchMintMultiTokenBatchKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintBatchMintMultiTokenBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintBatchMintMultiTokenBatchKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintBatchMintMultiTokenBatchKMSCelo(
    \Tatum\Model\MintMultiTokenBatchKMSCelo $mint_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_kms_celo** | [**\Tatum\Model\MintMultiTokenBatchKMSCelo**](../Model/MintMultiTokenBatchKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchKMSCelo operation

### Example

[✨ View "multitokenMintBatchMintMultiTokenBatchKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintBatchMintMultiTokenBatchKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintMultiToken(
    \Tatum\Model\MintMultiToken $mint_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token** | [**\Tatum\Model\MintMultiToken**](../Model/MintMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint a Multi Token

<p><b>2 credits per API call</b></p> <p>Mint a fixed amount of Multi Token and transfer it to destination account. Create and transfer any Multi Token token from smart contract defined in contractAddress. It is possible to add Metadata to the created token with a more detailed information about instead.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When minting a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenMintMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintMultiTokenCelo(
    \Tatum\Model\MintMultiTokenCelo $mint_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_celo** | [**\Tatum\Model\MintMultiTokenCelo**](../Model/MintMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint a Multi Token

MintMultiTokenCelo operation

### Example

[✨ View "multitokenMintMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintMultiTokenKMS(
    \Tatum\Model\MintMultiTokenKMS $mint_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_kms** | [**\Tatum\Model\MintMultiTokenKMS**](../Model/MintMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint a Multi Token

MintMultiTokenKMS operation

### Example

[✨ View "multitokenMintMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenMintMultiTokenKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenMintMultiTokenKMSCelo(
    \Tatum\Model\MintMultiTokenKMSCelo $mint_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_kms_celo** | [**\Tatum\Model\MintMultiTokenKMSCelo**](../Model/MintMultiTokenKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Mint a Multi Token

MintMultiTokenKMSCelo operation

### Example

[✨ View "multitokenMintMultiTokenKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenMintMultiTokenKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionBatchTransferMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionBatchTransferMultiTokenBatch(
    \Tatum\Model\TransferMultiTokenBatch $transfer_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch** | [**\Tatum\Model\TransferMultiTokenBatch**](../Model/TransferMultiTokenBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Transfer Multi Token Batch from account to various other accounts in one transaction. Transfer multiple Multi Tokens token from smart contract defined in contractAddress.</p> <p>Multiple token with specified tokenIds and values can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and BSC.</b> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When transferring multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenTransactionBatchTransferMultiTokenBatch.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionBatchTransferMultiTokenBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionBatchTransferMultiTokenBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionBatchTransferMultiTokenBatchCelo(
    \Tatum\Model\TransferMultiTokenBatchCelo $transfer_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_celo** | [**\Tatum\Model\TransferMultiTokenBatchCelo**](../Model/TransferMultiTokenBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchCelo operation

### Example

[✨ View "multitokenTransactionBatchTransferMultiTokenBatchCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionBatchTransferMultiTokenBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionBatchTransferMultiTokenBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionBatchTransferMultiTokenBatchKMS(
    \Tatum\Model\TransferMultiTokenBatchKMS $transfer_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_kms** | [**\Tatum\Model\TransferMultiTokenBatchKMS**](../Model/TransferMultiTokenBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchKMS operation

### Example

[✨ View "multitokenTransactionBatchTransferMultiTokenBatchKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionBatchTransferMultiTokenBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionBatchTransferMultiTokenBatchKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionBatchTransferMultiTokenBatchKMSCelo(
    \Tatum\Model\TransferMultiTokenBatchKMSCelo $transfer_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_kms_celo** | [**\Tatum\Model\TransferMultiTokenBatchKMSCelo**](../Model/TransferMultiTokenBatchKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchKMSCelo operation

### Example

[✨ View "multitokenTransactionBatchTransferMultiTokenBatchKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionBatchTransferMultiTokenBatchKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionTransferMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionTransferMultiToken(
    \Tatum\Model\TransferMultiToken $transfer_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token** | [**\Tatum\Model\TransferMultiToken**](../Model/TransferMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer a Multi Token

<p><b>2 credits per API call</b></p> <p>Transfer a certain amount of Multi Token from account to another account. Transfer Multi Tokens token from smart contract defined in contractAddress.</p> <p>Only 1 specific token with specified tokenId and value can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and blockchains.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When transferring a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "multitokenTransactionTransferMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionTransferMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionTransferMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionTransferMultiTokenCelo(
    \Tatum\Model\TransferMultiTokenCelo $transfer_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_celo** | [**\Tatum\Model\TransferMultiTokenCelo**](../Model/TransferMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer a Multi Token

TransferMultiTokenCelo operation

### Example

[✨ View "multitokenTransactionTransferMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionTransferMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionTransferMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionTransferMultiTokenKMS(
    \Tatum\Model\TransferMultiTokenKMS $transfer_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_kms** | [**\Tatum\Model\TransferMultiTokenKMS**](../Model/TransferMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer a Multi Token

TransferMultiTokenKMS operation

### Example

[✨ View "multitokenTransactionTransferMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionTransferMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multitokenTransactionTransferMultiTokenKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multitokenTransactionTransferMultiTokenKMSCelo(
    \Tatum\Model\TransferMultiTokenKMSCelo $transfer_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_kms_celo** | [**\Tatum\Model\TransferMultiTokenKMSCelo**](../Model/TransferMultiTokenKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer a Multi Token

TransferMultiTokenKMSCelo operation

### Example

[✨ View "multitokenTransactionTransferMultiTokenKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/multitokenTransactionTransferMultiTokenKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
