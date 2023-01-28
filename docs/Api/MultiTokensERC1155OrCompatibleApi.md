---
title: Multi Tokens (ERC-1155 or compatible)
parent: API
layout: page
---

# Api/MultiTokensERC1155OrCompatibleApi

[Multi Tokens (ERC-1155 or compatible) API Reference](https://apidoc.tatum.io/tag/Multi-Tokens-(ERC-1155-or-compatible)/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->multiTokensERC1155OrCompatible();

// TestNet API Call
$sdk->testnet()->api()->multiTokensERC1155OrCompatible();
```

## Methods

Method | Description
------------- | -------------
[**addMultiTokenMinter()**](#addmultitokenminter) | Add a Multi Token minter
[**addMultiTokenMinterKMS()**](#addmultitokenminterkms) | Add a Multi Token minter
[**burnMultiToken()**](#burnmultitoken) | Burn a Multi Token
[**burnMultiTokenBatch()**](#burnmultitokenbatch) | Burn multiple Multi Tokens
[**burnMultiTokenBatchCelo()**](#burnmultitokenbatchcelo) | Burn multiple Multi Tokens
[**burnMultiTokenBatchKMS()**](#burnmultitokenbatchkms) | Burn multiple Multi Tokens
[**burnMultiTokenBatchKMSCelo()**](#burnmultitokenbatchkmscelo) | Burn multiple Multi Tokens
[**burnMultiTokenCelo()**](#burnmultitokencelo) | Burn a Multi Token
[**burnMultiTokenKMS()**](#burnmultitokenkms) | Burn a Multi Token
[**burnMultiTokenKMSCelo()**](#burnmultitokenkmscelo) | Burn a Multi Token
[**deployMultiToken()**](#deploymultitoken) | Deploy a Multi Token smart contract
[**deployMultiTokenCelo()**](#deploymultitokencelo) | Deploy a Multi Token smart contract
[**deployMultiTokenCeloKMS()**](#deploymultitokencelokms) | Deploy a Multi Token smart contract
[**deployMultiTokenKMS()**](#deploymultitokenkms) | Deploy a Multi Token smart contract
[**mintMultiToken()**](#mintmultitoken) | Mint a Multi Token
[**mintMultiTokenBatch()**](#mintmultitokenbatch) | Mint multiple Multi Tokens
[**mintMultiTokenBatchCelo()**](#mintmultitokenbatchcelo) | Mint multiple Multi Tokens
[**mintMultiTokenBatchKMS()**](#mintmultitokenbatchkms) | Mint multiple Multi Tokens
[**mintMultiTokenBatchKMSCelo()**](#mintmultitokenbatchkmscelo) | Mint multiple Multi Tokens
[**mintMultiTokenCelo()**](#mintmultitokencelo) | Mint a Multi Token
[**mintMultiTokenKMS()**](#mintmultitokenkms) | Mint a Multi Token
[**mintMultiTokenKMSCelo()**](#mintmultitokenkmscelo) | Mint a Multi Token
[**multiTokenGetAddressBalance()**](#multitokengetaddressbalance) | Get all Multi Tokens that a blockchain address holds
[**multiTokenGetBalance()**](#multitokengetbalance) | Get the amount of a specific MultiToken that a blockchain address holds
[**multiTokenGetBalanceBatch()**](#multitokengetbalancebatch) | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
[**multiTokenGetMetadata()**](#multitokengetmetadata) | Get Multi Token metadata
[**multiTokenGetTransaction()**](#multitokengettransaction) | Get a Multi Token transaction by its hash
[**multiTokenGetTransactionByAddress()**](#multitokengettransactionbyaddress) | Get Multi Token transactions on a blockchain address
[**transferMultiToken()**](#transfermultitoken) | Transfer a Multi Token
[**transferMultiTokenBatch()**](#transfermultitokenbatch) | Transfer multiple Multi Tokens
[**transferMultiTokenBatchCelo()**](#transfermultitokenbatchcelo) | Transfer multiple Multi Tokens
[**transferMultiTokenBatchKMS()**](#transfermultitokenbatchkms) | Transfer multiple Multi Tokens
[**transferMultiTokenBatchKMSCelo()**](#transfermultitokenbatchkmscelo) | Transfer multiple Multi Tokens
[**transferMultiTokenCelo()**](#transfermultitokencelo) | Transfer a Multi Token
[**transferMultiTokenKMS()**](#transfermultitokenkms) | Transfer a Multi Token
[**transferMultiTokenKMSCelo()**](#transfermultitokenkmscelo) | Transfer a Multi Token


## `addMultiTokenMinter()`

### Example

[👉 View "**addMultiTokenMinter.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/addMultiTokenMinter.php)

### Request

> **POST** `/v3/multitoken/mint/add`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->addMultiTokenMinter(
    \Tatum\Model\AddMultiTokenMinter $add_multi_token_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_multi_token_minter** | [**\Tatum\Model\AddMultiTokenMinter**](../../Model/AddMultiTokenMinter) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Add a Multi Token minter

**2 credits per API call**

 Add Multi Token minter.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When adding a Multi Token minter, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `addMultiTokenMinterKMS()`

### Example

[👉 View "**addMultiTokenMinterKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/addMultiTokenMinterKMS.php)

### Request

> **POST** `/v3/multitoken/mint/add`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->addMultiTokenMinterKMS(
    \Tatum\Model\AddMultiTokenMinterKMS $add_multi_token_minter_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_multi_token_minter_kms** | [**\Tatum\Model\AddMultiTokenMinterKMS**](../../Model/AddMultiTokenMinterKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Add a Multi Token minter

AddMultiTokenMinterKMS operation

[Back to top](#top)



## `burnMultiToken()`

### Example

[👉 View "**burnMultiToken.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiToken.php)

### Request

> **POST** `/v3/multitoken/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiToken(
    \Tatum\Model\BurnMultiToken $burn_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token** | [**\Tatum\Model\BurnMultiToken**](../../Model/BurnMultiToken) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn a Multi Token

**2 credits per API call**

 Burn a fixed amount of Multi Tokens by id. This method destroys Multi Tokens from smart contract defined in contractAddress.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When burning a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `burnMultiTokenBatch()`

### Example

[👉 View "**burnMultiTokenBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatch.php)

### Request

> **POST** `/v3/multitoken/burn/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatch(
    \Tatum\Model\BurnMultiTokenBatch $burn_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch** | [**\Tatum\Model\BurnMultiTokenBatch**](../../Model/BurnMultiTokenBatch) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn multiple Multi Tokens

**2 credits per API call**

 Burn multiple Multi Token Tokens by id assigned to same address in one transaction. This method destroys any Multi Tokens token from smart contract defined in contractAddress.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When burning multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `burnMultiTokenBatchCelo()`

### Example

[👉 View "**burnMultiTokenBatchCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchCelo.php)

### Request

> **POST** `/v3/multitoken/burn/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchCelo(
    \Tatum\Model\BurnMultiTokenBatchCelo $burn_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_celo** | [**\Tatum\Model\BurnMultiTokenBatchCelo**](../../Model/BurnMultiTokenBatchCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchCelo operation

[Back to top](#top)



## `burnMultiTokenBatchKMS()`

### Example

[👉 View "**burnMultiTokenBatchKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchKMS.php)

### Request

> **POST** `/v3/multitoken/burn/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchKMS(
    \Tatum\Model\BurnMultiTokenBatchKMS $burn_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_kms** | [**\Tatum\Model\BurnMultiTokenBatchKMS**](../../Model/BurnMultiTokenBatchKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchKMS operation

[Back to top](#top)



## `burnMultiTokenBatchKMSCelo()`

### Example

[👉 View "**burnMultiTokenBatchKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchKMSCelo.php)

### Request

> **POST** `/v3/multitoken/burn/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatchKMSCelo(
    \Tatum\Model\BurnMultiTokenBatchKMSCelo $burn_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_kms_celo** | [**\Tatum\Model\BurnMultiTokenBatchKMSCelo**](../../Model/BurnMultiTokenBatchKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn multiple Multi Tokens

BurnMultiTokenBatchKMSCelo operation

[Back to top](#top)



## `burnMultiTokenCelo()`

### Example

[👉 View "**burnMultiTokenCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenCelo.php)

### Request

> **POST** `/v3/multitoken/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenCelo(
    \Tatum\Model\BurnMultiTokenCelo $burn_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_celo** | [**\Tatum\Model\BurnMultiTokenCelo**](../../Model/BurnMultiTokenCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn a Multi Token

BurnMultiTokenCelo operation

[Back to top](#top)



## `burnMultiTokenKMS()`

### Example

[👉 View "**burnMultiTokenKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenKMS.php)

### Request

> **POST** `/v3/multitoken/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenKMS(
    \Tatum\Model\BurnMultiTokenKMS $burn_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_kms** | [**\Tatum\Model\BurnMultiTokenKMS**](../../Model/BurnMultiTokenKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn a Multi Token

BurnMultiTokenKMS operation

[Back to top](#top)



## `burnMultiTokenKMSCelo()`

### Example

[👉 View "**burnMultiTokenKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenKMSCelo.php)

### Request

> **POST** `/v3/multitoken/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenKMSCelo(
    \Tatum\Model\BurnMultiTokenKMSCelo $burn_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_kms_celo** | [**\Tatum\Model\BurnMultiTokenKMSCelo**](../../Model/BurnMultiTokenKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn a Multi Token

BurnMultiTokenKMSCelo operation

[Back to top](#top)



## `deployMultiToken()`

### Example

[👉 View "**deployMultiToken.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiToken.php)

### Request

> **POST** `/v3/multitoken/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiToken(
    \Tatum\Model\DeployMultiToken $deploy_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token** | [**\Tatum\Model\DeployMultiToken**](../../Model/DeployMultiToken) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy a Multi Token smart contract

**2 credits per API call**

 Deploy Multi Token Smart Contract. This method creates new ERC1155 Smart Contract (Multi Tokens) on the blockchain. Smart contract is standardized and audited. It is possible to mint, burn and transfer tokens. It is also possible to mint multiple tokens at once.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When deploying a Multi Token smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `deployMultiTokenCelo()`

### Example

[👉 View "**deployMultiTokenCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenCelo.php)

### Request

> **POST** `/v3/multitoken/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiTokenCelo(
    \Tatum\Model\DeployMultiTokenCelo $deploy_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_celo** | [**\Tatum\Model\DeployMultiTokenCelo**](../../Model/DeployMultiTokenCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenCelo operation

[Back to top](#top)



## `deployMultiTokenCeloKMS()`

### Example

[👉 View "**deployMultiTokenCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenCeloKMS.php)

### Request

> **POST** `/v3/multitoken/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiTokenCeloKMS(
    \Tatum\Model\DeployMultiTokenCeloKMS $deploy_multi_token_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_celo_kms** | [**\Tatum\Model\DeployMultiTokenCeloKMS**](../../Model/DeployMultiTokenCeloKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenCeloKMS operation

[Back to top](#top)



## `deployMultiTokenKMS()`

### Example

[👉 View "**deployMultiTokenKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenKMS.php)

### Request

> **POST** `/v3/multitoken/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiTokenKMS(
    \Tatum\Model\DeployMultiTokenKMS $deploy_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_kms** | [**\Tatum\Model\DeployMultiTokenKMS**](../../Model/DeployMultiTokenKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy a Multi Token smart contract

DeployMultiTokenKMS operation

[Back to top](#top)



## `mintMultiToken()`

### Example

[👉 View "**mintMultiToken.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiToken.php)

### Request

> **POST** `/v3/multitoken/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiToken(
    \Tatum\Model\MintMultiToken $mint_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token** | [**\Tatum\Model\MintMultiToken**](../../Model/MintMultiToken) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint a Multi Token

**2 credits per API call**

 Mint a fixed amount of Multi Token and transfer it to destination account. Create and transfer any Multi Token token from smart contract defined in contractAddress. It is possible to add Metadata to the created token with a more detailed information about instead.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When minting a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `mintMultiTokenBatch()`

### Example

[👉 View "**mintMultiTokenBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatch.php)

### Request

> **POST** `/v3/multitoken/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatch(
    \Tatum\Model\MintMultiTokenBatch $mint_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch** | [**\Tatum\Model\MintMultiTokenBatch**](../../Model/MintMultiTokenBatch) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint multiple Multi Tokens

**2 credits per API call**

 Create a fixed amount of multiple Multi Tokens Tokens and transfer them to destination account in one transaction. Create and transfer Multi Tokens tokens from smart contract defined in contractAddress.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When minting multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `mintMultiTokenBatchCelo()`

### Example

[👉 View "**mintMultiTokenBatchCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchCelo.php)

### Request

> **POST** `/v3/multitoken/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatchCelo(
    \Tatum\Model\MintMultiTokenBatchCelo $mint_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_celo** | [**\Tatum\Model\MintMultiTokenBatchCelo**](../../Model/MintMultiTokenBatchCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchCelo operation

[Back to top](#top)



## `mintMultiTokenBatchKMS()`

### Example

[👉 View "**mintMultiTokenBatchKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchKMS.php)

### Request

> **POST** `/v3/multitoken/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatchKMS(
    \Tatum\Model\MintMultiTokenBatchKMS $mint_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_kms** | [**\Tatum\Model\MintMultiTokenBatchKMS**](../../Model/MintMultiTokenBatchKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchKMS operation

[Back to top](#top)



## `mintMultiTokenBatchKMSCelo()`

### Example

[👉 View "**mintMultiTokenBatchKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchKMSCelo.php)

### Request

> **POST** `/v3/multitoken/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatchKMSCelo(
    \Tatum\Model\MintMultiTokenBatchKMSCelo $mint_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_kms_celo** | [**\Tatum\Model\MintMultiTokenBatchKMSCelo**](../../Model/MintMultiTokenBatchKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint multiple Multi Tokens

MintMultiTokenBatchKMSCelo operation

[Back to top](#top)



## `mintMultiTokenCelo()`

### Example

[👉 View "**mintMultiTokenCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenCelo.php)

### Request

> **POST** `/v3/multitoken/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenCelo(
    \Tatum\Model\MintMultiTokenCelo $mint_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_celo** | [**\Tatum\Model\MintMultiTokenCelo**](../../Model/MintMultiTokenCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint a Multi Token

MintMultiTokenCelo operation

[Back to top](#top)



## `mintMultiTokenKMS()`

### Example

[👉 View "**mintMultiTokenKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenKMS.php)

### Request

> **POST** `/v3/multitoken/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenKMS(
    \Tatum\Model\MintMultiTokenKMS $mint_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_kms** | [**\Tatum\Model\MintMultiTokenKMS**](../../Model/MintMultiTokenKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint a Multi Token

MintMultiTokenKMS operation

[Back to top](#top)



## `mintMultiTokenKMSCelo()`

### Example

[👉 View "**mintMultiTokenKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenKMSCelo.php)

### Request

> **POST** `/v3/multitoken/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenKMSCelo(
    \Tatum\Model\MintMultiTokenKMSCelo $mint_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_kms_celo** | [**\Tatum\Model\MintMultiTokenKMSCelo**](../../Model/MintMultiTokenKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Mint a Multi Token

MintMultiTokenKMSCelo operation

[Back to top](#top)



## `multiTokenGetAddressBalance()`

### Example

[👉 View "**multiTokenGetAddressBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetAddressBalance.php)

### Request

> **GET** `/v3/multitoken/address/balance/{chain}/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetAddressBalance(
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

[**\Tatum\Model\MultiTokenGetAddressBalance200ResponseInner[]**](../../Model/MultiTokenGetAddressBalance200ResponseInner)

### Description

Get all Multi Tokens that a blockchain address holds

**1 credit per API call**

 Get all Multi Tokens that a blockchain address holds. The Multi Tokens are returned grouped by the smart contracts they were minted on.

 This API is supported for the following blockchains:

 

<ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `multiTokenGetBalance()`

### Example

[👉 View "**multiTokenGetBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetBalance.php)

### Request

> **GET** `/v3/multitoken/balance/{chain}/{contractAddress}/{address}/{tokenId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetBalance(
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

[**\Tatum\Model\MultiTokenGetBalance200Response**](../../Model/MultiTokenGetBalance200Response)

### Description

Get the amount of a specific MultiToken that a blockchain address holds

**1 credit per API call**

 Get the amount of a specific Multi Token (minted on the smart contract specified by the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `multiTokenGetBalanceBatch()`

### Example

[👉 View "**multiTokenGetBalanceBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetBalanceBatch.php)

### Request

> **GET** `/v3/multitoken/balance/batch/{chain}/{contractAddress}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetBalanceBatch(
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

**1 credit per API call**

 For multiple blockchain addresses, get the amount of one or multiple Multi Tokens (minted on the smart contract specified by the <code>contractAddress</code> path parameter in the request endpoint URL) that those addresses hold.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `multiTokenGetMetadata()`

### Example

[👉 View "**multiTokenGetMetadata.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetMetadata.php)

### Request

> **GET** `/v3/multitoken/metadata/{chain}/{contractAddress}/{token}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetMetadata(
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

[**\Tatum\Model\MultiTokenGetMetadata200Response**](../../Model/MultiTokenGetMetadata200Response)

### Description

Get Multi Token metadata

**1 credit per API call**

 Get Multi Token metadata.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `multiTokenGetTransaction()`

### Example

[👉 View "**multiTokenGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetTransaction.php)

### Request

> **GET** `/v3/multitoken/transaction/{chain}/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetTransaction(
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

[**\Tatum\Model\MultiTokenGetTransaction200Response**](../../Model/MultiTokenGetTransaction200Response)

### Description

Get a Multi Token transaction by its hash

**1 credit per API call**

 Get Multi Token transaction by transaction hash.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `multiTokenGetTransactionByAddress()`

### Example

[👉 View "**multiTokenGetTransactionByAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetTransactionByAddress.php)

### Request

> **GET** `/v3/multitoken/transaction/{chain}/{address}/{tokenAddress}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetTransactionByAddress(
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

[**\Tatum\Model\MultiTokenGetTransactionByAddress200ResponseInner[]**](../../Model/MultiTokenGetTransactionByAddress200ResponseInner)

### Description

Get Multi Token transactions on a blockchain address

**1 credit per API call**

 Get incoming and outgoing Multi Token transactions on a blockchain address.

 This API is supported for the following blockchains:

 

<ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `transferMultiToken()`

### Example

[👉 View "**transferMultiToken.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiToken.php)

### Request

> **POST** `/v3/multitoken/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiToken(
    \Tatum\Model\TransferMultiToken $transfer_multi_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token** | [**\Tatum\Model\TransferMultiToken**](../../Model/TransferMultiToken) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer a Multi Token

**2 credits per API call**

 Transfer a certain amount of Multi Token from account to another account. Transfer Multi Tokens token from smart contract defined in contractAddress.

 Only 1 specific token with specified tokenId and value can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and blockchains.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When transferring a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `transferMultiTokenBatch()`

### Example

[👉 View "**transferMultiTokenBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatch.php)

### Request

> **POST** `/v3/multitoken/transaction/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatch(
    \Tatum\Model\TransferMultiTokenBatch $transfer_multi_token_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch** | [**\Tatum\Model\TransferMultiTokenBatch**](../../Model/TransferMultiTokenBatch) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple Multi Tokens

**2 credits per API call**

 Transfer Multi Token Batch from account to various other accounts in one transaction. Transfer multiple Multi Tokens token from smart contract defined in contractAddress.

 Multiple token with specified tokenIds and values can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and BSC.** This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When transferring multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `transferMultiTokenBatchCelo()`

### Example

[👉 View "**transferMultiTokenBatchCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchCelo.php)

### Request

> **POST** `/v3/multitoken/transaction/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatchCelo(
    \Tatum\Model\TransferMultiTokenBatchCelo $transfer_multi_token_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_celo** | [**\Tatum\Model\TransferMultiTokenBatchCelo**](../../Model/TransferMultiTokenBatchCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchCelo operation

[Back to top](#top)



## `transferMultiTokenBatchKMS()`

### Example

[👉 View "**transferMultiTokenBatchKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchKMS.php)

### Request

> **POST** `/v3/multitoken/transaction/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatchKMS(
    \Tatum\Model\TransferMultiTokenBatchKMS $transfer_multi_token_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_kms** | [**\Tatum\Model\TransferMultiTokenBatchKMS**](../../Model/TransferMultiTokenBatchKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchKMS operation

[Back to top](#top)



## `transferMultiTokenBatchKMSCelo()`

### Example

[👉 View "**transferMultiTokenBatchKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchKMSCelo.php)

### Request

> **POST** `/v3/multitoken/transaction/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatchKMSCelo(
    \Tatum\Model\TransferMultiTokenBatchKMSCelo $transfer_multi_token_batch_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_kms_celo** | [**\Tatum\Model\TransferMultiTokenBatchKMSCelo**](../../Model/TransferMultiTokenBatchKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple Multi Tokens

TransferMultiTokenBatchKMSCelo operation

[Back to top](#top)



## `transferMultiTokenCelo()`

### Example

[👉 View "**transferMultiTokenCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenCelo.php)

### Request

> **POST** `/v3/multitoken/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenCelo(
    \Tatum\Model\TransferMultiTokenCelo $transfer_multi_token_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_celo** | [**\Tatum\Model\TransferMultiTokenCelo**](../../Model/TransferMultiTokenCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer a Multi Token

TransferMultiTokenCelo operation

[Back to top](#top)



## `transferMultiTokenKMS()`

### Example

[👉 View "**transferMultiTokenKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenKMS.php)

### Request

> **POST** `/v3/multitoken/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenKMS(
    \Tatum\Model\TransferMultiTokenKMS $transfer_multi_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_kms** | [**\Tatum\Model\TransferMultiTokenKMS**](../../Model/TransferMultiTokenKMS) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer a Multi Token

TransferMultiTokenKMS operation

[Back to top](#top)



## `transferMultiTokenKMSCelo()`

### Example

[👉 View "**transferMultiTokenKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenKMSCelo.php)

### Request

> **POST** `/v3/multitoken/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenKMSCelo(
    \Tatum\Model\TransferMultiTokenKMSCelo $transfer_multi_token_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_kms_celo** | [**\Tatum\Model\TransferMultiTokenKMSCelo**](../../Model/TransferMultiTokenKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer a Multi Token

TransferMultiTokenKMSCelo operation

[Back to top](#top)

