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

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bloMarWithdrawFromMarketplaceSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/bloMarWithdrawFromMarketplaceSolana.php){: .btn .btn-green .mt-4}

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

> Withdraw funds from the marketplace treasury account on Solana

**2 credits per API call**

Withdraw funds from the NFT marketplace treasury account on Solana.

You can withdraw the funds only if you are the marketplace fee recipient.

This API is in **alpha** and is supported only for the mainnet on Solana.

**Signing a transaction** When withdrawing the funds, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `bloMarWithdrawFromMarketplaceSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bloMarWithdrawFromMarketplaceSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/bloMarWithdrawFromMarketplaceSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Withdraw funds from the marketplace treasury account on Solana



[Back to top](#top){: .btn .btn-purple }

---


## `buyAssetOnMarketplace()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **buyAssetOnMarketplace.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplace.php){: .btn .btn-green .mt-4}

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

> Buy an asset on the NFT marketplace

**2 credits per API call**

Buy an asset listed on the NFT marketplace.

You can buy the asset either for the native blockchain currency (for example, ETH, MATIC, and so on) or for the fungible tokens of the blockchain.

* If you want to pay for the asset with the **native blockchain currency**, send the required amount plus the marketplace fee right in the API call (in the `amount` request body parameter).
* If you want to pay with the **fungible tokens**, [allow the marketplace smart contract to access your tokens](https://apidoc.tatum.io/tag/Fungible-Tokens-%28ERC-20-or-compatible%29#operation/Erc20Approve) before making the purchase. When you make the API call, the marketplace smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

**The "execution reverted" message** When making this API call, you may get the following message:`Although one or more Error Occurred [execution reverted] Contract Execution Completed` This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

**Signing a transaction** When buying an asset on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `buyAssetOnMarketplaceCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **buyAssetOnMarketplaceCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceCelo.php){: .btn .btn-green .mt-4}

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

> Buy an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `buyAssetOnMarketplaceCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **buyAssetOnMarketplaceCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceCeloKMS.php){: .btn .btn-green .mt-4}

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

> Buy an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `buyAssetOnMarketplaceKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **buyAssetOnMarketplaceKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceKMS.php){: .btn .btn-green .mt-4}

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

> Buy an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `buyAssetOnMarketplaceSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **buyAssetOnMarketplaceSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceSolana.php){: .btn .btn-green .mt-4}

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

> Buy an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `buyAssetOnMarketplaceSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **buyAssetOnMarketplaceSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/buyAssetOnMarketplaceSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Buy an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `cancelSellAssetOnMarketplace()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelSellAssetOnMarketplace.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplace.php){: .btn .btn-green .mt-4}

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

> Cancel the selling of an asset on the NFT marketplace

**2 credits per API call**

Cancel the selling of an asset on the NFT marketplace.

You can cancel the selling only if you are the seller of the asset or the marketplace operator. Once the selling is canceled, the asset is returned to the seller.

You cannot cancel the selling if the asset has already been purchased.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

**The "execution reverted" message** When making this API call, you may get the following message:`Although one or more Error Occurred [execution reverted] Contract Execution Completed` This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

**Signing a transaction** When cancelling the selling of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `cancelSellAssetOnMarketplaceCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelSellAssetOnMarketplaceCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceCelo.php){: .btn .btn-green .mt-4}

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

> Cancel the selling of an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `cancelSellAssetOnMarketplaceCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelSellAssetOnMarketplaceCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceCeloKMS.php){: .btn .btn-green .mt-4}

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

> Cancel the selling of an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `cancelSellAssetOnMarketplaceKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelSellAssetOnMarketplaceKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceKMS.php){: .btn .btn-green .mt-4}

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

> Cancel the selling of an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `cancelSellAssetOnMarketplaceSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelSellAssetOnMarketplaceSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceSolana.php){: .btn .btn-green .mt-4}

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

> Cancel the selling of an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `cancelSellAssetOnMarketplaceSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelSellAssetOnMarketplaceSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/cancelSellAssetOnMarketplaceSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Cancel the selling of an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `generateMarketplace()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateMarketplace.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplace.php){: .btn .btn-green .mt-4}

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

> Create an NFT marketplace

**2 credits per API call**

