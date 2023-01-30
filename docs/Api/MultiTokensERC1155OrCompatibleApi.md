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

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **addMultiTokenMinter.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/addMultiTokenMinter.php){: .btn .btn-green .mt-4}

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

> Add a Multi Token minter

**2 credits per API call**

Add Multi Token minter.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When adding a Multi Token minter, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `addMultiTokenMinterKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **addMultiTokenMinterKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/addMultiTokenMinterKMS.php){: .btn .btn-green .mt-4}

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

> Add a Multi Token minter



[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiToken()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiToken.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiToken.php){: .btn .btn-green .mt-4}

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

> Burn a Multi Token

**2 credits per API call**

Burn a fixed amount of Multi Tokens by id. This method destroys Multi Tokens from smart contract defined in contractAddress.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When burning a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiTokenBatch()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiTokenBatch.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatch.php){: .btn .btn-green .mt-4}

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

> Burn multiple Multi Tokens

**2 credits per API call**

Burn multiple Multi Token Tokens by id assigned to same address in one transaction. This method destroys any Multi Tokens token from smart contract defined in contractAddress.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When burning multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiTokenBatchCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiTokenBatchCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchCelo.php){: .btn .btn-green .mt-4}

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

> Burn multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiTokenBatchKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiTokenBatchKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchKMS.php){: .btn .btn-green .mt-4}

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

> Burn multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiTokenBatchKMSCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiTokenBatchKMSCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenBatchKMSCelo.php){: .btn .btn-green .mt-4}

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

> Burn multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiTokenCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiTokenCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenCelo.php){: .btn .btn-green .mt-4}

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

> Burn a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiTokenKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiTokenKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenKMS.php){: .btn .btn-green .mt-4}

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

> Burn a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `burnMultiTokenKMSCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **burnMultiTokenKMSCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/burnMultiTokenKMSCelo.php){: .btn .btn-green .mt-4}

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

> Burn a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `deployMultiToken()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **deployMultiToken.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiToken.php){: .btn .btn-green .mt-4}

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

> Deploy a Multi Token smart contract

**2 credits per API call**

Deploy Multi Token Smart Contract. This method creates new ERC1155 Smart Contract (Multi Tokens) on the blockchain. Smart contract is standardized and audited. It is possible to mint, burn and transfer tokens. It is also possible to mint multiple tokens at once.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When deploying a Multi Token smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `deployMultiTokenCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **deployMultiTokenCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenCelo.php){: .btn .btn-green .mt-4}

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

> Deploy a Multi Token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `deployMultiTokenCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **deployMultiTokenCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenCeloKMS.php){: .btn .btn-green .mt-4}

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

> Deploy a Multi Token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `deployMultiTokenKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **deployMultiTokenKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/deployMultiTokenKMS.php){: .btn .btn-green .mt-4}

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

> Deploy a Multi Token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiToken()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiToken.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiToken.php){: .btn .btn-green .mt-4}

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

> Mint a Multi Token

**2 credits per API call**

Mint a fixed amount of Multi Token and transfer it to destination account. Create and transfer any Multi Token token from smart contract defined in contractAddress. It is possible to add Metadata to the created token with a more detailed information about instead.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When minting a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiTokenBatch()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiTokenBatch.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatch.php){: .btn .btn-green .mt-4}

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

> Mint multiple Multi Tokens

**2 credits per API call**

Create a fixed amount of multiple Multi Tokens Tokens and transfer them to destination account in one transaction. Create and transfer Multi Tokens tokens from smart contract defined in contractAddress.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When minting multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiTokenBatchCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiTokenBatchCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchCelo.php){: .btn .btn-green .mt-4}

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

> Mint multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiTokenBatchKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiTokenBatchKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchKMS.php){: .btn .btn-green .mt-4}

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

> Mint multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiTokenBatchKMSCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiTokenBatchKMSCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenBatchKMSCelo.php){: .btn .btn-green .mt-4}

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

> Mint multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiTokenCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiTokenCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenCelo.php){: .btn .btn-green .mt-4}

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

