# Tatum/Api/AuctionApi

## References

[Auction API documentation](https://apidoc.tatum.io/tag/Auction/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **approveNftSpending()**](#approvenftspending) 

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **approveNftSpendingCelo()**](#approvenftspendingcelo) 

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **approveNftSpendingCeloKMS()**](#approvenftspendingcelokms) 

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **approveNftSpendingKMS()**](#approvenftspendingkms) 

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **bidOnAuction()**](#bidonauction) 

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bidOnAuctionCelo()**](#bidonauctioncelo) 

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bidOnAuctionCeloKMS()**](#bidonauctioncelokms) 

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bidOnAuctionKMS()**](#bidonauctionkms) 

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bloAucUpdateFeeRecipient()**](#bloaucupdatefeerecipient) 

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **bloAucUpdateFeeRecipientCelo()**](#bloaucupdatefeerecipientcelo) 

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **bloAucUpdateFeeRecipientCeloKMS()**](#bloaucupdatefeerecipientcelokms) 

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **bloAucUpdateFeeRecipientKMS()**](#bloaucupdatefeerecipientkms) 

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **cancelAuction()**](#cancelauction) 

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **cancelAuctionCelo()**](#cancelauctioncelo) 

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **cancelAuctionCeloKMS()**](#cancelauctioncelokms) 

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **cancelAuctionKMS()**](#cancelauctionkms) 

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **createAuction()**](#createauction) 

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **createAuctionCelo()**](#createauctioncelo) 

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **createAuctionCeloKMS()**](#createauctioncelokms) 

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **createAuctionKMS()**](#createauctionkms) 

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **generateAuction()**](#generateauction) 

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **generateAuctionCelo()**](#generateauctioncelo) 

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **generateAuctionCeloKMS()**](#generateauctioncelokms) 

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **generateAuctionKMS()**](#generateauctionkms) 

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **getAuction()**](#getauction) 

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/{id}`
> 
> Get information about an auctioned asset at the NFT auction

[🔹 **getAuctionFee()**](#getauctionfee) 

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/fee`
> 
> Get the NFT auction fee

[🔹 **getAuctionFeeRecipient()**](#getauctionfeerecipient) 

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/recipient`
> 
> Get the recipient of the NFT auction fee

[🔹 **settleAuction()**](#settleauction) 

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **settleAuctionCelo()**](#settleauctioncelo) 

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **settleAuctionCeloKMS()**](#settleauctioncelokms) 

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **settleAuctionKMS()**](#settleauctionkms) 

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **updateFeeAuction()**](#updatefeeauction) 

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee

[🔹 **updateFeeAuctionCelo()**](#updatefeeauctioncelo) 

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee

[🔹 **updateFeeAuctionCeloKMS()**](#updatefeeauctioncelokms) 

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee

[🔹 **updateFeeAuctionKMS()**](#updatefeeauctionkms) 

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee



## `approveNftSpending()`

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

<p><b>2 credits per API call</b></p> <p>Allow the NFT auction/marketplace smart contract to transfer the asset (NFT or Multi Token) that is listed for selling.<br/>The auction/marketplace smart contract will transfer the asset to the buyer after the asset is purchased.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When allowing the NFT auction/marketplace smart contract to transfer the asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "approveNftSpending.php"](../../examples/Api/AuctionApi/approveNftSpending.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveNftSpendingCelo()`

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

[✨ View "approveNftSpendingCelo.php"](../../examples/Api/AuctionApi/approveNftSpendingCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveNftSpendingCeloKMS()`

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

[✨ View "approveNftSpendingCeloKMS.php"](../../examples/Api/AuctionApi/approveNftSpendingCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveNftSpendingKMS()`

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

[✨ View "approveNftSpendingKMS.php"](../../examples/Api/AuctionApi/approveNftSpendingKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuction()`

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

<p><b>2 credits per API call</b></p> <p>Bid for an asset listed on the NFT auction.</p> <p>You can buy the asset either for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.</p> <ul> <li>If you want to pay for the asset with the <b>native assets</b>, send the required amount of the assets with the API call.</li> <li>If you want to pay with the <b>fungible tokens</b>, <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the auction smart contract to access your tokens</a> before bidding for the asset. When you make the API call, the auction smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.</li> </ul> <p>After you have purchased the asset, it is in a pending state until <a href="#operation/SettleAuction" target="_blank">the auction is settled</a>. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.</p> For the complete information about how the bidding/purchase process at an auction works, see the API for <a href="#operation/GenerateAuction" target="_blank">creating an NFT auction</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When bidding for an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "bidOnAuction.php"](../../examples/Api/AuctionApi/bidOnAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuctionCelo()`

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

[✨ View "bidOnAuctionCelo.php"](../../examples/Api/AuctionApi/bidOnAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuctionCeloKMS()`

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

[✨ View "bidOnAuctionCeloKMS.php"](../../examples/Api/AuctionApi/bidOnAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bidOnAuctionKMS()`

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

[✨ View "bidOnAuctionKMS.php"](../../examples/Api/AuctionApi/bidOnAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipient()`

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

<p><b>2 credits per API call</b></p> <p>Update the recipient of the NFT auction fee.<br/> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When updating the recipient of the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "bloAucUpdateFeeRecipient.php"](../../examples/Api/AuctionApi/bloAucUpdateFeeRecipient.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipientCelo()`

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

[✨ View "bloAucUpdateFeeRecipientCelo.php"](../../examples/Api/AuctionApi/bloAucUpdateFeeRecipientCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipientCeloKMS()`

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

[✨ View "bloAucUpdateFeeRecipientCeloKMS.php"](../../examples/Api/AuctionApi/bloAucUpdateFeeRecipientCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bloAucUpdateFeeRecipientKMS()`

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

[✨ View "bloAucUpdateFeeRecipientKMS.php"](../../examples/Api/AuctionApi/bloAucUpdateFeeRecipientKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuction()`

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

<p><b>2 credits per API call</b></p> <p>Cancel the selling of an asset at the NFT auction.</p> <p>You can cancel the selling only if you are the seller of the asset or the auction operator. Once the selling is canceled, the asset is returned to the seller.</p> <p>You cannot cancel the selling if the asset has already been purchased.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When cancelling the selling of an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "cancelAuction.php"](../../examples/Api/AuctionApi/cancelAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuctionCelo()`

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

[✨ View "cancelAuctionCelo.php"](../../examples/Api/AuctionApi/cancelAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuctionCeloKMS()`

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

[✨ View "cancelAuctionCeloKMS.php"](../../examples/Api/AuctionApi/cancelAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelAuctionKMS()`

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

[✨ View "cancelAuctionKMS.php"](../../examples/Api/AuctionApi/cancelAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuction()`

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

<p><b>2 credits per API call</b></p> <p>Create new auction on the auction contract. Before operation, seller must approve spending of the NFT token for the Auction contract using <a href="#operation/ApproveNftAuctionSpending">Approve NFT</a>. After auction is created, auction contract transfers the asset to the auction smart contract. Only auction for existing NFTs can be created - seller must be owner of the NFT asset. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When selling an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "createAuction.php"](../../examples/Api/AuctionApi/createAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuctionCelo()`

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

[✨ View "createAuctionCelo.php"](../../examples/Api/AuctionApi/createAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuctionCeloKMS()`

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

[✨ View "createAuctionCeloKMS.php"](../../examples/Api/AuctionApi/createAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAuctionKMS()`

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

[✨ View "createAuctionKMS.php"](../../examples/Api/AuctionApi/createAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuction()`

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

<p><b>2 credits per API call</b></p> <p>Deploy new smart contract for NFT auction logic. Smart contract enables auction operator to create new auction for NFT (ERC-721/1155). Operator can set a fee in percentage, which will be paid on top of the price of the asset. can be offered for native asset - ETH, BSC, etc. - or any ERC20 token - this is configurable during auction creation. Before auction is created, seller must approve transfer of the NFT to the auction contract. Buyer will bid for the asset from the auction using native asset - send assets along the gid() smart contract call, or via ERC20 token. Buyer of the auction must perform approval for the smart contract to access ERC20 token, before the actual bid() method is called. Once there is higher bid then the actual one, the previous bidder's funds will be returned to him and new bidder will be the current winning one. When auction ends, anyone can settle the auction - NFT will be sent to the bidder, assets to the seller and fee to the operator.<br/> This operation deploys a smart contract on the blockchain. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When creating an NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "generateAuction.php"](../../examples/Api/AuctionApi/generateAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuctionCelo()`

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

[✨ View "generateAuctionCelo.php"](../../examples/Api/AuctionApi/generateAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuctionCeloKMS()`

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

[✨ View "generateAuctionCeloKMS.php"](../../examples/Api/AuctionApi/generateAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateAuctionKMS()`

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

[✨ View "generateAuctionKMS.php"](../../examples/Api/AuctionApi/generateAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAuction()`

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

<p><b>1 credit per API call</b></p> <p>Get information about a specific auctioned asset at the NFT auction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

### Example

[✨ View "getAuction.php"](../../examples/Api/AuctionApi/getAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAuctionFee()`

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

<p><b>1 credit per API call</b></p> <p>Get the NFT auction fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

### Example

[✨ View "getAuctionFee.php"](../../examples/Api/AuctionApi/getAuctionFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAuctionFeeRecipient()`

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

<p><b>1 credit per API call</b></p> <p>Get the recipient of the NFT auction fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

### Example

[✨ View "getAuctionFeeRecipient.php"](../../examples/Api/AuctionApi/getAuctionFeeRecipient.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuction()`

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

<p><b>2 credits per API call</b></p> <p>Settle an auction once it has ended and there is a buyer of the asset at this auction. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.<br/>Both seller and buyer can settle the auction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When settling the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "settleAuction.php"](../../examples/Api/AuctionApi/settleAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuctionCelo()`

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

[✨ View "settleAuctionCelo.php"](../../examples/Api/AuctionApi/settleAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuctionCeloKMS()`

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

[✨ View "settleAuctionCeloKMS.php"](../../examples/Api/AuctionApi/settleAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `settleAuctionKMS()`

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

[✨ View "settleAuctionKMS.php"](../../examples/Api/AuctionApi/settleAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuction()`

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

<p><b>2 credits per API call</b></p> <p>Update the NFT auction fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When updating the NFT auction fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "updateFeeAuction.php"](../../examples/Api/AuctionApi/updateFeeAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuctionCelo()`

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

[✨ View "updateFeeAuctionCelo.php"](../../examples/Api/AuctionApi/updateFeeAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuctionCeloKMS()`

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

[✨ View "updateFeeAuctionCeloKMS.php"](../../examples/Api/AuctionApi/updateFeeAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeAuctionKMS()`

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

[✨ View "updateFeeAuctionKMS.php"](../../examples/Api/AuctionApi/updateFeeAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