Deploy an NFT marketplace smart contract on the blockchain. With a deployed marketplace smart contract, you and your customers can create new listings for assets such as non-fungible tokens and combinations of token types as described by the ERC-721 and ERC-1155 standards on the Ethereum blockchain or by the equivalent standards on the other blockchains. As the marketplace operator, you can set a fee as a percentage of the asset price that will be paid on top of the asset price.

The purchase process looks like the following:

1. The seller [creates a listing for an asset on the NFT marketplace](https://apidoc.tatum.io/tag/Marketplace/#operation/sellassetonmarketplace). The listing can be offered for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.
2. The seller [allows the marketplace smart contract to transfer the asset that they are selling](https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending).
3. A buyer buys the asset. 
 * If the buyer wants to pay with the **native blockchain assets**, they [make the purchase](https://apidoc.tatum.io/tag/Marketplace/#operation/buyassetonmarketplace) (the `buyAssetFromListing()` method is called against the marketplace smart contract) and send the required amount of the native assets to the marketplace smart contract. 
 * If the buyer wants to pay with the **fungible tokens**: 
 1. The buyer [allows the marketplace smart contract to access their tokens](https://apidoc.tatum.io/tag/Fungible-Tokens-%28ERC-20-or-compatible%29#operation/Erc20Approve) and makes the purchase (the `buyAssetFromListing()` method is called against the marketplace smart contract). 
 2. The marketplace smart contract deducts the required amount of tokens from the smart contract where the buyer holds the tokens.
4. The marketplace smart contract transfers the asset to the buyer, transfers the asset price to the seller, and sends the fee to the marketplace fee recipient.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

**Signing a transaction** When deploying an NFT marketplace smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `generateMarketplaceCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateMarketplaceCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceCelo.php){: .btn .btn-green .mt-4}

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

> Create an NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `generateMarketplaceCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateMarketplaceCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceCeloKMS.php){: .btn .btn-green .mt-4}

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

> Create an NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `generateMarketplaceKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateMarketplaceKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceKMS.php){: .btn .btn-green .mt-4}

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

> Create an NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `generateMarketplaceSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateMarketplaceSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceSolana.php){: .btn .btn-green .mt-4}

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

> Create an NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `generateMarketplaceSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateMarketplaceSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/generateMarketplaceSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Create an NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `getMarketplaceFee()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getMarketplaceFee.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceFee.php){: .btn .btn-green .mt-4}

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

> Get the NFT marketplace fee

**1 credit per API call**

Get the NFT marketplace fee.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

[Back to top](#top){: .btn .btn-purple }

---


## `getMarketplaceFeeRecipient()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getMarketplaceFeeRecipient.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceFeeRecipient.php){: .btn .btn-green .mt-4}

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

> Get the recipient of the NFT marketplace fee

**1 credit per API call**

Get the recipient of the NFT marketplace fee.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

[Back to top](#top){: .btn .btn-purple }

---


## `getMarketplaceInfo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getMarketplaceInfo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceInfo.php){: .btn .btn-green .mt-4}

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

> Get information about an NFT marketplace on Solana

**1 credit per API call**

Get information about an NFT marketplace on Solana.

This API is in **alpha** and is supported only for the mainnet on Solana.

[Back to top](#top){: .btn .btn-purple }

---


## `getMarketplaceListing()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getMarketplaceListing.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceListing.php){: .btn .btn-green .mt-4}

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

> Get information about a listing on the NFT marketplace

**1 credit per API call**

Get information about a specific listing on the NFT marketplace.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

[Back to top](#top){: .btn .btn-purple }

---


## `getMarketplaceListings()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getMarketplaceListings.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/getMarketplaceListings.php){: .btn .btn-green .mt-4}

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

> Get the listings of a certain type from the NFT marketplace

**1 credit per API call**

Get the open, sold, or cancelled listings from the NFT marketplace.

This API is supported for the following blockchains:

* Celo
* Ethereum
* Polygon
* Solana (in **alpha**)

[Back to top](#top){: .btn .btn-purple }

---


## `sellAssetOnMarketplace()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **sellAssetOnMarketplace.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplace.php){: .btn .btn-green .mt-4}

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

> Sell an asset on the NFT marketplace

**2 credits per API call**

Create a new listing for an asset on the NFT marketplace. The listing can be offered for the native blockchain assets (for example, ETH, MATIC, and so on) or for any fungible tokens.

After the listing is created, [allow the marketplace smart contract to transfer the asset that you are selling](https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending).

You can create a listing only for an existing asset that you own (you must be the owner of the asset).

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

**A known issue on Harmony** On Harmony, when you are viewing a transaction in the Harmony Blockchain Explorer, the transaction status may be displayed as the following:`Error reverted:x0` This is a known issue with the Harmony Blockchain Explorer. This status does not mean that the transaction failed. You can safely ignore it.

**The "execution reverted" message** When making this API call, you may get the following message:`Although one or more Error Occurred [execution reverted] Contract Execution Completed` This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.

**Signing a transaction** When creating a new listing on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `sellAssetOnMarketplaceCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **sellAssetOnMarketplaceCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceCelo.php){: .btn .btn-green .mt-4}

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

> Sell an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `sellAssetOnMarketplaceCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **sellAssetOnMarketplaceCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceCeloKMS.php){: .btn .btn-green .mt-4}

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

> Sell an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `sellAssetOnMarketplaceKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **sellAssetOnMarketplaceKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceKMS.php){: .btn .btn-green .mt-4}

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

> Sell an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `sellAssetOnMarketplaceSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **sellAssetOnMarketplaceSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceSolana.php){: .btn .btn-green .mt-4}

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

> Sell an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `sellAssetOnMarketplaceSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **sellAssetOnMarketplaceSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/sellAssetOnMarketplaceSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Sell an asset on the NFT marketplace



[Back to top](#top){: .btn .btn-purple }

---


## `updateFee()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFee.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFee.php){: .btn .btn-green .mt-4}

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

> Update the NFT marketplace fee

**2 credits per API call**

Update the NFT marketplace fee.

You can update the marketplace fee only if you are the marketplace operator.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

**Signing a transaction** When updating the NFT marketplace fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeCelo.php){: .btn .btn-green .mt-4}

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

> Update the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeCeloKMS.php){: .btn .btn-green .mt-4}

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

