---
title: Marketplace
parent: API
layout: page
---

# Api/MarketplaceApi

## References

[Marketplace API documentation](https://apidoc.tatum.io/tag/Marketplace/)

## Methods

Method | Description
------------- | ------------- | -------------
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

> **POST** `/v3/blockchain/marketplace/withdraw/treasury`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->bloMarWithdrawFromMarketplaceSolana(
    \Tatum\Model\WithdrawFromMarketplaceSolana $withdraw_from_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana** | [**\Tatum\Model\WithdrawFromMarketplaceSolana**](../Model/WithdrawFromMarketplaceSolana.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

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

### Example

[✨ View "bloMarWithdrawFromMarketplaceSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/bloMarWithdrawFromMarketplaceSolana.php)

[[Back to top]](#top)



## `bloMarWithdrawFromMarketplaceSolanaKMS()`

> **POST** `/v3/blockchain/marketplace/withdraw/treasury`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->bloMarWithdrawFromMarketplaceSolanaKMS(
    \Tatum\Model\WithdrawFromMarketplaceSolanaKMS $withdraw_from_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana_kms** | [**\Tatum\Model\WithdrawFromMarketplaceSolanaKMS**](../Model/WithdrawFromMarketplaceSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Withdraw funds from the marketplace treasury account on Solana

WithdrawFromMarketplaceSolanaKMS operation

### Example

[✨ View "bloMarWithdrawFromMarketplaceSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/bloMarWithdrawFromMarketplaceSolanaKMS.php)

[[Back to top]](#top)



## `buyAssetOnMarketplace()`

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplace(
    \Tatum\Model\BuyAssetOnMarketplace $buy_asset_on_marketplace
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace** | [**\Tatum\Model\BuyAssetOnMarketplace**](../Model/BuyAssetOnMarketplace.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Buy an asset on the NFT marketplace

**2 credits per API call**

 Buy an asset listed on the NFT marketplace.

 You can buy the asset either for the native blockchain currency (for example, ETH, MATIC, and so on) or for the fungible tokens of the blockchain.

 

<ul> <li>If you want to pay for the asset with the **native blockchain currency**, send the required amount plus the marketplace fee right in the API call (in the `amount` request body parameter).</li> <li>If you want to pay with the **fungible tokens**, <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the marketplace smart contract to access your tokens</a> before making the purchase. When you make the API call, the marketplace smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.</li> </ul>

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **NOTE:** When making this API call, you may get the following message:

 `Although one or more Error Occurred [execution reverted] Contract Execution Completed`

 This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When buying an asset on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "buyAssetOnMarketplace.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplace.php)

[[Back to top]](#top)



## `buyAssetOnMarketplaceCelo()`

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceCelo(
    \Tatum\Model\BuyAssetOnMarketplaceCelo $buy_asset_on_marketplace_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_celo** | [**\Tatum\Model\BuyAssetOnMarketplaceCelo**](../Model/BuyAssetOnMarketplaceCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceCelo operation

### Example

[✨ View "buyAssetOnMarketplaceCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceCelo.php)

[[Back to top]](#top)



## `buyAssetOnMarketplaceCeloKMS()`

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceCeloKMS(
    \Tatum\Model\BuyAssetOnMarketplaceCeloKMS $buy_asset_on_marketplace_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_celo_kms** | [**\Tatum\Model\BuyAssetOnMarketplaceCeloKMS**](../Model/BuyAssetOnMarketplaceCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceCeloKMS operation

### Example

[✨ View "buyAssetOnMarketplaceCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceCeloKMS.php)

[[Back to top]](#top)



## `buyAssetOnMarketplaceKMS()`

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceKMS(
    \Tatum\Model\BuyAssetOnMarketplaceKMS $buy_asset_on_marketplace_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_kms** | [**\Tatum\Model\BuyAssetOnMarketplaceKMS**](../Model/BuyAssetOnMarketplaceKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceKMS operation

### Example

[✨ View "buyAssetOnMarketplaceKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceKMS.php)

[[Back to top]](#top)



## `buyAssetOnMarketplaceSolana()`

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceSolana(
    \Tatum\Model\BuyAssetOnMarketplaceSolana $buy_asset_on_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_solana** | [**\Tatum\Model\BuyAssetOnMarketplaceSolana**](../Model/BuyAssetOnMarketplaceSolana.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceSolana operation

### Example

[✨ View "buyAssetOnMarketplaceSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceSolana.php)

[[Back to top]](#top)



## `buyAssetOnMarketplaceSolanaKMS()`

> **POST** `/v3/blockchain/marketplace/listing/buy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplaceSolanaKMS(
    \Tatum\Model\BuyAssetOnMarketplaceSolanaKMS $buy_asset_on_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_solana_kms** | [**\Tatum\Model\BuyAssetOnMarketplaceSolanaKMS**](../Model/BuyAssetOnMarketplaceSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Buy an asset on the NFT marketplace

BuyAssetOnMarketplaceSolanaKMS operation

### Example

[✨ View "buyAssetOnMarketplaceSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceSolanaKMS.php)

[[Back to top]](#top)



## `cancelSellAssetOnMarketplace()`

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplace(
    \Tatum\Model\CancelSellAssetOnMarketplace $cancel_sell_asset_on_marketplace
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace** | [**\Tatum\Model\CancelSellAssetOnMarketplace**](../Model/CancelSellAssetOnMarketplace.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset on the NFT marketplace

**2 credits per API call**

 Cancel the selling of an asset on the NFT marketplace.

 You can cancel the selling only if you are the seller of the asset or the marketplace operator. Once the selling is canceled, the asset is returned to the seller.

 You cannot cancel the selling if the asset has already been purchased.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **NOTE:** When making this API call, you may get the following message:

 `Although one or more Error Occurred [execution reverted] Contract Execution Completed`

 This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When cancelling the selling of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "cancelSellAssetOnMarketplace.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplace.php)

[[Back to top]](#top)



## `cancelSellAssetOnMarketplaceCelo()`

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceCelo(
    \Tatum\Model\CancelSellAssetOnMarketplaceCelo $cancel_sell_asset_on_marketplace_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_celo** | [**\Tatum\Model\CancelSellAssetOnMarketplaceCelo**](../Model/CancelSellAssetOnMarketplaceCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceCelo operation

### Example

[✨ View "cancelSellAssetOnMarketplaceCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceCelo.php)

[[Back to top]](#top)



## `cancelSellAssetOnMarketplaceCeloKMS()`

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceCeloKMS(
    \Tatum\Model\CancelSellAssetOnMarketplaceCeloKMS $cancel_sell_asset_on_marketplace_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_celo_kms** | [**\Tatum\Model\CancelSellAssetOnMarketplaceCeloKMS**](../Model/CancelSellAssetOnMarketplaceCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceCeloKMS operation

### Example

[✨ View "cancelSellAssetOnMarketplaceCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceCeloKMS.php)

[[Back to top]](#top)



## `cancelSellAssetOnMarketplaceKMS()`

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceKMS(
    \Tatum\Model\CancelSellAssetOnMarketplaceKMS $cancel_sell_asset_on_marketplace_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_kms** | [**\Tatum\Model\CancelSellAssetOnMarketplaceKMS**](../Model/CancelSellAssetOnMarketplaceKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceKMS operation

### Example

[✨ View "cancelSellAssetOnMarketplaceKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceKMS.php)

[[Back to top]](#top)



## `cancelSellAssetOnMarketplaceSolana()`

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceSolana(
    \Tatum\Model\CancelSellAssetOnMarketplaceSolana $cancel_sell_asset_on_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_solana** | [**\Tatum\Model\CancelSellAssetOnMarketplaceSolana**](../Model/CancelSellAssetOnMarketplaceSolana.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceSolana operation

### Example

[✨ View "cancelSellAssetOnMarketplaceSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceSolana.php)

[[Back to top]](#top)



## `cancelSellAssetOnMarketplaceSolanaKMS()`

> **POST** `/v3/blockchain/marketplace/listing/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->cancelSellAssetOnMarketplaceSolanaKMS(
    \Tatum\Model\CancelSellAssetOnMarketplaceSolanaKMS $cancel_sell_asset_on_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_asset_on_marketplace_solana_kms** | [**\Tatum\Model\CancelSellAssetOnMarketplaceSolanaKMS**](../Model/CancelSellAssetOnMarketplaceSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset on the NFT marketplace

CancelSellAssetOnMarketplaceSolanaKMS operation

### Example

[✨ View "cancelSellAssetOnMarketplaceSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceSolanaKMS.php)

[[Back to top]](#top)



## `generateMarketplace()`

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->generateMarketplace(
    \Tatum\Model\GenerateMarketplace $generate_marketplace
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace** | [**\Tatum\Model\GenerateMarketplace**](../Model/GenerateMarketplace.md) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../Model/GenerateMarketplace200Response.md)

### Description

Create an NFT marketplace

**2 credits per API call**

 Deploy an NFT marketplace smart contract on the blockchain. With a deployed marketplace smart contract, you and your customers can create new listings for assets such as non-fungible tokens and combinations of token types as described by the ERC-721 and ERC-1155 standards on the Ethereum blockchain or by the equivalent standards on the other blockchains. As the marketplace operator, you can set a fee as a percentage of the asset price that will be paid on top of the asset price.

 The purchase process looks like the following:

 

<ol> <li>The seller creates a listing for an asset on the NFT marketplace. The listing can be offered for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.</li> <li>The seller <a href="https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending" target="_blank">allows the marketplace smart contract to transfer the asset that they are selling</a>.</li> <li>A buyer buys the asset. 

<ul><li>If the buyer wants to pay with the **native blockchain assets**, they make the purchase (the `buyAssetFromListing()` method is called against the marketplace smart contract) and send the required amount of the native assets to the marketplace smart contract.</li> <li>If the buyer wants to pay with the **fungible tokens**: 

<ol><li>The buyer <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allows the marketplace smart contract to access their tokens</a> and makes the purchase (the `buyAssetFromListing()` method is called against the marketplace smart contract).</li> <li>The marketplace smart contract deducts the required amount of tokens from the smart contract where the buyer holds the tokens.</li></ol>

</li></ul>

</li> <li>The marketplace smart contract transfers the asset to the buyer, transfers the asset price to the seller, and sends the fee to the marketplace fee recipient.</li> </ol>

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **Signing a transaction**

 When deploying an NFT marketplace smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "generateMarketplace.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplace.php)

[[Back to top]](#top)



## `generateMarketplaceCelo()`

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceCelo(
    \Tatum\Model\GenerateMarketplaceCelo $generate_marketplace_celo
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_celo** | [**\Tatum\Model\GenerateMarketplaceCelo**](../Model/GenerateMarketplaceCelo.md) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../Model/GenerateMarketplace200Response.md)

### Description

Create an NFT marketplace

GenerateMarketplaceCelo operation

### Example

[✨ View "generateMarketplaceCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceCelo.php)

[[Back to top]](#top)



## `generateMarketplaceCeloKMS()`

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceCeloKMS(
    \Tatum\Model\GenerateMarketplaceCeloKMS $generate_marketplace_celo_kms
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_celo_kms** | [**\Tatum\Model\GenerateMarketplaceCeloKMS**](../Model/GenerateMarketplaceCeloKMS.md) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../Model/GenerateMarketplace200Response.md)

### Description

Create an NFT marketplace

GenerateMarketplaceCeloKMS operation

### Example

[✨ View "generateMarketplaceCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceCeloKMS.php)

[[Back to top]](#top)



## `generateMarketplaceKMS()`

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceKMS(
    \Tatum\Model\GenerateMarketplaceKMS $generate_marketplace_kms
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_kms** | [**\Tatum\Model\GenerateMarketplaceKMS**](../Model/GenerateMarketplaceKMS.md) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../Model/GenerateMarketplace200Response.md)

### Description

Create an NFT marketplace

GenerateMarketplaceKMS operation

### Example

[✨ View "generateMarketplaceKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceKMS.php)

[[Back to top]](#top)



## `generateMarketplaceSolana()`

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceSolana(
    \Tatum\Model\GenerateMarketplaceSolana $generate_marketplace_solana
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_solana** | [**\Tatum\Model\GenerateMarketplaceSolana**](../Model/GenerateMarketplaceSolana.md) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../Model/GenerateMarketplace200Response.md)

### Description

Create an NFT marketplace

GenerateMarketplaceSolana operation

### Example

[✨ View "generateMarketplaceSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceSolana.php)

[[Back to top]](#top)



## `generateMarketplaceSolanaKMS()`

> **POST** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->generateMarketplaceSolanaKMS(
    \Tatum\Model\GenerateMarketplaceSolanaKMS $generate_marketplace_solana_kms
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_solana_kms** | [**\Tatum\Model\GenerateMarketplaceSolanaKMS**](../Model/GenerateMarketplaceSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../Model/GenerateMarketplace200Response.md)

### Description

Create an NFT marketplace

GenerateMarketplaceSolanaKMS operation

### Example

[✨ View "generateMarketplaceSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceSolanaKMS.php)

[[Back to top]](#top)



## `getMarketplaceFee()`

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceFee(
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

### Example

[✨ View "getMarketplaceFee.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceFee.php)

[[Back to top]](#top)



## `getMarketplaceFeeRecipient()`

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceFeeRecipient(
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

[**\Tatum\Model\GetMarketplaceFeeRecipient200Response**](../Model/GetMarketplaceFeeRecipient200Response.md)

### Description

Get the recipient of the NFT marketplace fee

**1 credit per API call**

 Get the recipient of the NFT marketplace fee.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

### Example

[✨ View "getMarketplaceFeeRecipient.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceFeeRecipient.php)

[[Back to top]](#top)



## `getMarketplaceInfo()`

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceInfo(
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

[**\Tatum\Model\GetMarketplaceInfo200Response**](../Model/GetMarketplaceInfo200Response.md)

### Description

Get information about an NFT marketplace on Solana

**1 credit per API call**

 Get information about an NFT marketplace on Solana.

 This API is in **alpha** and is supported only for the mainnet on Solana.

### Example

[✨ View "getMarketplaceInfo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceInfo.php)

[[Back to top]](#top)



## `getMarketplaceListing()`

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/listing/{id}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceListing(
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

[**\Tatum\Model\GetMarketplaceListing200Response**](../Model/GetMarketplaceListing200Response.md)

### Description

Get information about a listing on the NFT marketplace

**1 credit per API call**

 Get information about a specific listing on the NFT marketplace.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

### Example

[✨ View "getMarketplaceListing.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceListing.php)

[[Back to top]](#top)



## `getMarketplaceListings()`

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/{type}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceListings(
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

### Example

[✨ View "getMarketplaceListings.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceListings.php)

[[Back to top]](#top)



## `sellAssetOnMarketplace()`

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplace(
    \Tatum\Model\SellAssetOnMarketplace $sell_asset_on_marketplace
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace** | [**\Tatum\Model\SellAssetOnMarketplace**](../Model/SellAssetOnMarketplace.md) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../Model/SellAssetOnMarketplace200Response.md)

### Description

Sell an asset on the NFT marketplace

**2 credits per API call**

 Create a new listing for an asset on the NFT marketplace. The listing can be offered for the native blockchain assets (for example, ETH, MATIC, and so on) or for any fungible tokens.

 After the listing is created, <a href="https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending" target="_blank">allow the marketplace smart contract to transfer the asset that you are selling</a>.

 You can create a listing only for an existing asset that you own (you must be the owner of the asset).

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in **alpha**)</li> </ul>

 **NOTE:** When making this API call, you may get the following message:

 `Although one or more Error Occurred [execution reverted] Contract Execution Completed`

 This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When creating a new listing on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "sellAssetOnMarketplace.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplace.php)

[[Back to top]](#top)



## `sellAssetOnMarketplaceCelo()`

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceCelo(
    \Tatum\Model\SellAssetOnMarketplaceCelo $sell_asset_on_marketplace_celo
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_celo** | [**\Tatum\Model\SellAssetOnMarketplaceCelo**](../Model/SellAssetOnMarketplaceCelo.md) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../Model/SellAssetOnMarketplace200Response.md)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceCelo operation

### Example

[✨ View "sellAssetOnMarketplaceCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceCelo.php)

[[Back to top]](#top)



## `sellAssetOnMarketplaceCeloKMS()`

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceCeloKMS(
    \Tatum\Model\SellAssetOnMarketplaceCeloKMS $sell_asset_on_marketplace_celo_kms
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_celo_kms** | [**\Tatum\Model\SellAssetOnMarketplaceCeloKMS**](../Model/SellAssetOnMarketplaceCeloKMS.md) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../Model/SellAssetOnMarketplace200Response.md)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceCeloKMS operation

### Example

[✨ View "sellAssetOnMarketplaceCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceCeloKMS.php)

[[Back to top]](#top)



## `sellAssetOnMarketplaceKMS()`

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceKMS(
    \Tatum\Model\SellAssetOnMarketplaceKMS $sell_asset_on_marketplace_kms
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_kms** | [**\Tatum\Model\SellAssetOnMarketplaceKMS**](../Model/SellAssetOnMarketplaceKMS.md) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../Model/SellAssetOnMarketplace200Response.md)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceKMS operation

### Example

[✨ View "sellAssetOnMarketplaceKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceKMS.php)

[[Back to top]](#top)



## `sellAssetOnMarketplaceSolana()`

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceSolana(
    \Tatum\Model\SellAssetOnMarketplaceSolana $sell_asset_on_marketplace_solana
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_solana** | [**\Tatum\Model\SellAssetOnMarketplaceSolana**](../Model/SellAssetOnMarketplaceSolana.md) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../Model/SellAssetOnMarketplace200Response.md)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceSolana operation

### Example

[✨ View "sellAssetOnMarketplaceSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceSolana.php)

[[Back to top]](#top)



## `sellAssetOnMarketplaceSolanaKMS()`

> **POST** `/v3/blockchain/marketplace/listing/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplaceSolanaKMS(
    \Tatum\Model\SellAssetOnMarketplaceSolanaKMS $sell_asset_on_marketplace_solana_kms
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_solana_kms** | [**\Tatum\Model\SellAssetOnMarketplaceSolanaKMS**](../Model/SellAssetOnMarketplaceSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../Model/SellAssetOnMarketplace200Response.md)

### Description

Sell an asset on the NFT marketplace

SellAssetOnMarketplaceSolanaKMS operation

### Example

[✨ View "sellAssetOnMarketplaceSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceSolanaKMS.php)

[[Back to top]](#top)



## `updateFee()`

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFee(
    \Tatum\Model\UpdateFee $update_fee
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee** | [**\Tatum\Model\UpdateFee**](../Model/UpdateFee.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

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

### Example

[✨ View "updateFee.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFee.php)

[[Back to top]](#top)



## `updateFeeCelo()`

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeCelo(
    \Tatum\Model\UpdateFeeCelo $update_fee_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_celo** | [**\Tatum\Model\UpdateFeeCelo**](../Model/UpdateFeeCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT marketplace fee

UpdateFeeCelo operation

### Example

[✨ View "updateFeeCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeCelo.php)

[[Back to top]](#top)



## `updateFeeCeloKMS()`

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeCeloKMS(
    \Tatum\Model\UpdateFeeCeloKMS $update_fee_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_celo_kms** | [**\Tatum\Model\UpdateFeeCeloKMS**](../Model/UpdateFeeCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT marketplace fee

UpdateFeeCeloKMS operation

### Example

[✨ View "updateFeeCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeCeloKMS.php)

[[Back to top]](#top)



## `updateFeeKMS()`

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeKMS(
    \Tatum\Model\UpdateFeeKMS $update_fee_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_kms** | [**\Tatum\Model\UpdateFeeKMS**](../Model/UpdateFeeKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT marketplace fee

UpdateFeeKMS operation

### Example

[✨ View "updateFeeKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeKMS.php)

[[Back to top]](#top)



## `updateFeeRecipient()`

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipient(
    \Tatum\Model\UpdateFeeRecipient $update_fee_recipient
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient** | [**\Tatum\Model\UpdateFeeRecipient**](../Model/UpdateFeeRecipient.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

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

### Example

[✨ View "updateFeeRecipient.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipient.php)

[[Back to top]](#top)



## `updateFeeRecipientCelo()`

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientCelo(
    \Tatum\Model\UpdateFeeRecipientCelo $update_fee_recipient_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_celo** | [**\Tatum\Model\UpdateFeeRecipientCelo**](../Model/UpdateFeeRecipientCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientCelo operation

### Example

[✨ View "updateFeeRecipientCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientCelo.php)

[[Back to top]](#top)



## `updateFeeRecipientCeloKMS()`

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientCeloKMS(
    \Tatum\Model\UpdateFeeRecipientCeloKMS $update_fee_recipient_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_celo_kms** | [**\Tatum\Model\UpdateFeeRecipientCeloKMS**](../Model/UpdateFeeRecipientCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientCeloKMS operation

### Example

[✨ View "updateFeeRecipientCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientCeloKMS.php)

[[Back to top]](#top)



## `updateFeeRecipientKMS()`

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientKMS(
    \Tatum\Model\UpdateFeeRecipientKMS $update_fee_recipient_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_kms** | [**\Tatum\Model\UpdateFeeRecipientKMS**](../Model/UpdateFeeRecipientKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientKMS operation

### Example

[✨ View "updateFeeRecipientKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientKMS.php)

[[Back to top]](#top)



## `updateFeeRecipientSolana()`

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientSolana(
    \Tatum\Model\UpdateFeeRecipientSolana $update_fee_recipient_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_solana** | [**\Tatum\Model\UpdateFeeRecipientSolana**](../Model/UpdateFeeRecipientSolana.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientSolana operation

### Example

[✨ View "updateFeeRecipientSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientSolana.php)

[[Back to top]](#top)



## `updateFeeRecipientSolanaKMS()`

> **PUT** `/v3/blockchain/marketplace/listing/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipientSolanaKMS(
    \Tatum\Model\UpdateFeeRecipientSolanaKMS $update_fee_recipient_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_solana_kms** | [**\Tatum\Model\UpdateFeeRecipientSolanaKMS**](../Model/UpdateFeeRecipientSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the recipient of the NFT marketplace fee

UpdateFeeRecipientSolanaKMS operation

### Example

[✨ View "updateFeeRecipientSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientSolanaKMS.php)

[[Back to top]](#top)



## `updateFeeSolana()`

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeSolana(
    \Tatum\Model\UpdateFeeSolana $update_fee_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_solana** | [**\Tatum\Model\UpdateFeeSolana**](../Model/UpdateFeeSolana.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT marketplace fee

UpdateFeeSolana operation

### Example

[✨ View "updateFeeSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeSolana.php)

[[Back to top]](#top)



## `updateFeeSolanaKMS()`

> **PUT** `/v3/blockchain/marketplace/listing/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeSolanaKMS(
    \Tatum\Model\UpdateFeeSolanaKMS $update_fee_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_solana_kms** | [**\Tatum\Model\UpdateFeeSolanaKMS**](../Model/UpdateFeeSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT marketplace fee

UpdateFeeSolanaKMS operation

### Example

[✨ View "updateFeeSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeSolanaKMS.php)

[[Back to top]](#top)



## `updateMarketplaceSolana()`

> **PUT** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateMarketplaceSolana(
    \Tatum\Model\UpdateMarketplaceSolana $update_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_marketplace_solana** | [**\Tatum\Model\UpdateMarketplaceSolana**](../Model/UpdateMarketplaceSolana.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

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

### Example

[✨ View "updateMarketplaceSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateMarketplaceSolana.php)

[[Back to top]](#top)



## `updateMarketplaceSolanaKMS()`

> **PUT** `/v3/blockchain/marketplace/listing`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateMarketplaceSolanaKMS(
    \Tatum\Model\UpdateMarketplaceSolanaKMS $update_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_marketplace_solana_kms** | [**\Tatum\Model\UpdateMarketplaceSolanaKMS**](../Model/UpdateMarketplaceSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update an NFT marketplace on Solana

UpdateMarketplaceSolanaKMS operation

### Example

[✨ View "updateMarketplaceSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateMarketplaceSolanaKMS.php)

[[Back to top]](#top)



## `withdrawFromMarketplaceSolana()`

> **POST** `/v3/blockchain/marketplace/withdraw/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->withdrawFromMarketplaceSolana(
    \Tatum\Model\WithdrawFromMarketplaceSolana $withdraw_from_marketplace_solana
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana** | [**\Tatum\Model\WithdrawFromMarketplaceSolana**](../Model/WithdrawFromMarketplaceSolana.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

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

### Example

[✨ View "withdrawFromMarketplaceSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/withdrawFromMarketplaceSolana.php)

[[Back to top]](#top)



## `withdrawFromMarketplaceSolanaKMS()`

> **POST** `/v3/blockchain/marketplace/withdraw/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->withdrawFromMarketplaceSolanaKMS(
    \Tatum\Model\WithdrawFromMarketplaceSolanaKMS $withdraw_from_marketplace_solana_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_from_marketplace_solana_kms** | [**\Tatum\Model\WithdrawFromMarketplaceSolanaKMS**](../Model/WithdrawFromMarketplaceSolanaKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Withdraw funds from the marketplace fee account on Solana

WithdrawFromMarketplaceSolanaKMS operation

### Example

[✨ View "withdrawFromMarketplaceSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/withdrawFromMarketplaceSolanaKMS.php)

[[Back to top]](#top)