> Mint a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiTokenKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiTokenKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenKMS.php){: .btn .btn-green .mt-4}

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

> Mint a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `mintMultiTokenKMSCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintMultiTokenKMSCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/mintMultiTokenKMSCelo.php){: .btn .btn-green .mt-4}

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

> Mint a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `multiTokenGetAddressBalance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **multiTokenGetAddressBalance.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetAddressBalance.php){: .btn .btn-green .mt-4}

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

> Get all Multi Tokens that a blockchain address holds

**1 credit per API call**

Get all Multi Tokens that a blockchain address holds. The Multi Tokens are returned grouped by the smart contracts they were minted on.

This API is supported for the following blockchains:

* Celo
* Ethereum
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `multiTokenGetBalance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **multiTokenGetBalance.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetBalance.php){: .btn .btn-green .mt-4}

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

> Get the amount of a specific MultiToken that a blockchain address holds

**1 credit per API call**

Get the amount of a specific Multi Token (minted on the smart contract specified by the `contractAddress` path parameter in the request endpoint URL) that a blockchain address holds.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `multiTokenGetBalanceBatch()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **multiTokenGetBalanceBatch.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetBalanceBatch.php){: .btn .btn-green .mt-4}

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

> Get the amount of one or multiple Multi Tokens for multiple blockchain addresses

**1 credit per API call**

For multiple blockchain addresses, get the amount of one or multiple Multi Tokens (minted on the smart contract specified by the `contractAddress` path parameter in the request endpoint URL) that those addresses hold.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `multiTokenGetMetadata()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **multiTokenGetMetadata.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetMetadata.php){: .btn .btn-green .mt-4}

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

> Get Multi Token metadata

**1 credit per API call**

Get Multi Token metadata.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `multiTokenGetTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **multiTokenGetTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetTransaction.php){: .btn .btn-green .mt-4}

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

> Get a Multi Token transaction by its hash

**1 credit per API call**

Get Multi Token transaction by transaction hash.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `multiTokenGetTransactionByAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **multiTokenGetTransactionByAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/multiTokenGetTransactionByAddress.php){: .btn .btn-green .mt-4}

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

> Get Multi Token transactions on a blockchain address

**1 credit per API call**

Get incoming and outgoing Multi Token transactions on a blockchain address.

This API is supported for the following blockchains:

* Celo
* Ethereum
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiToken()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiToken.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiToken.php){: .btn .btn-green .mt-4}

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

> Transfer a Multi Token

**2 credits per API call**

Transfer a certain amount of Multi Token from account to another account. Transfer Multi Tokens token from smart contract defined in contractAddress.

Only 1 specific token with specified tokenId and value can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and blockchains.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When transferring a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiTokenBatch()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiTokenBatch.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatch.php){: .btn .btn-green .mt-4}

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

> Transfer multiple Multi Tokens

**2 credits per API call**

Transfer Multi Token Batch from account to various other accounts in one transaction. Transfer multiple Multi Tokens token from smart contract defined in contractAddress.

Multiple token with specified tokenIds and values can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and BSC. 

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon

**Signing a transaction**

When transferring multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiTokenBatchCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiTokenBatchCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchCelo.php){: .btn .btn-green .mt-4}

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

> Transfer multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiTokenBatchKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiTokenBatchKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchKMS.php){: .btn .btn-green .mt-4}

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

> Transfer multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiTokenBatchKMSCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiTokenBatchKMSCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenBatchKMSCelo.php){: .btn .btn-green .mt-4}

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

> Transfer multiple Multi Tokens



[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiTokenCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiTokenCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenCelo.php){: .btn .btn-green .mt-4}

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

> Transfer a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiTokenKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiTokenKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenKMS.php){: .btn .btn-green .mt-4}

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

> Transfer a Multi Token



[Back to top](#top){: .btn .btn-purple }

---


## `transferMultiTokenKMSCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferMultiTokenKMSCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MultiTokensERC1155OrCompatibleApi/transferMultiTokenKMSCelo.php){: .btn .btn-green .mt-4}

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

> Transfer a Multi Token



[Back to top](#top){: .btn .btn-purple }

---