> Update the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeKMS.php){: .btn .btn-green .mt-4}

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

> Update the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeRecipient()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeRecipient.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipient.php){: .btn .btn-green .mt-4}

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

> Update the recipient of the NFT marketplace fee

**2 credits per API call**

Update the recipient of the NFT marketplace fee.

You can update the fee recipient only if you are the marketplace operator.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* Solana (in **alpha**)

**Signing a transaction** When updating the recipient of the NFT marketplace fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeRecipientCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeRecipientCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientCelo.php){: .btn .btn-green .mt-4}

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

> Update the recipient of the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeRecipientCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeRecipientCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientCeloKMS.php){: .btn .btn-green .mt-4}

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

> Update the recipient of the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeRecipientKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeRecipientKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientKMS.php){: .btn .btn-green .mt-4}

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

> Update the recipient of the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeRecipientSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeRecipientSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientSolana.php){: .btn .btn-green .mt-4}

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

> Update the recipient of the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeRecipientSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeRecipientSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeRecipientSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Update the recipient of the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeSolana.php){: .btn .btn-green .mt-4}

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

> Update the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateFeeSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Update the NFT marketplace fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateMarketplaceSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateMarketplaceSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateMarketplaceSolana.php){: .btn .btn-green .mt-4}

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

> Update an NFT marketplace on Solana

**2 credits per API call**

Update an NFT marketplace on Solana.

You can update it only if you are the marketplace operator.

This API is in **alpha** and is supported only for the mainnet on Solana.

**Signing a transaction** When updating an NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `updateMarketplaceSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateMarketplaceSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/updateMarketplaceSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Update an NFT marketplace on Solana



[Back to top](#top){: .btn .btn-purple }

---


## `withdrawFromMarketplaceSolana()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **withdrawFromMarketplaceSolana.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/withdrawFromMarketplaceSolana.php){: .btn .btn-green .mt-4}

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

> Withdraw funds from the marketplace fee account on Solana

**2 credits per API call**

Withdraw funds from the NFT marketplace fee account on Solana.

You can withdraw the funds only if you are the marketplace fee recipient.

This API is in **alpha** and is supported only for the mainnet on Solana.

**Signing a transaction** When withdrawing the funds, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `withdrawFromMarketplaceSolanaKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **withdrawFromMarketplaceSolanaKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MarketplaceApi/withdrawFromMarketplaceSolanaKMS.php){: .btn .btn-green .mt-4}

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

> Withdraw funds from the marketplace fee account on Solana



[Back to top](#top){: .btn .btn-purple }

---
