---
title: Fungible Tokens (ERC-20 or compatible)
parent: API
layout: page
---

# Api/FungibleTokensERC20OrCompatibleApi

[Fungible Tokens (ERC-20 or compatible) API Reference](https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->fungibleTokensERC20OrCompatible();

// TestNet API Call
$sdk->testnet()->api()->fungibleTokensERC20OrCompatible();
```

## Methods

Method | Description
------------- | -------------
[**approveCeloErc20()**](#approveceloerc20) | Allow a blockchain address to transfer and burn fungible tokens
[**approveCeloErc20KMS()**](#approveceloerc20kms) | Allow a blockchain address to transfer and burn fungible tokens
[**approveErc20()**](#approveerc20) | Allow a blockchain address to transfer and burn fungible tokens
[**approveErc20KMS()**](#approveerc20kms) | Allow a blockchain address to transfer and burn fungible tokens
[**chainBurnCeloErc20()**](#chainburnceloerc20) | Burn fungible tokens
[**chainBurnCeloErc20KMS()**](#chainburnceloerc20kms) | Burn fungible tokens
[**chainBurnErc20()**](#chainburnerc20) | Burn fungible tokens
[**chainBurnErc20KMS()**](#chainburnerc20kms) | Burn fungible tokens
[**chainBurnKcsErc20()**](#chainburnkcserc20) | Burn fungible tokens
[**chainBurnKcsErc20KMS()**](#chainburnkcserc20kms) | Burn fungible tokens
[**chainDeployAlgoErc20()**](#chaindeployalgoerc20) | Deploy a fungible token smart contract
[**chainDeployAlgoErc20KMS()**](#chaindeployalgoerc20kms) | Deploy a fungible token smart contract
[**chainDeployCeloErc20()**](#chaindeployceloerc20) | Deploy a fungible token smart contract
[**chainDeployCeloErc20KMS()**](#chaindeployceloerc20kms) | Deploy a fungible token smart contract
[**chainDeployErc20()**](#chaindeployerc20) | Deploy a fungible token smart contract
[**chainDeployErc20KMS()**](#chaindeployerc20kms) | Deploy a fungible token smart contract
[**chainDeployKcsErc20()**](#chaindeploykcserc20) | Deploy a fungible token smart contract
[**chainDeployKcsErc20KMS()**](#chaindeploykcserc20kms) | Deploy a fungible token smart contract
[**chainDeploySolanaSpl()**](#chaindeploysolanaspl) | Deploy a fungible token smart contract
[**chainDeploySolanaSplKMS()**](#chaindeploysolanasplkms) | Deploy a fungible token smart contract
[**chainMintCeloErc20()**](#chainmintceloerc20) | Mint fungible tokens
[**chainMintCeloErc20KMS()**](#chainmintceloerc20kms) | Mint fungible tokens
[**chainMintErc20()**](#chainminterc20) | Mint fungible tokens
[**chainMintErc20KMS()**](#chainminterc20kms) | Mint fungible tokens
[**chainMintKcsErc20()**](#chainmintkcserc20) | Mint fungible tokens
[**chainMintKcsErc20KMS()**](#chainmintkcserc20kms) | Mint fungible tokens
[**chainTransferAlgoErc20()**](#chaintransferalgoerc20) | Transfer fungible tokens
[**chainTransferAlgoErc20KMS()**](#chaintransferalgoerc20kms) | Transfer fungible tokens
[**chainTransferBscBep20()**](#chaintransferbscbep20) | Transfer fungible tokens
[**chainTransferBscBep20KMS()**](#chaintransferbscbep20kms) | Transfer fungible tokens
[**chainTransferCeloErc20Token()**](#chaintransferceloerc20token) | Transfer fungible tokens
[**chainTransferCeloErc20TokenKMS()**](#chaintransferceloerc20tokenkms) | Transfer fungible tokens
[**chainTransferEthErc20()**](#chaintransferetherc20) | Transfer fungible tokens
[**chainTransferEthErc20KMS()**](#chaintransferetherc20kms) | Transfer fungible tokens
[**chainTransferKcsEthErc20()**](#chaintransferkcsetherc20) | Transfer fungible tokens
[**chainTransferKcsEthErc20KMS()**](#chaintransferkcsetherc20kms) | Transfer fungible tokens
[**chainTransferSolanaSpl()**](#chaintransfersolanaspl) | Transfer fungible tokens
[**chainTransferSolanaSplKMS()**](#chaintransfersolanasplkms) | Transfer fungible tokens
[**erc20GetBalance()**](#erc20getbalance) | Get the number of fungible tokens that a blockchain address holds in a smart contract
[**erc20GetBalanceAddress()**](#erc20getbalanceaddress) | Get the total number of fungible tokens that a blockchain address holds
[**erc20GetTransactionByAddress()**](#erc20gettransactionbyaddress) | Get fungible token transactions on a blockchain address


## `approveCeloErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveCeloErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/approveCeloErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->approveCeloErc20(
    \Tatum\Model\ApproveCeloErc20 $approve_celo_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_celo_erc20** | [**\Tatum\Model\ApproveCeloErc20**](../../Model/ApproveCeloErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow a blockchain address to transfer and burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `approveCeloErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveCeloErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/approveCeloErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->approveCeloErc20KMS(
    \Tatum\Model\ApproveCeloErc20KMS $approve_celo_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_celo_erc20_kms** | [**\Tatum\Model\ApproveCeloErc20KMS**](../../Model/ApproveCeloErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow a blockchain address to transfer and burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `approveErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/approveErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->approveErc20(
    \Tatum\Model\ApproveErc20 $approve_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_erc20** | [**\Tatum\Model\ApproveErc20**](../../Model/ApproveErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow a blockchain address to transfer and burn fungible tokens

**2 credits per API call**

Allow a blockchain address (the `spender` parameter in the request body) to transfer and burn fungible tokens on behalf of the smart contract owner.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**Signing a transaction** When allowing a blockchain address to transfer and burn fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `approveErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/approveErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->approveErc20KMS(
    \Tatum\Model\ApproveErc20KMS $approve_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_erc20_kms** | [**\Tatum\Model\ApproveErc20KMS**](../../Model/ApproveErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow a blockchain address to transfer and burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainBurnCeloErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainBurnCeloErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainBurnCeloErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainBurnCeloErc20(
    \Tatum\Model\ChainBurnCeloErc20 $chain_burn_celo_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_burn_celo_erc20** | [**\Tatum\Model\ChainBurnCeloErc20**](../../Model/ChainBurnCeloErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainBurnCeloErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainBurnCeloErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainBurnCeloErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainBurnCeloErc20KMS(
    \Tatum\Model\ChainBurnCeloErc20KMS $chain_burn_celo_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_burn_celo_erc20_kms** | [**\Tatum\Model\ChainBurnCeloErc20KMS**](../../Model/ChainBurnCeloErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainBurnErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainBurnErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainBurnErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainBurnErc20(
    \Tatum\Model\ChainBurnErc20 $chain_burn_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_burn_erc20** | [**\Tatum\Model\ChainBurnErc20**](../../Model/ChainBurnErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Burn fungible tokens

**2 credits per API call**

Burn fungible tokens. Burning fungible tokens deletes the specified supply of the tokens (the `amount` parameter in the request body) from the smart contract (the `contractAddress` parameter in the request body).

This API is supported for the following blockchains:

* Algorand
* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon
* XinFin

**Signing a transaction** When burning fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `chainBurnErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainBurnErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainBurnErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainBurnErc20KMS(
    \Tatum\Model\ChainBurnErc20KMS $chain_burn_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_burn_erc20_kms** | [**\Tatum\Model\ChainBurnErc20KMS**](../../Model/ChainBurnErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainBurnKcsErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainBurnKcsErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainBurnKcsErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainBurnKcsErc20(
    \Tatum\Model\ChainBurnKcsErc20 $chain_burn_kcs_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_burn_kcs_erc20** | [**\Tatum\Model\ChainBurnKcsErc20**](../../Model/ChainBurnKcsErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainBurnKcsErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainBurnKcsErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainBurnKcsErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainBurnKcsErc20KMS(
    \Tatum\Model\ChainBurnKcsErc20KMS $chain_burn_kcs_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_burn_kcs_erc20_kms** | [**\Tatum\Model\ChainBurnKcsErc20KMS**](../../Model/ChainBurnKcsErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Burn fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployAlgoErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployAlgoErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployAlgoErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployAlgoErc20(
    \Tatum\Model\ChainDeployAlgoErc20 $chain_deploy_algo_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_algo_erc20** | [**\Tatum\Model\ChainDeployAlgoErc20**](../../Model/ChainDeployAlgoErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployAlgoErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployAlgoErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployAlgoErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployAlgoErc20KMS(
    \Tatum\Model\ChainDeployAlgoErc20KMS $chain_deploy_algo_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_algo_erc20_kms** | [**\Tatum\Model\ChainDeployAlgoErc20KMS**](../../Model/ChainDeployAlgoErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployCeloErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployCeloErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployCeloErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployCeloErc20(
    \Tatum\Model\ChainDeployCeloErc20 $chain_deploy_celo_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_celo_erc20** | [**\Tatum\Model\ChainDeployCeloErc20**](../../Model/ChainDeployCeloErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployCeloErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployCeloErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployCeloErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployCeloErc20KMS(
    \Tatum\Model\ChainDeployCeloErc20KMS $chain_deploy_celo_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_celo_erc20_kms** | [**\Tatum\Model\ChainDeployCeloErc20KMS**](../../Model/ChainDeployCeloErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployErc20(
    \Tatum\Model\ChainDeployErc20 $chain_deploy_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_erc20** | [**\Tatum\Model\ChainDeployErc20**](../../Model/ChainDeployErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract

**2 credits per API call**

Deploy a fungible token smart contract on the blockchain. In a deployed smart contract, you can mint and burn fungible tokens. The whole supply of fungible tokens (the `supply` parameter in the request body) will be transferred to the specified blockchain address (the `address` parameter in the request body). Smart contracts are standardized and audited.

This API is supported for the following blockchains:

* Algorand
* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon
* Solana
* XinFin

You can review the code of a deployed smart contract [here](https://github.com/tatumio/tatum-middleware/blob/master/src/contracts/token.sol).

**Signing a transaction** When deploying a fungible token smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployErc20KMS(
    \Tatum\Model\ChainDeployErc20KMS $chain_deploy_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_erc20_kms** | [**\Tatum\Model\ChainDeployErc20KMS**](../../Model/ChainDeployErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployKcsErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployKcsErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployKcsErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployKcsErc20(
    \Tatum\Model\ChainDeployKcsErc20 $chain_deploy_kcs_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_kcs_erc20** | [**\Tatum\Model\ChainDeployKcsErc20**](../../Model/ChainDeployKcsErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeployKcsErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeployKcsErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeployKcsErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeployKcsErc20KMS(
    \Tatum\Model\ChainDeployKcsErc20KMS $chain_deploy_kcs_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_kcs_erc20_kms** | [**\Tatum\Model\ChainDeployKcsErc20KMS**](../../Model/ChainDeployKcsErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeploySolanaSpl()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeploySolanaSpl.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeploySolanaSpl.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeploySolanaSpl(
    \Tatum\Model\ChainDeploySolanaSpl $chain_deploy_solana_spl,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_solana_spl** | [**\Tatum\Model\ChainDeploySolanaSpl**](../../Model/ChainDeploySolanaSpl) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainDeploySolanaSplKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainDeploySolanaSplKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainDeploySolanaSplKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainDeploySolanaSplKMS(
    \Tatum\Model\ChainDeploySolanaSplKMS $chain_deploy_solana_spl_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_deploy_solana_spl_kms** | [**\Tatum\Model\ChainDeploySolanaSplKMS**](../../Model/ChainDeploySolanaSplKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Deploy a fungible token smart contract



[Back to top](#top){: .btn .btn-purple }

---


## `chainMintCeloErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainMintCeloErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainMintCeloErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainMintCeloErc20(
    \Tatum\Model\ChainMintCeloErc20 $chain_mint_celo_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_mint_celo_erc20** | [**\Tatum\Model\ChainMintCeloErc20**](../../Model/ChainMintCeloErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Mint fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainMintCeloErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainMintCeloErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainMintCeloErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainMintCeloErc20KMS(
    \Tatum\Model\ChainMintCeloErc20KMS $chain_mint_celo_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_mint_celo_erc20_kms** | [**\Tatum\Model\ChainMintCeloErc20KMS**](../../Model/ChainMintCeloErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Mint fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainMintErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainMintErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainMintErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainMintErc20(
    \Tatum\Model\ChainMintErc20 $chain_mint_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_mint_erc20** | [**\Tatum\Model\ChainMintErc20**](../../Model/ChainMintErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Mint fungible tokens

**2 credits per API call**

Create new fungible tokens in the smart contract (the `contractAddress` parameter in the request body) and transfer them to the specified blockchain address (the `to` parameter in the request body). You can mint new fungible tokens only if the current supply of tokens in the smart contract is lower than the total supply set for this contract.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon
* XinFin

**Signing a transaction** When minting fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `chainMintErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainMintErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainMintErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainMintErc20KMS(
    \Tatum\Model\ChainMintErc20KMS $chain_mint_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_mint_erc20_kms** | [**\Tatum\Model\ChainMintErc20KMS**](../../Model/ChainMintErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Mint fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainMintKcsErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainMintKcsErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainMintKcsErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainMintKcsErc20(
    \Tatum\Model\ChainMintKcsErc20 $chain_mint_kcs_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_mint_kcs_erc20** | [**\Tatum\Model\ChainMintKcsErc20**](../../Model/ChainMintKcsErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Mint fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainMintKcsErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainMintKcsErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainMintKcsErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainMintKcsErc20KMS(
    \Tatum\Model\ChainMintKcsErc20KMS $chain_mint_kcs_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_mint_kcs_erc20_kms** | [**\Tatum\Model\ChainMintKcsErc20KMS**](../../Model/ChainMintKcsErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Mint fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferAlgoErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferAlgoErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferAlgoErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferAlgoErc20(
    \Tatum\Model\ChainTransferAlgoErc20 $chain_transfer_algo_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_algo_erc20** | [**\Tatum\Model\ChainTransferAlgoErc20**](../../Model/ChainTransferAlgoErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferAlgoErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferAlgoErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferAlgoErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferAlgoErc20KMS(
    \Tatum\Model\ChainTransferAlgoErc20KMS $chain_transfer_algo_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_algo_erc20_kms** | [**\Tatum\Model\ChainTransferAlgoErc20KMS**](../../Model/ChainTransferAlgoErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferBscBep20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferBscBep20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferBscBep20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferBscBep20(
    \Tatum\Model\ChainTransferBscBep20 $chain_transfer_bsc_bep20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_bsc_bep20** | [**\Tatum\Model\ChainTransferBscBep20**](../../Model/ChainTransferBscBep20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferBscBep20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferBscBep20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferBscBep20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferBscBep20KMS(
    \Tatum\Model\ChainTransferBscBep20KMS $chain_transfer_bsc_bep20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_bsc_bep20_kms** | [**\Tatum\Model\ChainTransferBscBep20KMS**](../../Model/ChainTransferBscBep20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferCeloErc20Token()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferCeloErc20Token.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferCeloErc20Token.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferCeloErc20Token(
    \Tatum\Model\ChainTransferCeloErc20Token $chain_transfer_celo_erc20_token,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_celo_erc20_token** | [**\Tatum\Model\ChainTransferCeloErc20Token**](../../Model/ChainTransferCeloErc20Token) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferCeloErc20TokenKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferCeloErc20TokenKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferCeloErc20TokenKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferCeloErc20TokenKMS(
    \Tatum\Model\ChainTransferCeloErc20TokenKMS $chain_transfer_celo_erc20_token_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_celo_erc20_token_kms** | [**\Tatum\Model\ChainTransferCeloErc20TokenKMS**](../../Model/ChainTransferCeloErc20TokenKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferEthErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferEthErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferEthErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferEthErc20(
    \Tatum\Model\ChainTransferEthErc20 $chain_transfer_eth_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_eth_erc20** | [**\Tatum\Model\ChainTransferEthErc20**](../../Model/ChainTransferEthErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens

**2 credits per API call**

Transfer a supply of fungible tokens existing in the smart contract (the `contractAddress` parameter in the request body) to the specified blockchain address (the `to` parameter in the request body). Transferring fungible tokens invokes the `transfer()` method.

This API is supported for the following blockchains:

* Algorand
* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon
* Solana
* XinFin

**Transferring fungible tokens on Algorand** On Algorand, the recipient has to agree in advance to receive your fungible tokens because Algorand charges users for storing the tokens on their addresses, and an Algorand blockchain address by default does not receive the tokens unless explicitly agreed. Before transferring the fungible tokens, make sure that the recipient [has agreed to receive the NFT](https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset) to their address.

**Blockchain-specific APIs to transfer fungible tokens** You can also use blockchain-specific APIs for transferring fungible tokens on the following blockchains: 
* [BNB Smart Chain](https://apidoc.tatum.io/tag/BNB-Smart-Chain#operation/BscBlockchainTransfer)
* [Celo](https://apidoc.tatum.io/tag/Celo#operation/CeloBlockchainTransfer)
* [Ethereum](https://apidoc.tatum.io/tag/Ethereum#operation/EthBlockchainTransfer)
* [Harmony](https://apidoc.tatum.io/tag/Harmony#operation/OneBlockchainTransfer)
* [KuCoin Community Chain](https://apidoc.tatum.io/tag/KuCoin#operation/KcsBlockchainTransfer)
* [Polygon](https://apidoc.tatum.io/tag/Polygon#operation/PolygonBlockchainTransfer)
* [XinFin](https://apidoc.tatum.io/tag/XinFin#operation/XdcBlockchainTransfer)

**Signing a transaction** When transferring fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferEthErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferEthErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferEthErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferEthErc20KMS(
    \Tatum\Model\ChainTransferEthErc20KMS $chain_transfer_eth_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_eth_erc20_kms** | [**\Tatum\Model\ChainTransferEthErc20KMS**](../../Model/ChainTransferEthErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferKcsEthErc20()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferKcsEthErc20.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferKcsEthErc20.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferKcsEthErc20(
    \Tatum\Model\ChainTransferKcsEthErc20 $chain_transfer_kcs_eth_erc20,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_kcs_eth_erc20** | [**\Tatum\Model\ChainTransferKcsEthErc20**](../../Model/ChainTransferKcsEthErc20) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferKcsEthErc20KMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferKcsEthErc20KMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferKcsEthErc20KMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferKcsEthErc20KMS(
    \Tatum\Model\ChainTransferKcsEthErc20KMS $chain_transfer_kcs_eth_erc20_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_kcs_eth_erc20_kms** | [**\Tatum\Model\ChainTransferKcsEthErc20KMS**](../../Model/ChainTransferKcsEthErc20KMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferSolanaSpl()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferSolanaSpl.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferSolanaSpl.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferSolanaSpl(
    \Tatum\Model\ChainTransferSolanaSpl $chain_transfer_solana_spl,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_solana_spl** | [**\Tatum\Model\ChainTransferSolanaSpl**](../../Model/ChainTransferSolanaSpl) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `chainTransferSolanaSplKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **chainTransferSolanaSplKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/chainTransferSolanaSplKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/token/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->chainTransferSolanaSplKMS(
    \Tatum\Model\ChainTransferSolanaSplKMS $chain_transfer_solana_spl_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain_transfer_solana_spl_kms** | [**\Tatum\Model\ChainTransferSolanaSplKMS**](../../Model/ChainTransferSolanaSplKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Transfer fungible tokens



[Back to top](#top){: .btn .btn-purple }

---


## `erc20GetBalance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **erc20GetBalance.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/erc20GetBalance.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/blockchain/token/balance/{chain}/{contractAddress}/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20GetBalance(
    string $chain,
    string $address,
    string $contract_address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Erc20Balance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Network name |
 **$address** | **string**  | The blockchain address that you want to get the token balance of |
 **$contract_address** | **string**  | The address of the fungible token smart contract |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Erc20Balance**](../../Model/Erc20Balance)

### Description

> Get the number of fungible tokens that a blockchain address holds in a smart contract

**1 credit per API call**

Get the number of the fungible tokens minted on a specific smart contract (the `contractAddress` path parameter in the request endpoint URL) that a blockchain address holds.

This API is supported for the following blockchains:

* Algorand
* BNB Smart Chain
* Celo
* Elrond
* Ethereum
* Harmony
* Klaytn
* KuCoin Community Chain
* Polygon
* Solana
* XinFin

[Back to top](#top){: .btn .btn-purple }

---


## `erc20GetBalanceAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **erc20GetBalanceAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/erc20GetBalanceAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/blockchain/token/address/{chain}/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20GetBalanceAddress(
    string $chain,
    string $address
): \Tatum\Model\Erc20BalanceForAddress[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Network name |
 **$address** | **string**  | The blockchain address that you want to get the token balance of |

### Return type

[**\Tatum\Model\Erc20BalanceForAddress[]**](../../Model/Erc20BalanceForAddress)

### Description

> Get the total number of fungible tokens that a blockchain address holds

**1 credit per API call**

Get the number of all fungible tokens that a blockchain address holds across a blockchain. The tokens are returned grouped by the smart contracts they were minted on.

This API is supported for the following blockchains:

* Algorand
* Celo
* Ethereum
* Polygon
* Solana

[Back to top](#top){: .btn .btn-purple }

---


## `erc20GetTransactionByAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **erc20GetTransactionByAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FungibleTokensERC20OrCompatibleApi/erc20GetTransactionByAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/blockchain/token/transaction/{chain}/{address}/{tokenAddress}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20GetTransactionByAddress(
    string $chain,
    string $address,
    string $token_address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to, ]
    [ string $sort = 'DESC' ]
): \Tatum\Model\FungibleTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$address** | **string**  | Account address you want to get balance of |
 **$token_address** | **string**  | Address of the token smart contract |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$from** | **float**  | Transactions from this block onwards will be included. | [optional]
 **$to** | **float**  | Transactions up to this block will be included. | [optional]
 **$sort** | **string**  | Sorting of the data. ASC - oldest first, DESC - newest first. | [optional] [default to &#39;DESC&#39;]

### Return type

[**\Tatum\Model\FungibleTx[]**](../../Model/FungibleTx)

### Description

> Get fungible token transactions on a blockchain address

**1 credit per API call**

Get incoming and outgoing transactions related to fungible tokens on a blockchain address.

This API is supported for the following blockchains:

* Algorand
* Celo
* Ethereum
* Polygon

[Back to top](#top){: .btn .btn-purple }

---
