# Tatum/Api/MultiTokensERC1155OrCompatibleApi

* Multi Tokens (ERC-1155 or compatible) [documentation](https://apidoc.tatum.io/tag/Multi-Tokens-(ERC-1155-or-compatible)/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**add Multi Token Minter()**](#addmultitokenminter) | **POST** `/v3 /multitoken /mint /add` | Add a Multi Token minter
[**add Multi Token Minter KMS()**](#addmultitokenminterkms) | **POST** `/v3 /multitoken /mint /add` | Add a Multi Token minter
[**burn Multi Token()**](#burnmultitoken) | **POST** `/v3 /multitoken /burn` | Burn a Multi Token
[**burn Multi Token Batch()**](#burnmultitokenbatch) | **POST** `/v3 /multitoken /burn /batch` | Burn multiple Multi Tokens
[**burn Multi Token Batch Celo()**](#burnmultitokenbatchcelo) | **POST** `/v3 /multitoken /burn /batch` | Burn multiple Multi Tokens
[**burn Multi Token Batch KMS()**](#burnmultitokenbatchkms) | **POST** `/v3 /multitoken /burn /batch` | Burn multiple Multi Tokens
[**burn Multi Token Batch KMSCelo()**](#burnmultitokenbatchkmscelo) | **POST** `/v3 /multitoken /burn /batch` | Burn multiple Multi Tokens
[**burn Multi Token Celo()**](#burnmultitokencelo) | **POST** `/v3 /multitoken /burn` | Burn a Multi Token
[**burn Multi Token KMS()**](#burnmultitokenkms) | **POST** `/v3 /multitoken /burn` | Burn a Multi Token
[**burn Multi Token KMSCelo()**](#burnmultitokenkmscelo) | **POST** `/v3 /multitoken /burn` | Burn a Multi Token
[**deploy Multi Token()**](#deploymultitoken) | **POST** `/v3 /multitoken /deploy` | Deploy a Multi Token smart contract
[**deploy Multi Token Celo()**](#deploymultitokencelo) | **POST** `/v3 /multitoken /deploy` | Deploy a Multi Token smart contract
[**deploy Multi Token Celo KMS()**](#deploymultitokencelokms) | **POST** `/v3 /multitoken /deploy` | Deploy a Multi Token smart contract
[**deploy Multi Token KMS()**](#deploymultitokenkms) | **POST** `/v3 /multitoken /deploy` | Deploy a Multi Token smart contract
[**mint Multi Token()**](#mintmultitoken) | **POST** `/v3 /multitoken /mint` | Mint a Multi Token
[**mint Multi Token Batch()**](#mintmultitokenbatch) | **POST** `/v3 /multitoken /mint /batch` | Mint multiple Multi Tokens
[**mint Multi Token Batch Celo()**](#mintmultitokenbatchcelo) | **POST** `/v3 /multitoken /mint /batch` | Mint multiple Multi Tokens
[**mint Multi Token Batch KMS()**](#mintmultitokenbatchkms) | **POST** `/v3 /multitoken /mint /batch` | Mint multiple Multi Tokens
[**mint Multi Token Batch KMSCelo()**](#mintmultitokenbatchkmscelo) | **POST** `/v3 /multitoken /mint /batch` | Mint multiple Multi Tokens
[**mint Multi Token Celo()**](#mintmultitokencelo) | **POST** `/v3 /multitoken /mint` | Mint a Multi Token
[**mint Multi Token KMS()**](#mintmultitokenkms) | **POST** `/v3 /multitoken /mint` | Mint a Multi Token
[**mint Multi Token KMSCelo()**](#mintmultitokenkmscelo) | **POST** `/v3 /multitoken /mint` | Mint a Multi Token
[**multi Token Get Address Balance()**](#multitokengetaddressbalance) | **GET** `/v3 /multitoken /address /balance /{chain} /{address}` | Get all Multi Tokens that a blockchain address holds
[**multi Token Get Balance()**](#multitokengetbalance) | **GET** `/v3 /multitoken /balance /{chain} /{contractAddress} /{address} /{tokenId}` | Get the amount of a specific MultiToken that a blockchain address holds
[**multi Token Get Balance Batch()**](#multitokengetbalancebatch) | **GET** `/v3 /multitoken /balance /batch /{chain} /{contractAddress}` | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
[**multi Token Get Contract Address()**](#multitokengetcontractaddress) | **GET** `/v3 /multitoken /address /{chain} /{hash}` | Get the address of a Multi Token smart contract by its transaction hash
[**multi Token Get Metadata()**](#multitokengetmetadata) | **GET** `/v3 /multitoken /metadata /{chain} /{contractAddress} /{token}` | Get Multi Token metadata
[**multi Token Get Transaction()**](#multitokengettransaction) | **GET** `/v3 /multitoken /transaction /{chain} /{hash}` | Get a Multi Token transaction by its hash
[**multi Token Get Transaction By Address()**](#multitokengettransactionbyaddress) | **GET** `/v3 /multitoken /transaction /{chain} /{address} /{tokenAddress}` | Get Multi Token transactions on a blockchain address
[**transfer Multi Token()**](#transfermultitoken) | **POST** `/v3 /multitoken /transaction` | Transfer a Multi Token
[**transfer Multi Token Batch()**](#transfermultitokenbatch) | **POST** `/v3 /multitoken /transaction /batch` | Transfer multiple Multi Tokens
[**transfer Multi Token Batch Celo()**](#transfermultitokenbatchcelo) | **POST** `/v3 /multitoken /transaction /batch` | Transfer multiple Multi Tokens
[**transfer Multi Token Batch KMS()**](#transfermultitokenbatchkms) | **POST** `/v3 /multitoken /transaction /batch` | Transfer multiple Multi Tokens
[**transfer Multi Token Batch KMSCelo()**](#transfermultitokenbatchkmscelo) | **POST** `/v3 /multitoken /transaction /batch` | Transfer multiple Multi Tokens
[**transfer Multi Token Celo()**](#transfermultitokencelo) | **POST** `/v3 /multitoken /transaction` | Transfer a Multi Token
[**transfer Multi Token KMS()**](#transfermultitokenkms) | **POST** `/v3 /multitoken /transaction` | Transfer a Multi Token
[**transfer Multi Token KMSCelo()**](#transfermultitokenkmscelo) | **POST** `/v3 /multitoken /transaction` | Transfer a Multi Token


## `addMultiTokenMinter()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->addMultiTokenMinter(
    \Tatum\Model\AddMultiTokenMinter $add_multi_token_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_multi_token_minter** | [**\Tatum\Model\AddMultiTokenMinter**](../Model/AddMultiTokenMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Add a Multi Token minter

<p><b>2 credits per API call</b></p> <p>Add Multi Token minter.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When adding a Multi Token minter, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "addMultiTokenMinter.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/addMultiTokenMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `addMultiTokenMinterKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->addMultiTokenMinterKMS(
    \Tatum\Model\AddMultiTokenMinterKMS $add_multi_token_minter_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_multi_token_minter_kms** | [**\Tatum\Model\AddMultiTokenMinterKMS**](../Model/AddMultiTokenMinterKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Add a Multi Token minter

AddMultiTokenMinterKMS operation

### Example

[✨ View "addMultiTokenMinterKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/addMultiTokenMinterKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiToken(
    \Tatum\Model\BurnMultiToken $burn_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token** | [**\Tatum\Model\BurnMultiToken**](../Model/BurnMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn a Multi Token

<p><b>2 credits per API call</b></p> <p>Burn a fixed amount of Multi Tokens by id. This method destroys Multi Tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When burning a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "burnMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatch(
    \Tatum\Model\BurnMultiTokenBatch $burn_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch** | [**\Tatum\Model\BurnMultiTokenBatch**](../Model/BurnMultiTokenBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Burn multiple Multi Token Tokens by id assigned to same address in one transaction. This method destroys any Multi Tokens token from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When burning multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "burnMultiTokenBatch.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchCelo(
    \Tatum\Model\BurnMultiTokenBatchCelo $burn_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_celo** | [**\Tatum\Model\BurnMultiTokenBatchCelo**](../Model/BurnMultiTokenBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchCelo operation

### Example

[✨ View "burnMultiTokenBatchCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchKMS(
    \Tatum\Model\BurnMultiTokenBatchKMS $burn_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_kms** | [**\Tatum\Model\BurnMultiTokenBatchKMS**](../Model/BurnMultiTokenBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchKMS operation

### Example

[✨ View "burnMultiTokenBatchKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenBatchKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchKMSCelo(
    \Tatum\Model\BurnMultiTokenBatchKMSCelo $burn_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_kms_celo** | [**\Tatum\Model\BurnMultiTokenBatchKMSCelo**](../Model/BurnMultiTokenBatchKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchKMSCelo operation

### Example

[✨ View "burnMultiTokenBatchKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenCelo(
    \Tatum\Model\BurnMultiTokenCelo $burn_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_celo** | [**\Tatum\Model\BurnMultiTokenCelo**](../Model/BurnMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn a Multi Token

BurnMultiTokenCelo operation

### Example

[✨ View "burnMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenKMS(
    \Tatum\Model\BurnMultiTokenKMS $burn_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_kms** | [**\Tatum\Model\BurnMultiTokenKMS**](../Model/BurnMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn a Multi Token

BurnMultiTokenKMS operation

### Example

[✨ View "burnMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenKMSCelo(
    \Tatum\Model\BurnMultiTokenKMSCelo $burn_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_kms_celo** | [**\Tatum\Model\BurnMultiTokenKMSCelo**](../Model/BurnMultiTokenKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn a Multi Token

BurnMultiTokenKMSCelo operation

### Example

[✨ View "burnMultiTokenKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiToken(
    \Tatum\Model\DeployMultiToken $deploy_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token** | [**\Tatum\Model\DeployMultiToken**](../Model/DeployMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy a Multi Token smart contract

<p><b>2 credits per API call</b></p> <p>Deploy Multi Token Smart Contract. This method creates new ERC1155 Smart Contract (Multi Tokens) on the blockchain. Smart contract is standardized and audited. It is possible to mint, burn and transfer tokens. It is also possible to mint multiple tokens at once.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When deploying a Multi Token smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "deployMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiTokenCelo(
    \Tatum\Model\DeployMultiTokenCelo $deploy_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_celo** | [**\Tatum\Model\DeployMultiTokenCelo**](../Model/DeployMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenCelo operation

### Example

[✨ View "deployMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployMultiTokenCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiTokenCeloKMS(
    \Tatum\Model\DeployMultiTokenCeloKMS $deploy_multi_token_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_celo_kms** | [**\Tatum\Model\DeployMultiTokenCeloKMS**](../Model/DeployMultiTokenCeloKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenCeloKMS operation

### Example

[✨ View "deployMultiTokenCeloKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiTokenKMS(
    \Tatum\Model\DeployMultiTokenKMS $deploy_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_kms** | [**\Tatum\Model\DeployMultiTokenKMS**](../Model/DeployMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenKMS operation

### Example

[✨ View "deployMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiToken(
    \Tatum\Model\MintMultiToken $mint_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token** | [**\Tatum\Model\MintMultiToken**](../Model/MintMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint a Multi Token

<p><b>2 credits per API call</b></p> <p>Mint a fixed amount of Multi Token and transfer it to destination account. Create and transfer any Multi Token token from smart contract defined in contractAddress. It is possible to add Metadata to the created token with a more detailed information about instead.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When minting a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "mintMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatch(
    \Tatum\Model\MintMultiTokenBatch $mint_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch** | [**\Tatum\Model\MintMultiTokenBatch**](../Model/MintMultiTokenBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Create a fixed amount of multiple Multi Tokens Tokens and transfer them to destination account in one transaction. Create and transfer Multi Tokens tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When minting multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "mintMultiTokenBatch.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatchCelo(
    \Tatum\Model\MintMultiTokenBatchCelo $mint_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_celo** | [**\Tatum\Model\MintMultiTokenBatchCelo**](../Model/MintMultiTokenBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchCelo operation

### Example

[✨ View "mintMultiTokenBatchCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatchKMS(
    \Tatum\Model\MintMultiTokenBatchKMS $mint_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_kms** | [**\Tatum\Model\MintMultiTokenBatchKMS**](../Model/MintMultiTokenBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchKMS operation

### Example

[✨ View "mintMultiTokenBatchKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenBatchKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatchKMSCelo(
    \Tatum\Model\MintMultiTokenBatchKMSCelo $mint_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_kms_celo** | [**\Tatum\Model\MintMultiTokenBatchKMSCelo**](../Model/MintMultiTokenBatchKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchKMSCelo operation

### Example

[✨ View "mintMultiTokenBatchKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenCelo(
    \Tatum\Model\MintMultiTokenCelo $mint_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_celo** | [**\Tatum\Model\MintMultiTokenCelo**](../Model/MintMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint a Multi Token

MintMultiTokenCelo operation

### Example

[✨ View "mintMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenKMS(
    \Tatum\Model\MintMultiTokenKMS $mint_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_kms** | [**\Tatum\Model\MintMultiTokenKMS**](../Model/MintMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint a Multi Token

MintMultiTokenKMS operation

### Example

[✨ View "mintMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenKMSCelo(
    \Tatum\Model\MintMultiTokenKMSCelo $mint_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_kms_celo** | [**\Tatum\Model\MintMultiTokenKMSCelo**](../Model/MintMultiTokenKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Mint a Multi Token

MintMultiTokenKMSCelo operation

### Example

[✨ View "mintMultiTokenKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

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

## `transferMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiToken(
    \Tatum\Model\TransferMultiToken $transfer_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token** | [**\Tatum\Model\TransferMultiToken**](../Model/TransferMultiToken.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer a Multi Token

<p><b>2 credits per API call</b></p> <p>Transfer a certain amount of Multi Token from account to another account. Transfer Multi Tokens token from smart contract defined in contractAddress.</p> <p>Only 1 specific token with specified tokenId and value can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and blockchains.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When transferring a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferMultiToken.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatch(
    \Tatum\Model\TransferMultiTokenBatch $transfer_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch** | [**\Tatum\Model\TransferMultiTokenBatch**](../Model/TransferMultiTokenBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Transfer Multi Token Batch from account to various other accounts in one transaction. Transfer multiple Multi Tokens token from smart contract defined in contractAddress.</p> <p>Multiple token with specified tokenIds and values can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and BSC.</b> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When transferring multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "transferMultiTokenBatch.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatchCelo(
    \Tatum\Model\TransferMultiTokenBatchCelo $transfer_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_celo** | [**\Tatum\Model\TransferMultiTokenBatchCelo**](../Model/TransferMultiTokenBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchCelo operation

### Example

[✨ View "transferMultiTokenBatchCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatchKMS(
    \Tatum\Model\TransferMultiTokenBatchKMS $transfer_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_kms** | [**\Tatum\Model\TransferMultiTokenBatchKMS**](../Model/TransferMultiTokenBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchKMS operation

### Example

[✨ View "transferMultiTokenBatchKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenBatchKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatchKMSCelo(
    \Tatum\Model\TransferMultiTokenBatchKMSCelo $transfer_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_kms_celo** | [**\Tatum\Model\TransferMultiTokenBatchKMSCelo**](../Model/TransferMultiTokenBatchKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchKMSCelo operation

### Example

[✨ View "transferMultiTokenBatchKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenCelo(
    \Tatum\Model\TransferMultiTokenCelo $transfer_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_celo** | [**\Tatum\Model\TransferMultiTokenCelo**](../Model/TransferMultiTokenCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer a Multi Token

TransferMultiTokenCelo operation

### Example

[✨ View "transferMultiTokenCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenKMS(
    \Tatum\Model\TransferMultiTokenKMS $transfer_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_kms** | [**\Tatum\Model\TransferMultiTokenKMS**](../Model/TransferMultiTokenKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer a Multi Token

TransferMultiTokenKMS operation

### Example

[✨ View "transferMultiTokenKMS.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenKMSCelo(
    \Tatum\Model\TransferMultiTokenKMSCelo $transfer_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_kms_celo** | [**\Tatum\Model\TransferMultiTokenKMSCelo**](../Model/TransferMultiTokenKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer a Multi Token

TransferMultiTokenKMSCelo operation

### Example

[✨ View "transferMultiTokenKMSCelo.php"](../../examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
