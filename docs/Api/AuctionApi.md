# Tatum/Api/AuctionApi

## References

[Auction API documentation](https://apidoc.tatum.io/tag/Auction/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **approveNftSpending()**](#approvenftspending) 

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **approveNftSpendingCelo()**](#approvenftspendingcelo) 

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **approveNftSpendingCeloKMS()**](#approvenftspendingcelokms) 

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **approveNftSpendingKMS()**](#approvenftspendingkms) 

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **bidOnAuction()**](#bidonauction) 

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bidOnAuctionCelo()**](#bidonauctioncelo) 

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bidOnAuctionCeloKMS()**](#bidonauctioncelokms) 

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bidOnAuctionKMS()**](#bidonauctionkms) 

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bloAucUpdateFeeRecipient()**](#bloaucupdatefeerecipient) 

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **bloAucUpdateFeeRecipientCelo()**](#bloaucupdatefeerecipientcelo) 

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **bloAucUpdateFeeRecipientCeloKMS()**](#bloaucupdatefeerecipientcelokms) 

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **bloAucUpdateFeeRecipientKMS()**](#bloaucupdatefeerecipientkms) 

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **cancelAuction()**](#cancelauction) 

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **cancelAuctionCelo()**](#cancelauctioncelo) 

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **cancelAuctionCeloKMS()**](#cancelauctioncelokms) 

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **cancelAuctionKMS()**](#cancelauctionkms) 

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **createAuction()**](#createauction) 

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **createAuctionCelo()**](#createauctioncelo) 

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **createAuctionCeloKMS()**](#createauctioncelokms) 

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **createAuctionKMS()**](#createauctionkms) 

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **generateAuction()**](#generateauction) 

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **generateAuctionCelo()**](#generateauctioncelo) 

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **generateAuctionCeloKMS()**](#generateauctioncelokms) 

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **generateAuctionKMS()**](#generateauctionkms) 

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **getAuction()**](#getauction) 

> Get information about an auctioned asset at the NFT auction
> 
> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/{id}`

[🔹 **getAuctionFee()**](#getauctionfee) 

> Get the NFT auction fee
> 
> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/fee`

[🔹 **getAuctionFeeRecipient()**](#getauctionfeerecipient) 

> Get the recipient of the NFT auction fee
> 
> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/recipient`

[🔹 **settleAuction()**](#settleauction) 

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **settleAuctionCelo()**](#settleauctioncelo) 

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **settleAuctionCeloKMS()**](#settleauctioncelokms) 

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **settleAuctionKMS()**](#settleauctionkms) 

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **updateFeeAuction()**](#updatefeeauction) 

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`

[🔹 **updateFeeAuctionCelo()**](#updatefeeauctioncelo) 

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`

[🔹 **updateFeeAuctionCeloKMS()**](#updatefeeauctioncelokms) 

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`

[🔹 **updateFeeAuctionKMS()**](#updatefeeauctionkms) 

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`



## `approveNftSpending()`

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->approveNftSpending(
    \Tatum\Model\ApproveNftSpending $approve_nft_spending
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending** | [**\Tatum\Model\ApproveNftSpending**](../Model/ApproveNftSpending.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

**2 credits per API call**

 Allow the NFT auction/marketplace smart contract to transfer the asset (NFT or Multi Token) that is listed for selling.

The auction/marketplace smart contract will transfer the asset to the buyer after the asset is purchased.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When allowing the NFT auction/marketplace smart contract to transfer the asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "approveNftSpending.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpending.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveNftSpendingCelo()`

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->approveNftSpendingCelo(
    \Tatum\Model\ApproveNftSpendingCelo $approve_nft_spending_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_celo** | [**\Tatum\Model\ApproveNftSpendingCelo**](../Model/ApproveNftSpendingCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

ApproveNftSpendingCelo operation

### Example

[✨ View "approveNftSpendingCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpendingCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveNftSpendingCeloKMS()`

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->approveNftSpendingCeloKMS(
    \Tatum\Model\ApproveNftSpendingCeloKMS $approve_nft_spending_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_celo_kms** | [**\Tatum\Model\ApproveNftSpendingCeloKMS**](../Model/ApproveNftSpendingCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

ApproveNftSpendingCeloKMS operation

### Example

[✨ View "approveNftSpendingCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpendingCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveNftSpendingKMS()`

> **POST** `/v3/blockchain/auction/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->approveNftSpendingKMS(
    \Tatum\Model\ApproveNftSpendingKMS $approve_nft_spending_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_kms** | [**\Tatum\Model\ApproveNftSpendingKMS**](../Model/ApproveNftSpendingKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

ApproveNftSpendingKMS operation

### Example

[✨ View "approveNftSpendingKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/approveNftSpendingKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuction()`

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bidOnAuction(
    \Tatum\Model\BidOnAuction $bid_on_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction** | [**\Tatum\Model\BidOnAuction**](../Model/BidOnAuction.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Bid for an asset at the NFT auction

**2 credits per API call**

 Bid for an asset listed on the NFT auction.

 You can buy the asset either for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.

 

<ul> <li>If you want to pay for the asset with the **native assets**, send the required amount of the assets with the API call.</li> <li>If you want to pay with the **fungible tokens**, <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the auction smart contract to access your tokens</a> before bidding for the asset. When you make the API call, the auction smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.</li> </ul>

 After you have purchased the asset, it is in a pending state until the auction is settled. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.

 For the complete information about how the bidding/purchase process at an auction works, see the API for creating an NFT auction.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **NOTE:** When making this API call, you may get the following message:

 `Although one or more Error Occurred [execution reverted] Contract Execution Completed`

 This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When bidding for an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "bidOnAuction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuctionCelo()`

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bidOnAuctionCelo(
    \Tatum\Model\BidOnAuctionCelo $bid_on_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_celo** | [**\Tatum\Model\BidOnAuctionCelo**](../Model/BidOnAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Bid for an asset at the NFT auction

BidOnAuctionCelo operation

### Example

[✨ View "bidOnAuctionCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuctionCeloKMS()`

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bidOnAuctionCeloKMS(
    \Tatum\Model\BidOnAuctionCeloKMS $bid_on_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_celo_kms** | [**\Tatum\Model\BidOnAuctionCeloKMS**](../Model/BidOnAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Bid for an asset at the NFT auction

BidOnAuctionCeloKMS operation

### Example

[✨ View "bidOnAuctionCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuctionKMS()`

> **POST** `/v3/blockchain/auction/bid`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bidOnAuctionKMS(
    \Tatum\Model\BidOnAuctionKMS $bid_on_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_kms** | [**\Tatum\Model\BidOnAuctionKMS**](../Model/BidOnAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Bid for an asset at the NFT auction

BidOnAuctionKMS operation

### Example

[✨ View "bidOnAuctionKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bidOnAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipient()`

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipient(
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

Update the recipient of the NFT auction fee

**2 credits per API call**

 Update the recipient of the NFT auction fee.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When updating the recipient of the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "bloAucUpdateFeeRecipient.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipient.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipientCelo()`

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipientCelo(
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

Update the recipient of the NFT auction fee

UpdateFeeRecipientCelo operation

### Example

[✨ View "bloAucUpdateFeeRecipientCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipientCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipientCeloKMS()`

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipientCeloKMS(
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

Update the recipient of the NFT auction fee

UpdateFeeRecipientCeloKMS operation

### Example

[✨ View "bloAucUpdateFeeRecipientCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipientCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipientKMS()`

> **PUT** `/v3/blockchain/auction/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->bloAucUpdateFeeRecipientKMS(
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

Update the recipient of the NFT auction fee

UpdateFeeRecipientKMS operation

### Example

[✨ View "bloAucUpdateFeeRecipientKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/bloAucUpdateFeeRecipientKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuction()`

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->cancelAuction(
    \Tatum\Model\CancelAuction $cancel_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction** | [**\Tatum\Model\CancelAuction**](../Model/CancelAuction.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset at the NFT auction

**2 credits per API call**

 Cancel the selling of an asset at the NFT auction.

 You can cancel the selling only if you are the seller of the asset or the auction operator. Once the selling is canceled, the asset is returned to the seller.

 You cannot cancel the selling if the asset has already been purchased.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **NOTE:** When making this API call, you may get the following message:

 `Although one or more Error Occurred [execution reverted] Contract Execution Completed`

 This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When cancelling the selling of an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "cancelAuction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuctionCelo()`

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->cancelAuctionCelo(
    \Tatum\Model\CancelAuctionCelo $cancel_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_celo** | [**\Tatum\Model\CancelAuctionCelo**](../Model/CancelAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset at the NFT auction

CancelAuctionCelo operation

### Example

[✨ View "cancelAuctionCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuctionCeloKMS()`

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->cancelAuctionCeloKMS(
    \Tatum\Model\CancelAuctionCeloKMS $cancel_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_celo_kms** | [**\Tatum\Model\CancelAuctionCeloKMS**](../Model/CancelAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset at the NFT auction

CancelAuctionCeloKMS operation

### Example

[✨ View "cancelAuctionCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuctionKMS()`

> **POST** `/v3/blockchain/auction/cancel`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->cancelAuctionKMS(
    \Tatum\Model\CancelAuctionKMS $cancel_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_kms** | [**\Tatum\Model\CancelAuctionKMS**](../Model/CancelAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Cancel the selling of an asset at the NFT auction

CancelAuctionKMS operation

### Example

[✨ View "cancelAuctionKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/cancelAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuction()`

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->createAuction(
    \Tatum\Model\CreateAuction $create_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction** | [**\Tatum\Model\CreateAuction**](../Model/CreateAuction.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Sell an asset at the NFT auction

**2 credits per API call**

 Create new auction on the auction contract. Before operation, seller must approve spending of the NFT token for the Auction contract using Approve NFT. After auction is created, auction contract transfers the asset to the auction smart contract. Only auction for existing NFTs can be created - seller must be owner of the NFT asset. This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When selling an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "createAuction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuctionCelo()`

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->createAuctionCelo(
    \Tatum\Model\CreateAuctionCelo $create_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_celo** | [**\Tatum\Model\CreateAuctionCelo**](../Model/CreateAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Sell an asset at the NFT auction

CreateAuctionCelo operation

### Example

[✨ View "createAuctionCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuctionCeloKMS()`

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->createAuctionCeloKMS(
    \Tatum\Model\CreateAuctionCeloKMS $create_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_celo_kms** | [**\Tatum\Model\CreateAuctionCeloKMS**](../Model/CreateAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Sell an asset at the NFT auction

CreateAuctionCeloKMS operation

### Example

[✨ View "createAuctionCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuctionKMS()`

> **POST** `/v3/blockchain/auction/sell`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->createAuctionKMS(
    \Tatum\Model\CreateAuctionKMS $create_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_kms** | [**\Tatum\Model\CreateAuctionKMS**](../Model/CreateAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Sell an asset at the NFT auction

CreateAuctionKMS operation

### Example

[✨ View "createAuctionKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/createAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuction()`

> **POST** `/v3/blockchain/auction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->generateAuction(
    \Tatum\Model\GenerateAuction $generate_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction** | [**\Tatum\Model\GenerateAuction**](../Model/GenerateAuction.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create an NFT auction

**2 credits per API call**

 Deploy new smart contract for NFT auction logic. Smart contract enables auction operator to create new auction for NFT (ERC-721/1155). Operator can set a fee in percentage, which will be paid on top of the price of the asset. can be offered for native asset - ETH, BSC, etc. - or any ERC20 token - this is configurable during auction creation. Before auction is created, seller must approve transfer of the NFT to the auction contract. Buyer will bid for the asset from the auction using native asset - send assets along the gid() smart contract call, or via ERC20 token. Buyer of the auction must perform approval for the smart contract to access ERC20 token, before the actual bid() method is called. Once there is higher bid then the actual one, the previous bidder's funds will be returned to him and new bidder will be the current winning one. When auction ends, anyone can settle the auction - NFT will be sent to the bidder, assets to the seller and fee to the operator.

 This operation deploys a smart contract on the blockchain. This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When creating an NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "generateAuction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuctionCelo()`

> **POST** `/v3/blockchain/auction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->generateAuctionCelo(
    \Tatum\Model\GenerateAuctionCelo $generate_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_celo** | [**\Tatum\Model\GenerateAuctionCelo**](../Model/GenerateAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create an NFT auction

GenerateAuctionCelo operation

### Example

[✨ View "generateAuctionCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuctionCeloKMS()`

> **POST** `/v3/blockchain/auction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->generateAuctionCeloKMS(
    \Tatum\Model\GenerateAuctionCeloKMS $generate_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_celo_kms** | [**\Tatum\Model\GenerateAuctionCeloKMS**](../Model/GenerateAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create an NFT auction

GenerateAuctionCeloKMS operation

### Example

[✨ View "generateAuctionCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuctionKMS()`

> **POST** `/v3/blockchain/auction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->generateAuctionKMS(
    \Tatum\Model\GenerateAuctionKMS $generate_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_kms** | [**\Tatum\Model\GenerateAuctionKMS**](../Model/GenerateAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create an NFT auction

GenerateAuctionKMS operation

### Example

[✨ View "generateAuctionKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/generateAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAuction()`

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/{id}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->getAuction(
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

[**\Tatum\Model\GetAuction200Response**](../Model/GetAuction200Response.md)

### Description

Get information about an auctioned asset at the NFT auction

**1 credit per API call**

 Get information about a specific auctioned asset at the NFT auction.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

### Example

[✨ View "getAuction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/getAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAuctionFee()`

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->getAuctionFee(
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

Get the NFT auction fee

**1 credit per API call**

 Get the NFT auction fee.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

### Example

[✨ View "getAuctionFee.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/getAuctionFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAuctionFeeRecipient()`

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/recipient`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->getAuctionFeeRecipient(
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

[**\Tatum\Model\GetAuctionFeeRecipient200Response**](../Model/GetAuctionFeeRecipient200Response.md)

### Description

Get the recipient of the NFT auction fee

**1 credit per API call**

 Get the recipient of the NFT auction fee.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

### Example

[✨ View "getAuctionFeeRecipient.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/getAuctionFeeRecipient.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuction()`

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->settleAuction(
    \Tatum\Model\SettleAuction $settle_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction** | [**\Tatum\Model\SettleAuction**](../Model/SettleAuction.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Settle an NFT auction

**2 credits per API call**

 Settle an auction once it has ended and there is a buyer of the asset at this auction. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.

Both seller and buyer can settle the auction.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **NOTE:** When making this API call, you may get the following message:

 `Although one or more Error Occurred [execution reverted] Contract Execution Completed`

 This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.

 **Signing a transaction**

 When settling the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "settleAuction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuctionCelo()`

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->settleAuctionCelo(
    \Tatum\Model\SettleAuctionCelo $settle_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_celo** | [**\Tatum\Model\SettleAuctionCelo**](../Model/SettleAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Settle an NFT auction

SettleAuctionCelo operation

### Example

[✨ View "settleAuctionCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuctionCeloKMS()`

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->settleAuctionCeloKMS(
    \Tatum\Model\SettleAuctionCeloKMS $settle_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_celo_kms** | [**\Tatum\Model\SettleAuctionCeloKMS**](../Model/SettleAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Settle an NFT auction

SettleAuctionCeloKMS operation

### Example

[✨ View "settleAuctionCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuctionKMS()`

> **POST** `/v3/blockchain/auction/settle`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->settleAuctionKMS(
    \Tatum\Model\SettleAuctionKMS $settle_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_kms** | [**\Tatum\Model\SettleAuctionKMS**](../Model/SettleAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Settle an NFT auction

SettleAuctionKMS operation

### Example

[✨ View "settleAuctionKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/settleAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuction()`

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->updateFeeAuction(
    \Tatum\Model\UpdateFeeAuction $update_fee_auction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction** | [**\Tatum\Model\UpdateFeeAuction**](../Model/UpdateFeeAuction.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT auction fee

**2 credits per API call**

 Update the NFT auction fee.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When updating the NFT auction fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "updateFeeAuction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuctionCelo()`

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->updateFeeAuctionCelo(
    \Tatum\Model\UpdateFeeAuctionCelo $update_fee_auction_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_celo** | [**\Tatum\Model\UpdateFeeAuctionCelo**](../Model/UpdateFeeAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT auction fee

UpdateFeeAuctionCelo operation

### Example

[✨ View "updateFeeAuctionCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuctionCeloKMS()`

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->updateFeeAuctionCeloKMS(
    \Tatum\Model\UpdateFeeAuctionCeloKMS $update_fee_auction_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_celo_kms** | [**\Tatum\Model\UpdateFeeAuctionCeloKMS**](../Model/UpdateFeeAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT auction fee

UpdateFeeAuctionCeloKMS operation

### Example

[✨ View "updateFeeAuctionCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuctionKMS()`

> **PUT** `/v3/blockchain/auction/fee`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->updateFeeAuctionKMS(
    \Tatum\Model\UpdateFeeAuctionKMS $update_fee_auction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_kms** | [**\Tatum\Model\UpdateFeeAuctionKMS**](../Model/UpdateFeeAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update the NFT auction fee

UpdateFeeAuctionKMS operation

### Example

[✨ View "updateFeeAuctionKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AuctionApi/updateFeeAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
