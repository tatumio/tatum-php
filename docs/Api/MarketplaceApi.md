---
title: Marketplace
parent: API
layout: page
---

# Api/MarketplaceApi

[Marketplace API Reference](https://apidoc.tatum.io/tag/Marketplace/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->marketplace();

// TestNet API Call
$sdk->testnet()->api()->marketplace();
```

## Methods

Method | Description
------------- | -------------
[**bloMarWithdrawFromMarketplaceSolana()**](#blomarwithdrawfrommarketplacesolana) | Withdraw funds from the marketplace treasury account on Solana
[**bloMarWithdrawFromMarketplaceSolanaKMS()**](#blomarwithdrawfrommarketplacesolanakms) | Withdraw funds from the marketplace treasury account on Solana
[**buyAssetOnMarketplace()**](#buyassetonmarketplace) | Buy an asset on the NFT marketplace
[**buyAssetOnMarketplaceCelo()**](#buyassetonmarketplacecelo) | Buy an asset on the NFT marketplace
[**buyAssetOnMarketplaceCeloKMS()**](#buyassetonmarketplacecelokms) | Buy an asset on the NFT marketplace
[**buyAssetOnMarketplaceKMS()**](#buyassetonmarketplacekms) | Buy an asset on the NFT marketplace
[**buyAssetOnMarketplaceSolana()**](#buyassetonmarketplacesolana) | Buy an asset on the NFT marketplace
[**buyAssetOnMarketplaceSolanaKMS()**](#buyassetonmarketplacesolanakms) | Buy an asset on the NFT marketplace
[**cancelSellAssetOnMarketplace()**](#cancelsellassetonmarketplace) | Cancel the selling of an asset on the NFT marketplace
[**cancelSellAssetOnMarketplaceCelo()**](#cancelsellassetonmarketplacecelo) | Cancel the selling of an asset on the NFT marketplace
[**cancelSellAssetOnMarketplaceCeloKMS()**](#cancelsellassetonmarketplacecelokms) | Cancel the selling of an asset on the NFT marketplace
[**cancelSellAssetOnMarketplaceKMS()**](#cancelsellassetonmarketplacekms) | Cancel the selling of an asset on the NFT marketplace
[**cancelSellAssetOnMarketplaceSolana()**](#cancelsellassetonmarketplacesolana) | Cancel the selling of an asset on the NFT marketplace
[**cancelSellAssetOnMarketplaceSolanaKMS()**](#cancelsellassetonmarketplacesolanakms) | Cancel the selling of an asset on the NFT marketplace
[**generateMarketplace()**](#generatemarketplace) | Create an NFT marketplace
[**generateMarketplaceCelo()**](#generatemarketplacecelo) | Create an NFT marketplace
[**generateMarketplaceCeloKMS()**](#generatemarketplacecelokms) | Create an NFT marketplace
[**generateMarketplaceKMS()**](#generatemarketplacekms) | Create an NFT marketplace
[**generateMarketplaceSolana()**](#generatemarketplacesolana) | Create an NFT marketplace
[**generateMarketplaceSolanaKMS()**](#generatemarketplacesolanakms) | Create an NFT marketplace
[**getMarketplaceFee()**](#getmarketplacefee) | Get the NFT marketplace fee
[**getMarketplaceFeeRecipient()**](#getmarketplacefeerecipient) | Get the recipient of the NFT marketplace fee
[**getMarketplaceInfo()**](#getmarketplaceinfo) | Get information about an NFT marketplace on Solana
[**getMarketplaceListing()**](#getmarketplacelisting) | Get information about a listing on the NFT marketplace
[**getMarketplaceListings()**](#getmarketplacelistings) | Get the listings of a certain type from the NFT marketplace
[**sellAssetOnMarketplace()**](#sellassetonmarketplace) | Sell an asset on the NFT marketplace
[**sellAssetOnMarketplaceCelo()**](#sellassetonmarketplacecelo) | Sell an asset on the NFT marketplace
[**sellAssetOnMarketplaceCeloKMS()**](#sellassetonmarketplacecelokms) | Sell an asset on the NFT marketplace
[**sellAssetOnMarketplaceKMS()**](#sellassetonmarketplacekms) | Sell an asset on the NFT marketplace
[**sellAssetOnMarketplaceSolana()**](#sellassetonmarketplacesolana) | Sell an asset on the NFT marketplace
[**sellAssetOnMarketplaceSolanaKMS()**](#sellassetonmarketplacesolanakms) | Sell an asset on the NFT marketplace
[**updateFee()**](#updatefee) | Update the NFT marketplace fee
[**updateFeeCelo()**](#updatefeecelo) | Update the NFT marketplace fee
[**updateFeeCeloKMS()**](#updatefeecelokms) | Update the NFT marketplace fee
[**updateFeeKMS()**](#updatefeekms) | Update the NFT marketplace fee
[**updateFeeRecipient()**](#updatefeerecipient) | Update the recipient of the NFT marketplace fee
[**updateFeeRecipientCelo()**](#updatefeerecipientcelo) | Update the recipient of the NFT marketplace fee
[**updateFeeRecipientCeloKMS()**](#updatefeerecipientcelokms) | Update the recipient of the NFT marketplace fee
[**updateFeeRecipientKMS()**](#updatefeerecipientkms) | Update the recipient of the NFT marketplace fee
[**updateFeeRecipientSolana()**](#updatefeerecipientsolana) | Update the recipient of the NFT marketplace fee
[**updateFeeRecipientSolanaKMS()**](#updatefeerecipientsolanakms) | Update the recipient of the NFT marketplace fee
[**updateFeeSolana()**](#updatefeesolana) | Update the NFT marketplace fee
[**updateFeeSolanaKMS()**](#updatefeesolanakms) | Update the NFT marketplace fee
[**updateMarketplaceSolana()**](#updatemarketplacesolana) | Update an NFT marketplace on Solana
[**updateMarketplaceSolanaKMS()**](#updatemarketplacesolanakms) | Update an NFT marketplace on Solana
[**withdrawFromMarketplaceSolana()**](#withdrawfrommarketplacesolana) | Withdraw funds from the marketplace fee account on Solana
[**withdrawFromMarketplaceSolanaKMS()**](#withdrawfrommarketplacesolanakms) | Withdraw funds from the marketplace fee account on Solana


## `bloMarWithdrawFromMarketplaceSolana()`

### Example

[👉 View "**bloMarWithdrawFromMarketplaceSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/bloMarWithdrawFromMarketplaceSolana.php)

### Request

> **POST** `/v3/blockchain/marketplace/withdraw/treasury`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->bloMarWithdrawFromMarketplaceSolana(
    \Tatum\Model\WithdrawFromMarketplaceSolana $withdraw_from_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana** | [**\Tatum\Model\WithdrawFromMarketplaceSolana**](../../Model/WithdrawFromMarketplaceSolana) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Withdraw funds from the marketplace treasury account on Solana

**2 credits per API call**

 Withdraw funds from the NFT marketplace treasury account on Solana.

 You can withdraw the funds only if you are the marketplace fee recipient.

 This API is in **alpha** and is supported only for the mainnet on Solana.

 **Signing a transaction**

 When withdrawing the funds, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `bloMarWithdrawFromMarketplaceSolanaKMS()`

### Example

[👉 View "**bloMarWithdrawFromMarketplaceSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/bloMarWithdrawFromMarketplaceSolanaKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/withdraw/treasury`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->bloMarWithdrawFromMarketplaceSolanaKMS(
    \Tatum\Model\WithdrawFromMarketplaceSolanaKMS $withdraw_from_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana_kms** | [**\Tatum\Model\WithdrawFromMarketplaceSolanaKMS**](../../Model/WithdrawFromMarketplaceSolanaKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Withdraw funds from the marketplace treasury account on Solana

WithdrawFromMarketplaceSolanaKMS operation

[Back to top](#top)



## `buyAssetOnMarketplace()`

### Example

[👉 View "**buyAssetOnMarketplace.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplace.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplace(
    \Tatum\Model\BuyAssetOnMarketplace $buy_asset_on_marketplace
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace** | [**\Tatum\Model\BuyAssetOnMarketplace**](../../Model/BuyAssetOnMarketplace) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Buy an asset on the NFT marketplace

**2 credits per API call**

 Buy an asset listed on the NFT marketplace.

 You can buy the asset either for the native blockchain currency (for example, ETH, MATIC, and so on) or for the fungible tokens of the blockchain.

 

<ul> <li>If you want to pay for the asset with the **native blockchain currency**, send the required amount plus the marketplace fee right in the API call (in the <code>amount</code> request body parameter).</li> <li>If you want to pay with the **fungible tokens**, <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the marketplace smart contract to access your tokens</a> before making the purchase. When you make the API call, the marketplace smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.</li> </ul>

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **The "execution reverted" message**

 When making this API call, you may get the following message:

 <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code>

 This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When buying an asset on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `buyAssetOnMarketplaceCelo()`

### Example

[👉 View "**buyAssetOnMarketplaceCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceCelo.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceCelo(
    \Tatum\Model\BuyAssetOnMarketplaceCelo $buy_asset_on_marketplace_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_celo** | [**\Tatum\Model\BuyAssetOnMarketplaceCelo**](../../Model/BuyAssetOnMarketplaceCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceCelo operation

[Back to top](#top)



## `buyAssetOnMarketplaceCeloKMS()`

### Example

[👉 View "**buyAssetOnMarketplaceCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceCeloKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceCeloKMS(
    \Tatum\Model\BuyAssetOnMarketplaceCeloKMS $buy_asset_on_marketplace_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_celo_kms** | [**\Tatum\Model\BuyAssetOnMarketplaceCeloKMS**](../../Model/BuyAssetOnMarketplaceCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceCeloKMS operation

[Back to top](#top)



## `buyAssetOnMarketplaceKMS()`

### Example

[👉 View "**buyAssetOnMarketplaceKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceKMS(
    \Tatum\Model\BuyAssetOnMarketplaceKMS $buy_asset_on_marketplace_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_kms** | [**\Tatum\Model\BuyAssetOnMarketplaceKMS**](../../Model/BuyAssetOnMarketplaceKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceKMS operation

[Back to top](#top)



## `buyAssetOnMarketplaceSolana()`

### Example

[👉 View "**buyAssetOnMarketplaceSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceSolana.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceSolana(
    \Tatum\Model\BuyAssetOnMarketplaceSolana $buy_asset_on_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_solana** | [**\Tatum\Model\BuyAssetOnMarketplaceSolana**](../../Model/BuyAssetOnMarketplaceSolana) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceSolana operation

[Back to top](#top)



## `buyAssetOnMarketplaceSolanaKMS()`

### Example

[👉 View "**buyAssetOnMarketplaceSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceSolanaKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceSolanaKMS(
    \Tatum\Model\BuyAssetOnMarketplaceSolanaKMS $buy_asset_on_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_solana_kms** | [**\Tatum\Model\BuyAssetOnMarketplaceSolanaKMS**](../../Model/BuyAssetOnMarketplaceSolanaKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceSolanaKMS operation

[Back to top](#top)



## `cancelSellAssetOnMarketplace()`

### Example

[👉 View "**cancelSellAssetOnMarketplace.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplace.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplace(
    \Tatum\Model\CancelSellAssetOnMarketplace $cancel_sell_asset_on_marketplace
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace** | [**\Tatum\Model\CancelSellAssetOnMarketplace**](../../Model/CancelSellAssetOnMarketplace) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Cancel the selling of an asset on the NFT marketplace

**2 credits per API call**

 Cancel the selling of an asset on the NFT marketplace.

 You can cancel the selling only if you are the seller of the asset or the marketplace operator. Once the selling is canceled, the asset is returned to the seller.

 You cannot cancel the selling if the asset has already been purchased.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **The "execution reverted" message**

 When making this API call, you may get the following message:

 <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code>

 This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When cancelling the selling of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `cancelSellAssetOnMarketplaceCelo()`

### Example

[👉 View "**cancelSellAssetOnMarketplaceCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceCelo.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceCelo(
    \Tatum\Model\CancelSellAssetOnMarketplaceCelo $cancel_sell_asset_on_marketplace_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_celo** | [**\Tatum\Model\CancelSellAssetOnMarketplaceCelo**](../../Model/CancelSellAssetOnMarketplaceCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceCelo operation

[Back to top](#top)



## `cancelSellAssetOnMarketplaceCeloKMS()`

### Example

[👉 View "**cancelSellAssetOnMarketplaceCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceCeloKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceCeloKMS(
    \Tatum\Model\CancelSellAssetOnMarketplaceCeloKMS $cancel_sell_asset_on_marketplace_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_celo_kms** | [**\Tatum\Model\CancelSellAssetOnMarketplaceCeloKMS**](../../Model/CancelSellAssetOnMarketplaceCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceCeloKMS operation

[Back to top](#top)



## `cancelSellAssetOnMarketplaceKMS()`

### Example

[👉 View "**cancelSellAssetOnMarketplaceKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceKMS(
    \Tatum\Model\CancelSellAssetOnMarketplaceKMS $cancel_sell_asset_on_marketplace_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_kms** | [**\Tatum\Model\CancelSellAssetOnMarketplaceKMS**](../../Model/CancelSellAssetOnMarketplaceKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceKMS operation

[Back to top](#top)



## `cancelSellAssetOnMarketplaceSolana()`

### Example

[👉 View "**cancelSellAssetOnMarketplaceSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceSolana.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceSolana(
    \Tatum\Model\CancelSellAssetOnMarketplaceSolana $cancel_sell_asset_on_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_solana** | [**\Tatum\Model\CancelSellAssetOnMarketplaceSolana**](../../Model/CancelSellAssetOnMarketplaceSolana) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceSolana operation

[Back to top](#top)



## `cancelSellAssetOnMarketplaceSolanaKMS()`

### Example

[👉 View "**cancelSellAssetOnMarketplaceSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceSolanaKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceSolanaKMS(
    \Tatum\Model\CancelSellAssetOnMarketplaceSolanaKMS $cancel_sell_asset_on_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_solana_kms** | [**\Tatum\Model\CancelSellAssetOnMarketplaceSolanaKMS**](../../Model/CancelSellAssetOnMarketplaceSolanaKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceSolanaKMS operation

[Back to top](#top)



## `generateMarketplace()`

### Example

[👉 View "**generateMarketplace.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplace.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->generateMarketplace(
    \Tatum\Model\GenerateMarketplace $generate_marketplace
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace** | [**\Tatum\Model\GenerateMarketplace**](../../Model/GenerateMarketplace) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../../Model/GenerateMarketplace200Response)

### Description

Create an NFT marketplace

**2 credits per API call**

 Deploy an NFT marketplace smart contract on the blockchain. With a deployed marketplace smart contract, you and your customers can create new listings for assets such as non-fungible tokens and combinations of token types as described by the ERC-721 and ERC-1155 standards on the Ethereum blockchain or by the equivalent standards on the other blockchains. As the marketplace operator, you can set a fee as a percentage of the asset price that will be paid on top of the asset price.

 The purchase process looks like the following:

 

<ol> <li>The seller <a href="https://apidoc.tatum.io/tag/Marketplace/#operation/sellassetonmarketplace">creates a listing for an asset on the NFT marketplace</a>. The listing can be offered for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.</li> <li>The seller <a href="https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending" target="_blank">allows the marketplace smart contract to transfer the asset that they are selling</a>.</li> <li>A buyer buys the asset. 

<ul><li>If the buyer wants to pay with the **native blockchain assets**, they <a href="https://apidoc.tatum.io/tag/Marketplace/#operation/buyassetonmarketplace">make the purchase</a> (the <code>buyAssetFromListing()</code> method is called against the marketplace smart contract) and send the required amount of the native assets to the marketplace smart contract.</li> <li>If the buyer wants to pay with the **fungible tokens**: 

<ol><li>The buyer <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allows the marketplace smart contract to access their tokens</a> and makes the purchase (the <code>buyAssetFromListing()</code> method is called against the marketplace smart contract).</li> <li>The marketplace smart contract deducts the required amount of tokens from the smart contract where the buyer holds the tokens.</li></ol>

</li></ul>

</li> <li>The marketplace smart contract transfers the asset to the buyer, transfers the asset price to the seller, and sends the fee to the marketplace fee recipient.</li> </ol>

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **Signing a transaction**

 When deploying an NFT marketplace smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `generateMarketplaceCelo()`

### Example

[👉 View "**generateMarketplaceCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceCelo.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceCelo(
    \Tatum\Model\GenerateMarketplaceCelo $generate_marketplace_celo
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_celo** | [**\Tatum\Model\GenerateMarketplaceCelo**](../../Model/GenerateMarketplaceCelo) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../../Model/GenerateMarketplace200Response)

### Description

Create an NFT marketplace

GenerateMarketplaceCelo operation

[Back to top](#top)



## `generateMarketplaceCeloKMS()`

### Example

[👉 View "**generateMarketplaceCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceCeloKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceCeloKMS(
    \Tatum\Model\GenerateMarketplaceCeloKMS $generate_marketplace_celo_kms
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_celo_kms** | [**\Tatum\Model\GenerateMarketplaceCeloKMS**](../../Model/GenerateMarketplaceCeloKMS) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../../Model/GenerateMarketplace200Response)

### Description

Create an NFT marketplace

GenerateMarketplaceCeloKMS operation

[Back to top](#top)



## `generateMarketplaceKMS()`

### Example

[👉 View "**generateMarketplaceKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceKMS(
    \Tatum\Model\GenerateMarketplaceKMS $generate_marketplace_kms
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_kms** | [**\Tatum\Model\GenerateMarketplaceKMS**](../../Model/GenerateMarketplaceKMS) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../../Model/GenerateMarketplace200Response)

### Description

Create an NFT marketplace

GenerateMarketplaceKMS operation

[Back to top](#top)



## `generateMarketplaceSolana()`

### Example

[👉 View "**generateMarketplaceSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceSolana.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceSolana(
    \Tatum\Model\GenerateMarketplaceSolana $generate_marketplace_solana
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_solana** | [**\Tatum\Model\GenerateMarketplaceSolana**](../../Model/GenerateMarketplaceSolana) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../../Model/GenerateMarketplace200Response)

### Description

Create an NFT marketplace

GenerateMarketplaceSolana operation

[Back to top](#top)



## `generateMarketplaceSolanaKMS()`

### Example

[👉 View "**generateMarketplaceSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceSolanaKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceSolanaKMS(
    \Tatum\Model\GenerateMarketplaceSolanaKMS $generate_marketplace_solana_kms
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_solana_kms** | [**\Tatum\Model\GenerateMarketplaceSolanaKMS**](../../Model/GenerateMarketplaceSolanaKMS) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../../Model/GenerateMarketplace200Response)

### Description

Create an NFT marketplace

GenerateMarketplaceSolanaKMS operation

[Back to top](#top)



## `getMarketplaceFee()`

### Example

[👉 View "**getMarketplaceFee.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceFee.php)

### Request

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->getMarketplaceFee(
    string $chain,
    string $contract_address
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | Contract address |

### Return type

**float**

### Description

Get the NFT marketplace fee

**1 credit per API call**

 Get the NFT marketplace fee.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

[Back to top](#top)



## `getMarketplaceFeeRecipient()`

### Example

[👉 View "**getMarketplaceFeeRecipient.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceFeeRecipient.php)

### Request

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->getMarketplaceFeeRecipient(
    string $chain,
    string $contract_address
): \Tatum\Model\GetMarketplaceFeeRecipient200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | Contract address |

### Return type

[**\Tatum\Model\GetMarketplaceFeeRecipient200Response**](../../Model/GetMarketplaceFeeRecipient200Response)

### Description

Get the recipient of the NFT marketplace fee

**1 credit per API call**

 Get the recipient of the NFT marketplace fee.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

[Back to top](#top)



## `getMarketplaceInfo()`

### Example

[👉 View "**getMarketplaceInfo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceInfo.php)

### Request

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->getMarketplaceInfo(
    string $chain,
    string $contract_address
): \Tatum\Model\GetMarketplaceInfo200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | Contract address |

### Return type

[**\Tatum\Model\GetMarketplaceInfo200Response**](../../Model/GetMarketplaceInfo200Response)

### Description

Get information about an NFT marketplace on Solana

**1 credit per API call**

 Get information about an NFT marketplace on Solana.

 This API is in **alpha** and is supported only for the mainnet on Solana.

[Back to top](#top)



## `getMarketplaceListing()`

### Example

[👉 View "**getMarketplaceListing.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceListing.php)

### Request

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/listing/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->getMarketplaceListing(
    string $chain,
    string $contract_address,
    string $id
): \Tatum\Model\GetMarketplaceListing200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | Contract address |
 **$id** | **string**  | Listing ID |

### Return type

[**\Tatum\Model\GetMarketplaceListing200Response**](../../Model/GetMarketplaceListing200Response)

### Description

Get information about a listing on the NFT marketplace

**1 credit per API call**

 Get information about a specific listing on the NFT marketplace.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

[Back to top](#top)



## `getMarketplaceListings()`

### Example

[👉 View "**getMarketplaceListings.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceListings.php)

### Request

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/{type}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->getMarketplaceListings(
    string $chain,
    string $contract_address,
    string $type
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | Contract address |
 **$type** | **string**  | The type of listings to return |

### Return type

**string[]**

### Description

Get the listings of a certain type from the NFT marketplace

**1 credit per API call**

 Get the open, sold, or cancelled listings from the NFT marketplace.

 This API is supported for the following blockchains:

 

<ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

[Back to top](#top)



## `sellAssetOnMarketplace()`

### Example

[👉 View "**sellAssetOnMarketplace.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplace.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplace(
    \Tatum\Model\SellAssetOnMarketplace $sell_asset_on_marketplace
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace** | [**\Tatum\Model\SellAssetOnMarketplace**](../../Model/SellAssetOnMarketplace) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../../Model/SellAssetOnMarketplace200Response)

### Description

Sell an asset on the NFT marketplace

**2 credits per API call**

 Create a new listing for an asset on the NFT marketplace. The listing can be offered for the native blockchain assets (for example, ETH, MATIC, and so on) or for any fungible tokens.

 After the listing is created, <a href="https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending" target="_blank">allow the marketplace smart contract to transfer the asset that you are selling</a>.

 You can create a listing only for an existing asset that you own (you must be the owner of the asset).

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **A known issue on Harmony**

 On Harmony, when you are viewing a transaction in the Harmony Blockchain Explorer, the transaction status may be displayed as the following:

 <code>Error reverted:x0</code>

 This is a known issue with the Harmony Blockchain Explorer. This status does not mean that the transaction failed. You can safely ignore it.

 **The "execution reverted" message**

 When making this API call, you may get the following message:

 <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code>

 This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When creating a new listing on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `sellAssetOnMarketplaceCelo()`

### Example

[👉 View "**sellAssetOnMarketplaceCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceCelo.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceCelo(
    \Tatum\Model\SellAssetOnMarketplaceCelo $sell_asset_on_marketplace_celo
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_celo** | [**\Tatum\Model\SellAssetOnMarketplaceCelo**](../../Model/SellAssetOnMarketplaceCelo) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../../Model/SellAssetOnMarketplace200Response)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceCelo operation

[Back to top](#top)



## `sellAssetOnMarketplaceCeloKMS()`

### Example

[👉 View "**sellAssetOnMarketplaceCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceCeloKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceCeloKMS(
    \Tatum\Model\SellAssetOnMarketplaceCeloKMS $sell_asset_on_marketplace_celo_kms
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_celo_kms** | [**\Tatum\Model\SellAssetOnMarketplaceCeloKMS**](../../Model/SellAssetOnMarketplaceCeloKMS) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../../Model/SellAssetOnMarketplace200Response)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceCeloKMS operation

[Back to top](#top)



## `sellAssetOnMarketplaceKMS()`

### Example

[👉 View "**sellAssetOnMarketplaceKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceKMS(
    \Tatum\Model\SellAssetOnMarketplaceKMS $sell_asset_on_marketplace_kms
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_kms** | [**\Tatum\Model\SellAssetOnMarketplaceKMS**](../../Model/SellAssetOnMarketplaceKMS) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../../Model/SellAssetOnMarketplace200Response)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceKMS operation

[Back to top](#top)



## `sellAssetOnMarketplaceSolana()`

### Example

[👉 View "**sellAssetOnMarketplaceSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceSolana.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceSolana(
    \Tatum\Model\SellAssetOnMarketplaceSolana $sell_asset_on_marketplace_solana
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_solana** | [**\Tatum\Model\SellAssetOnMarketplaceSolana**](../../Model/SellAssetOnMarketplaceSolana) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../../Model/SellAssetOnMarketplace200Response)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceSolana operation

[Back to top](#top)



## `sellAssetOnMarketplaceSolanaKMS()`

### Example

[👉 View "**sellAssetOnMarketplaceSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceSolanaKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceSolanaKMS(
    \Tatum\Model\SellAssetOnMarketplaceSolanaKMS $sell_asset_on_marketplace_solana_kms
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_solana_kms** | [**\Tatum\Model\SellAssetOnMarketplaceSolanaKMS**](../../Model/SellAssetOnMarketplaceSolanaKMS) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../../Model/SellAssetOnMarketplace200Response)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceSolanaKMS operation

[Back to top](#top)



## `updateFee()`

### Example

[👉 View "**updateFee.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFee.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFee(
    \Tatum\Model\UpdateFee $update_fee
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee** | [**\Tatum\Model\UpdateFee**](../../Model/UpdateFee) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the NFT marketplace fee

**2 credits per API call**

 Update the NFT marketplace fee.

 You can update the marketplace fee only if you are the marketplace operator.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **Signing a transaction**

 When updating the NFT marketplace fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `updateFeeCelo()`

### Example

[👉 View "**updateFeeCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeCelo.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeCelo(
    \Tatum\Model\UpdateFeeCelo $update_fee_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_celo** | [**\Tatum\Model\UpdateFeeCelo**](../../Model/UpdateFeeCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the NFT marketplace fee

UpdateFeeCelo operation

[Back to top](#top)



## `updateFeeCeloKMS()`

### Example

[👉 View "**updateFeeCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeCeloKMS.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeCeloKMS(
    \Tatum\Model\UpdateFeeCeloKMS $update_fee_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_celo_kms** | [**\Tatum\Model\UpdateFeeCeloKMS**](../../Model/UpdateFeeCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the NFT marketplace fee

UpdateFeeCeloKMS operation

[Back to top](#top)



## `updateFeeKMS()`

### Example

[👉 View "**updateFeeKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeKMS.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeKMS(
    \Tatum\Model\UpdateFeeKMS $update_fee_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_kms** | [**\Tatum\Model\UpdateFeeKMS**](../../Model/UpdateFeeKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the NFT marketplace fee

UpdateFeeKMS operation

[Back to top](#top)



## `updateFeeRecipient()`

### Example

[👉 View "**updateFeeRecipient.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipient.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipient(
    \Tatum\Model\UpdateFeeRecipient $update_fee_recipient
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient** | [**\Tatum\Model\UpdateFeeRecipient**](../../Model/UpdateFeeRecipient) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the recipient of the NFT marketplace fee

**2 credits per API call**

 Update the recipient of the NFT marketplace fee.

 You can update the fee recipient only if you are the marketplace operator.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **Signing a transaction**

 When updating the recipient of the NFT marketplace fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `updateFeeRecipientCelo()`

### Example

[👉 View "**updateFeeRecipientCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientCelo.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientCelo(
    \Tatum\Model\UpdateFeeRecipientCelo $update_fee_recipient_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_celo** | [**\Tatum\Model\UpdateFeeRecipientCelo**](../../Model/UpdateFeeRecipientCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientCelo operation

[Back to top](#top)



## `updateFeeRecipientCeloKMS()`

### Example

[👉 View "**updateFeeRecipientCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientCeloKMS.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientCeloKMS(
    \Tatum\Model\UpdateFeeRecipientCeloKMS $update_fee_recipient_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_celo_kms** | [**\Tatum\Model\UpdateFeeRecipientCeloKMS**](../../Model/UpdateFeeRecipientCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientCeloKMS operation

[Back to top](#top)



## `updateFeeRecipientKMS()`

### Example

[👉 View "**updateFeeRecipientKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientKMS.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientKMS(
    \Tatum\Model\UpdateFeeRecipientKMS $update_fee_recipient_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_kms** | [**\Tatum\Model\UpdateFeeRecipientKMS**](../../Model/UpdateFeeRecipientKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientKMS operation

[Back to top](#top)



## `updateFeeRecipientSolana()`

### Example

[👉 View "**updateFeeRecipientSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientSolana.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientSolana(
    \Tatum\Model\UpdateFeeRecipientSolana $update_fee_recipient_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_solana** | [**\Tatum\Model\UpdateFeeRecipientSolana**](../../Model/UpdateFeeRecipientSolana) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientSolana operation

[Back to top](#top)



## `updateFeeRecipientSolanaKMS()`

### Example

[👉 View "**updateFeeRecipientSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientSolanaKMS.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientSolanaKMS(
    \Tatum\Model\UpdateFeeRecipientSolanaKMS $update_fee_recipient_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_solana_kms** | [**\Tatum\Model\UpdateFeeRecipientSolanaKMS**](../../Model/UpdateFeeRecipientSolanaKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientSolanaKMS operation

[Back to top](#top)



## `updateFeeSolana()`

### Example

[👉 View "**updateFeeSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeSolana.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeSolana(
    \Tatum\Model\UpdateFeeSolana $update_fee_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_solana** | [**\Tatum\Model\UpdateFeeSolana**](../../Model/UpdateFeeSolana) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the NFT marketplace fee

UpdateFeeSolana operation

[Back to top](#top)



## `updateFeeSolanaKMS()`

### Example

[👉 View "**updateFeeSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeSolanaKMS.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateFeeSolanaKMS(
    \Tatum\Model\UpdateFeeSolanaKMS $update_fee_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_solana_kms** | [**\Tatum\Model\UpdateFeeSolanaKMS**](../../Model/UpdateFeeSolanaKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update the NFT marketplace fee

UpdateFeeSolanaKMS operation

[Back to top](#top)



## `updateMarketplaceSolana()`

### Example

[👉 View "**updateMarketplaceSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateMarketplaceSolana.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateMarketplaceSolana(
    \Tatum\Model\UpdateMarketplaceSolana $update_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_marketplace_solana** | [**\Tatum\Model\UpdateMarketplaceSolana**](../../Model/UpdateMarketplaceSolana) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update an NFT marketplace on Solana

**2 credits per API call**

 Update an NFT marketplace on Solana.

 You can update it only if you are the marketplace operator.

 This API is in **alpha** and is supported only for the mainnet on Solana.

 **Signing a transaction**

 When updating an NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `updateMarketplaceSolanaKMS()`

### Example

[👉 View "**updateMarketplaceSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateMarketplaceSolanaKMS.php)

### Request

> **PUT** `/v3/blockchain/marketplace/listing`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->updateMarketplaceSolanaKMS(
    \Tatum\Model\UpdateMarketplaceSolanaKMS $update_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_marketplace_solana_kms** | [**\Tatum\Model\UpdateMarketplaceSolanaKMS**](../../Model/UpdateMarketplaceSolanaKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update an NFT marketplace on Solana

UpdateMarketplaceSolanaKMS operation

[Back to top](#top)



## `withdrawFromMarketplaceSolana()`

### Example

[👉 View "**withdrawFromMarketplaceSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/withdrawFromMarketplaceSolana.php)

### Request

> **POST** `/v3/blockchain/marketplace/withdraw/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->withdrawFromMarketplaceSolana(
    \Tatum\Model\WithdrawFromMarketplaceSolana $withdraw_from_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana** | [**\Tatum\Model\WithdrawFromMarketplaceSolana**](../../Model/WithdrawFromMarketplaceSolana) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Withdraw funds from the marketplace fee account on Solana

**2 credits per API call**

 Withdraw funds from the NFT marketplace fee account on Solana.

 You can withdraw the funds only if you are the marketplace fee recipient.

 This API is in **alpha** and is supported only for the mainnet on Solana.

 **Signing a transaction**

 When withdrawing the funds, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `withdrawFromMarketplaceSolanaKMS()`

### Example

[👉 View "**withdrawFromMarketplaceSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/withdrawFromMarketplaceSolanaKMS.php)

### Request

> **POST** `/v3/blockchain/marketplace/withdraw/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->marketplace()->withdrawFromMarketplaceSolanaKMS(
    \Tatum\Model\WithdrawFromMarketplaceSolanaKMS $withdraw_from_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana_kms** | [**\Tatum\Model\WithdrawFromMarketplaceSolanaKMS**](../../Model/WithdrawFromMarketplaceSolanaKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Withdraw funds from the marketplace fee account on Solana

WithdrawFromMarketplaceSolanaKMS operation

[Back to top](#top)

