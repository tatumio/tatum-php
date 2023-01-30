---
title: Auction
parent: API
layout: page
---

# Api/AuctionApi

[Auction API Reference](https://apidoc.tatum.io/tag/Auction/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->auction();

// TestNet API Call
$sdk->testnet()->api()->auction();
```

## Methods

Method | Description
------------- | -------------
[**approveNftSpending()**](#approvenftspending) | Allow the NFT auction or marketplace to transfer an asset
[**approveNftSpendingCelo()**](#approvenftspendingcelo) | Allow the NFT auction or marketplace to transfer an asset
[**approveNftSpendingCeloKMS()**](#approvenftspendingcelokms) | Allow the NFT auction or marketplace to transfer an asset
[**approveNftSpendingKMS()**](#approvenftspendingkms) | Allow the NFT auction or marketplace to transfer an asset
[**bidOnAuction()**](#bidonauction) | Bid for an asset at the NFT auction
[**bidOnAuctionCelo()**](#bidonauctioncelo) | Bid for an asset at the NFT auction
[**bidOnAuctionCeloKMS()**](#bidonauctioncelokms) | Bid for an asset at the NFT auction
[**bidOnAuctionKMS()**](#bidonauctionkms) | Bid for an asset at the NFT auction
[**bloAucUpdateFeeRecipient()**](#bloaucupdatefeerecipient) | Update the recipient of the NFT auction fee
[**bloAucUpdateFeeRecipientCelo()**](#bloaucupdatefeerecipientcelo) | Update the recipient of the NFT auction fee
[**bloAucUpdateFeeRecipientCeloKMS()**](#bloaucupdatefeerecipientcelokms) | Update the recipient of the NFT auction fee
[**bloAucUpdateFeeRecipientKMS()**](#bloaucupdatefeerecipientkms) | Update the recipient of the NFT auction fee
[**cancelAuction()**](#cancelauction) | Cancel the selling of an asset at the NFT auction
[**cancelAuctionCelo()**](#cancelauctioncelo) | Cancel the selling of an asset at the NFT auction
[**cancelAuctionCeloKMS()**](#cancelauctioncelokms) | Cancel the selling of an asset at the NFT auction
[**cancelAuctionKMS()**](#cancelauctionkms) | Cancel the selling of an asset at the NFT auction
[**createAuction()**](#createauction) | Sell an asset at the NFT auction
[**createAuctionCelo()**](#createauctioncelo) | Sell an asset at the NFT auction
[**createAuctionCeloKMS()**](#createauctioncelokms) | Sell an asset at the NFT auction
[**createAuctionKMS()**](#createauctionkms) | Sell an asset at the NFT auction
[**generateAuction()**](#generateauction) | Create an NFT auction
[**generateAuctionCelo()**](#generateauctioncelo) | Create an NFT auction
[**generateAuctionCeloKMS()**](#generateauctioncelokms) | Create an NFT auction
[**generateAuctionKMS()**](#generateauctionkms) | Create an NFT auction
[**getAuction()**](#getauction) | Get information about an auctioned asset at the NFT auction
[**getAuctionFee()**](#getauctionfee) | Get the NFT auction fee
[**getAuctionFeeRecipient()**](#getauctionfeerecipient) | Get the recipient of the NFT auction fee
[**settleAuction()**](#settleauction) | Settle an NFT auction
[**settleAuctionCelo()**](#settleauctioncelo) | Settle an NFT auction
[**settleAuctionCeloKMS()**](#settleauctioncelokms) | Settle an NFT auction
[**settleAuctionKMS()**](#settleauctionkms) | Settle an NFT auction
[**updateFeeAuction()**](#updatefeeauction) | Update the NFT auction fee
[**updateFeeAuctionCelo()**](#updatefeeauctioncelo) | Update the NFT auction fee
[**updateFeeAuctionCeloKMS()**](#updatefeeauctioncelokms) | Update the NFT auction fee
[**updateFeeAuctionKMS()**](#updatefeeauctionkms) | Update the NFT auction fee


## `approveNftSpending()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveNftSpending.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpending.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->approveNftSpending(
    \Tatum\Model\ApproveNftSpending $approve_nft_spending
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending** | [**\Tatum\Model\ApproveNftSpending**](../../Model/ApproveNftSpending) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow the NFT auction or marketplace to transfer an asset

**2 credits per API call**

Allow the NFT auction/marketplace smart contract to transfer the asset (NFT or Multi Token) that is listed for selling. The auction/marketplace smart contract will transfer the asset to the buyer after the asset is purchased.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**Signing a transaction** When allowing the NFT auction/marketplace smart contract to transfer the asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `approveNftSpendingCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveNftSpendingCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpendingCelo.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->approveNftSpendingCelo(
    \Tatum\Model\ApproveNftSpendingCelo $approve_nft_spending_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_celo** | [**\Tatum\Model\ApproveNftSpendingCelo**](../../Model/ApproveNftSpendingCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow the NFT auction or marketplace to transfer an asset



[Back to top](#top){: .btn .btn-purple }

---


## `approveNftSpendingCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveNftSpendingCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpendingCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->approveNftSpendingCeloKMS(
    \Tatum\Model\ApproveNftSpendingCeloKMS $approve_nft_spending_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_celo_kms** | [**\Tatum\Model\ApproveNftSpendingCeloKMS**](../../Model/ApproveNftSpendingCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow the NFT auction or marketplace to transfer an asset



[Back to top](#top){: .btn .btn-purple }

---


## `approveNftSpendingKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveNftSpendingKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpendingKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->approveNftSpendingKMS(
    \Tatum\Model\ApproveNftSpendingKMS $approve_nft_spending_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_kms** | [**\Tatum\Model\ApproveNftSpendingKMS**](../../Model/ApproveNftSpendingKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Allow the NFT auction or marketplace to transfer an asset



[Back to top](#top){: .btn .btn-purple }

---


## `bidOnAuction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bidOnAuction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuction.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bidOnAuction(
    \Tatum\Model\BidOnAuction $bid_on_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction** | [**\Tatum\Model\BidOnAuction**](../../Model/BidOnAuction) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Bid for an asset at the NFT auction

**2 credits per API call**

Bid for an asset listed on the NFT auction.

You can buy the asset either for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.

* If you want to pay for the asset with the **native assets**, send the required amount of the assets with the API call.
* If you want to pay with the **fungible tokens**, [allow the auction smart contract to access your tokens](https://apidoc.tatum.io/tag/Fungible-Tokens-%28ERC-20-or-compatible%29#operation/Erc20Approve) before bidding for the asset. When you make the API call, the auction smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.

After you have purchased the asset, it is in a pending state until [the auction is settled](https://apidoc.tatum.io/tag/Auction/#operation/settleauction). Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.

For the complete information about how the bidding/purchase process at an auction works, see the API for [creating an NFT auction](https://apidoc.tatum.io/tag/Auction/#operation/generateauction).

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**The "execution reverted" message** When making this API call, you may get the following message:`Although one or more Error Occurred [execution reverted] Contract Execution Completed` This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.

**Signing a transaction** When bidding for an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `bidOnAuctionCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bidOnAuctionCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuctionCelo.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bidOnAuctionCelo(
    \Tatum\Model\BidOnAuctionCelo $bid_on_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_celo** | [**\Tatum\Model\BidOnAuctionCelo**](../../Model/BidOnAuctionCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Bid for an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `bidOnAuctionCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bidOnAuctionCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuctionCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bidOnAuctionCeloKMS(
    \Tatum\Model\BidOnAuctionCeloKMS $bid_on_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_celo_kms** | [**\Tatum\Model\BidOnAuctionCeloKMS**](../../Model/BidOnAuctionCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Bid for an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `bidOnAuctionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bidOnAuctionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuctionKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bidOnAuctionKMS(
    \Tatum\Model\BidOnAuctionKMS $bid_on_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_kms** | [**\Tatum\Model\BidOnAuctionKMS**](../../Model/BidOnAuctionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Bid for an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `bloAucUpdateFeeRecipient()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bloAucUpdateFeeRecipient.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipient.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipient(
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

> Update the recipient of the NFT auction fee

**2 credits per API call**

Update the recipient of the NFT auction fee.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**Signing a transaction** When updating the recipient of the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `bloAucUpdateFeeRecipientCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bloAucUpdateFeeRecipientCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipientCelo.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipientCelo(
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

> Update the recipient of the NFT auction fee



[Back to top](#top){: .btn .btn-purple }

---


## `bloAucUpdateFeeRecipientCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bloAucUpdateFeeRecipientCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipientCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipientCeloKMS(
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

> Update the recipient of the NFT auction fee



[Back to top](#top){: .btn .btn-purple }

---


## `bloAucUpdateFeeRecipientKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **bloAucUpdateFeeRecipientKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipientKMS.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipientKMS(
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

> Update the recipient of the NFT auction fee



[Back to top](#top){: .btn .btn-purple }

---


## `cancelAuction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelAuction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuction.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->cancelAuction(
    \Tatum\Model\CancelAuction $cancel_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction** | [**\Tatum\Model\CancelAuction**](../../Model/CancelAuction) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Cancel the selling of an asset at the NFT auction

**2 credits per API call**

Cancel the selling of an asset at the NFT auction.

You can cancel the selling only if you are the seller of the asset or the auction operator. Once the selling is canceled, the asset is returned to the seller.

You cannot cancel the selling if the asset has already been purchased.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**The "execution reverted" message** When making this API call, you may get the following message:`Although one or more Error Occurred [execution reverted] Contract Execution Completed` This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.

**Signing a transaction** When cancelling the selling of an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `cancelAuctionCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelAuctionCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuctionCelo.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->cancelAuctionCelo(
    \Tatum\Model\CancelAuctionCelo $cancel_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_celo** | [**\Tatum\Model\CancelAuctionCelo**](../../Model/CancelAuctionCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Cancel the selling of an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `cancelAuctionCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelAuctionCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuctionCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->cancelAuctionCeloKMS(
    \Tatum\Model\CancelAuctionCeloKMS $cancel_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_celo_kms** | [**\Tatum\Model\CancelAuctionCeloKMS**](../../Model/CancelAuctionCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Cancel the selling of an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `cancelAuctionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **cancelAuctionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuctionKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->cancelAuctionKMS(
    \Tatum\Model\CancelAuctionKMS $cancel_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_kms** | [**\Tatum\Model\CancelAuctionKMS**](../../Model/CancelAuctionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Cancel the selling of an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `createAuction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **createAuction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuction.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->createAuction(
    \Tatum\Model\CreateAuction $create_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction** | [**\Tatum\Model\CreateAuction**](../../Model/CreateAuction) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Sell an asset at the NFT auction

**2 credits per API call**

Create new auction on the auction contract. Before operation, seller must approve spending of the NFT token for the Auction contract using [Approve NFT](https://apidoc.tatum.io/tag/Auction/#operation/approvenftauctionspending). After auction is created, auction contract transfers the asset to the auction smart contract. Only auction for existing NFTs can be created - seller must be owner of the NFT asset.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**A known issue on Harmony** On Harmony, when you are viewing a transaction in the Harmony Blockchain Explorer, the transaction status may be displayed as the following:`Error reverted:x0` This is a known issue with the Harmony Blockchain Explorer. This status does not mean that the transaction failed. You can safely ignore it.

**Signing a transaction** When selling an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `createAuctionCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **createAuctionCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuctionCelo.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->createAuctionCelo(
    \Tatum\Model\CreateAuctionCelo $create_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_celo** | [**\Tatum\Model\CreateAuctionCelo**](../../Model/CreateAuctionCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Sell an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `createAuctionCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **createAuctionCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuctionCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->createAuctionCeloKMS(
    \Tatum\Model\CreateAuctionCeloKMS $create_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_celo_kms** | [**\Tatum\Model\CreateAuctionCeloKMS**](../../Model/CreateAuctionCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Sell an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `createAuctionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **createAuctionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuctionKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->createAuctionKMS(
    \Tatum\Model\CreateAuctionKMS $create_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_kms** | [**\Tatum\Model\CreateAuctionKMS**](../../Model/CreateAuctionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Sell an asset at the NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `generateAuction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateAuction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuction.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->generateAuction(
    \Tatum\Model\GenerateAuction $generate_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction** | [**\Tatum\Model\GenerateAuction**](../../Model/GenerateAuction) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Create an NFT auction

**2 credits per API call**

Deploy new smart contract for NFT auction logic. Smart contract enables auction operator to create new auction for NFT (ERC-721/1155). Operator can set a fee in percentage, which will be paid on top of the price of the asset. can be offered for native asset - ETH, BSC, etc. - or any ERC20 token - this is configurable during auction creation. Before auction is created, seller must approve transfer of the NFT to the auction contract. Buyer will bid for the asset from the auction using native asset - send assets along the gid() smart contract call, or via ERC20 token. Buyer of the auction must perform approval for the smart contract to access ERC20 token, before the actual bid() method is called. Once there is higher bid then the actual one, the previous bidder's funds will be returned to him and new bidder will be the current winning one. When auction ends, anyone can settle the auction - NFT will be sent to the bidder, assets to the seller and fee to the operator. This operation deploys a smart contract on the blockchain.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**Signing a transaction** When creating an NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `generateAuctionCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateAuctionCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuctionCelo.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->generateAuctionCelo(
    \Tatum\Model\GenerateAuctionCelo $generate_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_celo** | [**\Tatum\Model\GenerateAuctionCelo**](../../Model/GenerateAuctionCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Create an NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `generateAuctionCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateAuctionCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuctionCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->generateAuctionCeloKMS(
    \Tatum\Model\GenerateAuctionCeloKMS $generate_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_celo_kms** | [**\Tatum\Model\GenerateAuctionCeloKMS**](../../Model/GenerateAuctionCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Create an NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `generateAuctionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateAuctionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuctionKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->generateAuctionKMS(
    \Tatum\Model\GenerateAuctionKMS $generate_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_kms** | [**\Tatum\Model\GenerateAuctionKMS**](../../Model/GenerateAuctionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Create an NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `getAuction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getAuction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/getAuction.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->getAuction(
    string $chain,
    string $contract_address,
    string $id
): \Tatum\Model\GetAuction200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | Contract address |
 **$id** | **string**  | Auction ID |

### Return type

[**\Tatum\Model\GetAuction200Response**](../../Model/GetAuction200Response)

### Description

> Get information about an auctioned asset at the NFT auction

**1 credit per API call**

Get information about a specific auctioned asset at the NFT auction.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `getAuctionFee()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getAuctionFee.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/getAuctionFee.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->getAuctionFee(
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

> Get the NFT auction fee

**1 credit per API call**

Get the NFT auction fee.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `getAuctionFeeRecipient()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getAuctionFeeRecipient.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/getAuctionFeeRecipient.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/recipient`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->getAuctionFeeRecipient(
    string $chain,
    string $contract_address
): \Tatum\Model\GetAuctionFeeRecipient200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$contract_address** | **string**  | Contract address |

### Return type

[**\Tatum\Model\GetAuctionFeeRecipient200Response**](../../Model/GetAuctionFeeRecipient200Response)

### Description

> Get the recipient of the NFT auction fee

**1 credit per API call**

Get the recipient of the NFT auction fee.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Polygon

[Back to top](#top){: .btn .btn-purple }

---


## `settleAuction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **settleAuction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuction.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->settleAuction(
    \Tatum\Model\SettleAuction $settle_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction** | [**\Tatum\Model\SettleAuction**](../../Model/SettleAuction) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Settle an NFT auction

**2 credits per API call**

Settle an auction once it has ended and there is a buyer of the asset at this auction. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction. Both seller and buyer can settle the auction.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**The "execution reverted" message** When making this API call, you may get the following message:`Although one or more Error Occurred [execution reverted] Contract Execution Completed` This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.

**Signing a transaction** When settling the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `settleAuctionCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **settleAuctionCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuctionCelo.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->settleAuctionCelo(
    \Tatum\Model\SettleAuctionCelo $settle_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_celo** | [**\Tatum\Model\SettleAuctionCelo**](../../Model/SettleAuctionCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Settle an NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `settleAuctionCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **settleAuctionCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuctionCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->settleAuctionCeloKMS(
    \Tatum\Model\SettleAuctionCeloKMS $settle_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_celo_kms** | [**\Tatum\Model\SettleAuctionCeloKMS**](../../Model/SettleAuctionCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Settle an NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `settleAuctionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **settleAuctionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuctionKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->settleAuctionKMS(
    \Tatum\Model\SettleAuctionKMS $settle_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_kms** | [**\Tatum\Model\SettleAuctionKMS**](../../Model/SettleAuctionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Settle an NFT auction



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeAuction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeAuction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuction.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->updateFeeAuction(
    \Tatum\Model\UpdateFeeAuction $update_fee_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction** | [**\Tatum\Model\UpdateFeeAuction**](../../Model/UpdateFeeAuction) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Update the NFT auction fee

**2 credits per API call**

Update the NFT auction fee.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon

**Signing a transaction** When updating the NFT auction fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeAuctionCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeAuctionCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuctionCelo.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->updateFeeAuctionCelo(
    \Tatum\Model\UpdateFeeAuctionCelo $update_fee_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_celo** | [**\Tatum\Model\UpdateFeeAuctionCelo**](../../Model/UpdateFeeAuctionCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Update the NFT auction fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeAuctionCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeAuctionCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuctionCeloKMS.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->updateFeeAuctionCeloKMS(
    \Tatum\Model\UpdateFeeAuctionCeloKMS $update_fee_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_celo_kms** | [**\Tatum\Model\UpdateFeeAuctionCeloKMS**](../../Model/UpdateFeeAuctionCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Update the NFT auction fee



[Back to top](#top){: .btn .btn-purple }

---


## `updateFeeAuctionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateFeeAuctionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuctionKMS.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->auction()->updateFeeAuctionKMS(
    \Tatum\Model\UpdateFeeAuctionKMS $update_fee_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_kms** | [**\Tatum\Model\UpdateFeeAuctionKMS**](../../Model/UpdateFeeAuctionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Update the NFT auction fee



[Back to top](#top){: .btn .btn-purple }

---
