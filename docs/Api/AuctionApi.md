# Tatum/Api/AuctionApi

* Auction [documentation](https://apidoc.tatum.io/tag/Auction/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**blockchainAuctionApproveNftSpending()**](#blockchainauctionapprovenftspending) | **POST** `/v3/blockchain/auction/approve` | Allow the NFT auction or marketplace to transfer an asset
[**blockchainAuctionApproveNftSpendingCelo()**](#blockchainauctionapprovenftspendingcelo) | **POST** `/v3/blockchain/auction/approve` | Allow the NFT auction or marketplace to transfer an asset
[**blockchainAuctionApproveNftSpendingCeloKMS()**](#blockchainauctionapprovenftspendingcelokms) | **POST** `/v3/blockchain/auction/approve` | Allow the NFT auction or marketplace to transfer an asset
[**blockchainAuctionApproveNftSpendingKMS()**](#blockchainauctionapprovenftspendingkms) | **POST** `/v3/blockchain/auction/approve` | Allow the NFT auction or marketplace to transfer an asset
[**blockchainAuctionBidOnAuction()**](#blockchainauctionbidonauction) | **POST** `/v3/blockchain/auction/bid` | Bid for an asset at the NFT auction
[**blockchainAuctionBidOnAuctionCelo()**](#blockchainauctionbidonauctioncelo) | **POST** `/v3/blockchain/auction/bid` | Bid for an asset at the NFT auction
[**blockchainAuctionBidOnAuctionCeloKMS()**](#blockchainauctionbidonauctioncelokms) | **POST** `/v3/blockchain/auction/bid` | Bid for an asset at the NFT auction
[**blockchainAuctionBidOnAuctionKMS()**](#blockchainauctionbidonauctionkms) | **POST** `/v3/blockchain/auction/bid` | Bid for an asset at the NFT auction
[**blockchainAuctionCancelAuction()**](#blockchainauctioncancelauction) | **POST** `/v3/blockchain/auction/cancel` | Cancel the selling of an asset at the NFT auction
[**blockchainAuctionCancelAuctionCelo()**](#blockchainauctioncancelauctioncelo) | **POST** `/v3/blockchain/auction/cancel` | Cancel the selling of an asset at the NFT auction
[**blockchainAuctionCancelAuctionCeloKMS()**](#blockchainauctioncancelauctioncelokms) | **POST** `/v3/blockchain/auction/cancel` | Cancel the selling of an asset at the NFT auction
[**blockchainAuctionCancelAuctionKMS()**](#blockchainauctioncancelauctionkms) | **POST** `/v3/blockchain/auction/cancel` | Cancel the selling of an asset at the NFT auction
[**blockchainAuctionFeeUpdateFeeAuctionCeloKMSUpdate()**](#blockchainauctionfeeupdatefeeauctioncelokmsupdate) | **PUT** `/v3/blockchain/auction/fee` | Update the NFT auction fee
[**blockchainAuctionFeeUpdateFeeAuctionCeloUpdate()**](#blockchainauctionfeeupdatefeeauctionceloupdate) | **PUT** `/v3/blockchain/auction/fee` | Update the NFT auction fee
[**blockchainAuctionFeeUpdateFeeAuctionKMSUpdate()**](#blockchainauctionfeeupdatefeeauctionkmsupdate) | **PUT** `/v3/blockchain/auction/fee` | Update the NFT auction fee
[**blockchainAuctionFeeUpdateFeeAuctionUpdate()**](#blockchainauctionfeeupdatefeeauctionupdate) | **PUT** `/v3/blockchain/auction/fee` | Update the NFT auction fee
[**blockchainAuctionGenerateAuction()**](#blockchainauctiongenerateauction) | **POST** `/v3/blockchain/auction` | Create an NFT auction
[**blockchainAuctionGenerateAuctionCelo()**](#blockchainauctiongenerateauctioncelo) | **POST** `/v3/blockchain/auction` | Create an NFT auction
[**blockchainAuctionGenerateAuctionCeloKMS()**](#blockchainauctiongenerateauctioncelokms) | **POST** `/v3/blockchain/auction` | Create an NFT auction
[**blockchainAuctionGenerateAuctionKMS()**](#blockchainauctiongenerateauctionkms) | **POST** `/v3/blockchain/auction` | Create an NFT auction
[**blockchainAuctionRecipientUpdateFeeRecipientCeloKMSUpdate()**](#blockchainauctionrecipientupdatefeerecipientcelokmsupdate) | **PUT** `/v3/blockchain/auction/recipient` | Update the recipient of the NFT auction fee
[**blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate()**](#blockchainauctionrecipientupdatefeerecipientceloupdate) | **PUT** `/v3/blockchain/auction/recipient` | Update the recipient of the NFT auction fee
[**blockchainAuctionRecipientUpdateFeeRecipientKMSUpdate()**](#blockchainauctionrecipientupdatefeerecipientkmsupdate) | **PUT** `/v3/blockchain/auction/recipient` | Update the recipient of the NFT auction fee
[**blockchainAuctionRecipientUpdateFeeRecipientUpdate()**](#blockchainauctionrecipientupdatefeerecipientupdate) | **PUT** `/v3/blockchain/auction/recipient` | Update the recipient of the NFT auction fee
[**blockchainAuctionSellCreateAuction()**](#blockchainauctionsellcreateauction) | **POST** `/v3/blockchain/auction/sell` | Sell an asset at the NFT auction
[**blockchainAuctionSellCreateAuctionCelo()**](#blockchainauctionsellcreateauctioncelo) | **POST** `/v3/blockchain/auction/sell` | Sell an asset at the NFT auction
[**blockchainAuctionSellCreateAuctionCeloKMS()**](#blockchainauctionsellcreateauctioncelokms) | **POST** `/v3/blockchain/auction/sell` | Sell an asset at the NFT auction
[**blockchainAuctionSellCreateAuctionKMS()**](#blockchainauctionsellcreateauctionkms) | **POST** `/v3/blockchain/auction/sell` | Sell an asset at the NFT auction
[**blockchainAuctionSettleAuction()**](#blockchainauctionsettleauction) | **POST** `/v3/blockchain/auction/settle` | Settle an NFT auction
[**blockchainAuctionSettleAuctionCelo()**](#blockchainauctionsettleauctioncelo) | **POST** `/v3/blockchain/auction/settle` | Settle an NFT auction
[**blockchainAuctionSettleAuctionCeloKMS()**](#blockchainauctionsettleauctioncelokms) | **POST** `/v3/blockchain/auction/settle` | Settle an NFT auction
[**blockchainAuctionSettleAuctionKMS()**](#blockchainauctionsettleauctionkms) | **POST** `/v3/blockchain/auction/settle` | Settle an NFT auction
[**getAuction()**](#getauction) | **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/{id}` | Get information about an auctioned asset at the NFT auction
[**getAuctionFee()**](#getauctionfee) | **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/fee` | Get the NFT auction fee
[**getAuctionFeeRecipient()**](#getauctionfeerecipient) | **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/recipient` | Get the recipient of the NFT auction fee


## `blockchainAuctionApproveNftSpending()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionApproveNftSpending(
    \Tatum\Model\ApproveNftSpending $approve_nft_spending
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending** | [**\Tatum\Model\ApproveNftSpending**](../Model/ApproveNftSpending.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

<p><b>2 credits per API call</b></p> <p>Allow the NFT auction/marketplace smart contract to transfer the asset (NFT or Multi Token) that is listed for selling.<br/>The auction/marketplace smart contract will transfer the asset to the buyer after the asset is purchased.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When allowing the NFT auction/marketplace smart contract to transfer the asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionApproveNftSpending.php"](../../examples/Api/AuctionApi/blockchainAuctionApproveNftSpending.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionApproveNftSpendingCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionApproveNftSpendingCelo(
    \Tatum\Model\ApproveNftSpendingCelo $approve_nft_spending_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_celo** | [**\Tatum\Model\ApproveNftSpendingCelo**](../Model/ApproveNftSpendingCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

ApproveNftSpendingCelo operation

### Example

[✨ View "blockchainAuctionApproveNftSpendingCelo.php"](../../examples/Api/AuctionApi/blockchainAuctionApproveNftSpendingCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionApproveNftSpendingCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionApproveNftSpendingCeloKMS(
    \Tatum\Model\ApproveNftSpendingCeloKMS $approve_nft_spending_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_celo_kms** | [**\Tatum\Model\ApproveNftSpendingCeloKMS**](../Model/ApproveNftSpendingCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

ApproveNftSpendingCeloKMS operation

### Example

[✨ View "blockchainAuctionApproveNftSpendingCeloKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionApproveNftSpendingCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionApproveNftSpendingKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionApproveNftSpendingKMS(
    \Tatum\Model\ApproveNftSpendingKMS $approve_nft_spending_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_spending_kms** | [**\Tatum\Model\ApproveNftSpendingKMS**](../Model/ApproveNftSpendingKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Allow the NFT auction or marketplace to transfer an asset

ApproveNftSpendingKMS operation

### Example

[✨ View "blockchainAuctionApproveNftSpendingKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionApproveNftSpendingKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionBidOnAuction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionBidOnAuction(
    \Tatum\Model\BidOnAuction $bid_on_auction
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction** | [**\Tatum\Model\BidOnAuction**](../Model/BidOnAuction.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Bid for an asset at the NFT auction

<p><b>2 credits per API call</b></p> <p>Bid for an asset listed on the NFT auction.</p> <p>You can buy the asset either for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.</p> <ul> <li>If you want to pay for the asset with the <b>native assets</b>, send the required amount of the assets with the API call.</li> <li>If you want to pay with the <b>fungible tokens</b>, <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the auction smart contract to access your tokens</a> before bidding for the asset. When you make the API call, the auction smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.</li> </ul> <p>After you have purchased the asset, it is in a pending state until <a href="#operation/SettleAuction" target="_blank">the auction is settled</a>. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.</p> For the complete information about how the bidding/purchase process at an auction works, see the API for <a href="#operation/GenerateAuction" target="_blank">creating an NFT auction</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When bidding for an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionBidOnAuction.php"](../../examples/Api/AuctionApi/blockchainAuctionBidOnAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionBidOnAuctionCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionBidOnAuctionCelo(
    \Tatum\Model\BidOnAuctionCelo $bid_on_auction_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_celo** | [**\Tatum\Model\BidOnAuctionCelo**](../Model/BidOnAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Bid for an asset at the NFT auction

BidOnAuctionCelo operation

### Example

[✨ View "blockchainAuctionBidOnAuctionCelo.php"](../../examples/Api/AuctionApi/blockchainAuctionBidOnAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionBidOnAuctionCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionBidOnAuctionCeloKMS(
    \Tatum\Model\BidOnAuctionCeloKMS $bid_on_auction_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_celo_kms** | [**\Tatum\Model\BidOnAuctionCeloKMS**](../Model/BidOnAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Bid for an asset at the NFT auction

BidOnAuctionCeloKMS operation

### Example

[✨ View "blockchainAuctionBidOnAuctionCeloKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionBidOnAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionBidOnAuctionKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionBidOnAuctionKMS(
    \Tatum\Model\BidOnAuctionKMS $bid_on_auction_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_kms** | [**\Tatum\Model\BidOnAuctionKMS**](../Model/BidOnAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Bid for an asset at the NFT auction

BidOnAuctionKMS operation

### Example

[✨ View "blockchainAuctionBidOnAuctionKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionBidOnAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionCancelAuction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionCancelAuction(
    \Tatum\Model\CancelAuction $cancel_auction
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction** | [**\Tatum\Model\CancelAuction**](../Model/CancelAuction.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Cancel the selling of an asset at the NFT auction

<p><b>2 credits per API call</b></p> <p>Cancel the selling of an asset at the NFT auction.</p> <p>You can cancel the selling only if you are the seller of the asset or the auction operator. Once the selling is canceled, the asset is returned to the seller.</p> <p>You cannot cancel the selling if the asset has already been purchased.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When cancelling the selling of an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionCancelAuction.php"](../../examples/Api/AuctionApi/blockchainAuctionCancelAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionCancelAuctionCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionCancelAuctionCelo(
    \Tatum\Model\CancelAuctionCelo $cancel_auction_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_celo** | [**\Tatum\Model\CancelAuctionCelo**](../Model/CancelAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Cancel the selling of an asset at the NFT auction

CancelAuctionCelo operation

### Example

[✨ View "blockchainAuctionCancelAuctionCelo.php"](../../examples/Api/AuctionApi/blockchainAuctionCancelAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionCancelAuctionCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionCancelAuctionCeloKMS(
    \Tatum\Model\CancelAuctionCeloKMS $cancel_auction_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_celo_kms** | [**\Tatum\Model\CancelAuctionCeloKMS**](../Model/CancelAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Cancel the selling of an asset at the NFT auction

CancelAuctionCeloKMS operation

### Example

[✨ View "blockchainAuctionCancelAuctionCeloKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionCancelAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionCancelAuctionKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionCancelAuctionKMS(
    \Tatum\Model\CancelAuctionKMS $cancel_auction_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_kms** | [**\Tatum\Model\CancelAuctionKMS**](../Model/CancelAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Cancel the selling of an asset at the NFT auction

CancelAuctionKMS operation

### Example

[✨ View "blockchainAuctionCancelAuctionKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionCancelAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionFeeUpdateFeeAuctionCeloKMSUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionFeeUpdateFeeAuctionCeloKMSUpdate(
    \Tatum\Model\UpdateFeeAuctionCeloKMS $update_fee_auction_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_celo_kms** | [**\Tatum\Model\UpdateFeeAuctionCeloKMS**](../Model/UpdateFeeAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the NFT auction fee

UpdateFeeAuctionCeloKMS operation

### Example

[✨ View "blockchainAuctionFeeUpdateFeeAuctionCeloKMSUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionFeeUpdateFeeAuctionCeloKMSUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionFeeUpdateFeeAuctionCeloUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionFeeUpdateFeeAuctionCeloUpdate(
    \Tatum\Model\UpdateFeeAuctionCelo $update_fee_auction_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_celo** | [**\Tatum\Model\UpdateFeeAuctionCelo**](../Model/UpdateFeeAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the NFT auction fee

UpdateFeeAuctionCelo operation

### Example

[✨ View "blockchainAuctionFeeUpdateFeeAuctionCeloUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionFeeUpdateFeeAuctionCeloUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionFeeUpdateFeeAuctionKMSUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionFeeUpdateFeeAuctionKMSUpdate(
    \Tatum\Model\UpdateFeeAuctionKMS $update_fee_auction_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction_kms** | [**\Tatum\Model\UpdateFeeAuctionKMS**](../Model/UpdateFeeAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the NFT auction fee

UpdateFeeAuctionKMS operation

### Example

[✨ View "blockchainAuctionFeeUpdateFeeAuctionKMSUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionFeeUpdateFeeAuctionKMSUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionFeeUpdateFeeAuctionUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionFeeUpdateFeeAuctionUpdate(
    \Tatum\Model\UpdateFeeAuction $update_fee_auction
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_auction** | [**\Tatum\Model\UpdateFeeAuction**](../Model/UpdateFeeAuction.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the NFT auction fee

<p><b>2 credits per API call</b></p> <p>Update the NFT auction fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When updating the NFT auction fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionFeeUpdateFeeAuctionUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionFeeUpdateFeeAuctionUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionGenerateAuction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionGenerateAuction(
    \Tatum\Model\GenerateAuction $generate_auction
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction** | [**\Tatum\Model\GenerateAuction**](../Model/GenerateAuction.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create an NFT auction

<p><b>2 credits per API call</b></p> <p>Deploy new smart contract for NFT auction logic. Smart contract enables auction operator to create new auction for NFT (ERC-721/1155). Operator can set a fee in percentage, which will be paid on top of the price of the asset. can be offered for native asset - ETH, BSC, etc. - or any ERC20 token - this is configurable during auction creation. Before auction is created, seller must approve transfer of the NFT to the auction contract. Buyer will bid for the asset from the auction using native asset - send assets along the gid() smart contract call, or via ERC20 token. Buyer of the auction must perform approval for the smart contract to access ERC20 token, before the actual bid() method is called. Once there is higher bid then the actual one, the previous bidder's funds will be returned to him and new bidder will be the current winning one. When auction ends, anyone can settle the auction - NFT will be sent to the bidder, assets to the seller and fee to the operator.<br/> This operation deploys a smart contract on the blockchain. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When creating an NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionGenerateAuction.php"](../../examples/Api/AuctionApi/blockchainAuctionGenerateAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionGenerateAuctionCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionGenerateAuctionCelo(
    \Tatum\Model\GenerateAuctionCelo $generate_auction_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_celo** | [**\Tatum\Model\GenerateAuctionCelo**](../Model/GenerateAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create an NFT auction

GenerateAuctionCelo operation

### Example

[✨ View "blockchainAuctionGenerateAuctionCelo.php"](../../examples/Api/AuctionApi/blockchainAuctionGenerateAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionGenerateAuctionCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionGenerateAuctionCeloKMS(
    \Tatum\Model\GenerateAuctionCeloKMS $generate_auction_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_celo_kms** | [**\Tatum\Model\GenerateAuctionCeloKMS**](../Model/GenerateAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create an NFT auction

GenerateAuctionCeloKMS operation

### Example

[✨ View "blockchainAuctionGenerateAuctionCeloKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionGenerateAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionGenerateAuctionKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionGenerateAuctionKMS(
    \Tatum\Model\GenerateAuctionKMS $generate_auction_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_kms** | [**\Tatum\Model\GenerateAuctionKMS**](../Model/GenerateAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create an NFT auction

GenerateAuctionKMS operation

### Example

[✨ View "blockchainAuctionGenerateAuctionKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionGenerateAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionRecipientUpdateFeeRecipientCeloKMSUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionRecipientUpdateFeeRecipientCeloKMSUpdate(
    \Tatum\Model\UpdateFeeRecipientCeloKMS $update_fee_recipient_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_celo_kms** | [**\Tatum\Model\UpdateFeeRecipientCeloKMS**](../Model/UpdateFeeRecipientCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the recipient of the NFT auction fee

UpdateFeeRecipientCeloKMS operation

### Example

[✨ View "blockchainAuctionRecipientUpdateFeeRecipientCeloKMSUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionRecipientUpdateFeeRecipientCeloKMSUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate(
    \Tatum\Model\UpdateFeeRecipientCelo $update_fee_recipient_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_celo** | [**\Tatum\Model\UpdateFeeRecipientCelo**](../Model/UpdateFeeRecipientCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the recipient of the NFT auction fee

UpdateFeeRecipientCelo operation

### Example

[✨ View "blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionRecipientUpdateFeeRecipientKMSUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionRecipientUpdateFeeRecipientKMSUpdate(
    \Tatum\Model\UpdateFeeRecipientKMS $update_fee_recipient_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_kms** | [**\Tatum\Model\UpdateFeeRecipientKMS**](../Model/UpdateFeeRecipientKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the recipient of the NFT auction fee

UpdateFeeRecipientKMS operation

### Example

[✨ View "blockchainAuctionRecipientUpdateFeeRecipientKMSUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionRecipientUpdateFeeRecipientKMSUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionRecipientUpdateFeeRecipientUpdate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionRecipientUpdateFeeRecipientUpdate(
    \Tatum\Model\UpdateFeeRecipient $update_fee_recipient
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient** | [**\Tatum\Model\UpdateFeeRecipient**](../Model/UpdateFeeRecipient.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update the recipient of the NFT auction fee

<p><b>2 credits per API call</b></p> <p>Update the recipient of the NFT auction fee.<br/> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When updating the recipient of the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionRecipientUpdateFeeRecipientUpdate.php"](../../examples/Api/AuctionApi/blockchainAuctionRecipientUpdateFeeRecipientUpdate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSellCreateAuction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSellCreateAuction(
    \Tatum\Model\CreateAuction $create_auction
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction** | [**\Tatum\Model\CreateAuction**](../Model/CreateAuction.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Sell an asset at the NFT auction

<p><b>2 credits per API call</b></p> <p>Create new auction on the auction contract. Before operation, seller must approve spending of the NFT token for the Auction contract using <a href="#operation/ApproveNftAuctionSpending">Approve NFT</a>. After auction is created, auction contract transfers the asset to the auction smart contract. Only auction for existing NFTs can be created - seller must be owner of the NFT asset. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When selling an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionSellCreateAuction.php"](../../examples/Api/AuctionApi/blockchainAuctionSellCreateAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSellCreateAuctionCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSellCreateAuctionCelo(
    \Tatum\Model\CreateAuctionCelo $create_auction_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_celo** | [**\Tatum\Model\CreateAuctionCelo**](../Model/CreateAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Sell an asset at the NFT auction

CreateAuctionCelo operation

### Example

[✨ View "blockchainAuctionSellCreateAuctionCelo.php"](../../examples/Api/AuctionApi/blockchainAuctionSellCreateAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSellCreateAuctionCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSellCreateAuctionCeloKMS(
    \Tatum\Model\CreateAuctionCeloKMS $create_auction_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_celo_kms** | [**\Tatum\Model\CreateAuctionCeloKMS**](../Model/CreateAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Sell an asset at the NFT auction

CreateAuctionCeloKMS operation

### Example

[✨ View "blockchainAuctionSellCreateAuctionCeloKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionSellCreateAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSellCreateAuctionKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSellCreateAuctionKMS(
    \Tatum\Model\CreateAuctionKMS $create_auction_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_kms** | [**\Tatum\Model\CreateAuctionKMS**](../Model/CreateAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Sell an asset at the NFT auction

CreateAuctionKMS operation

### Example

[✨ View "blockchainAuctionSellCreateAuctionKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionSellCreateAuctionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSettleAuction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSettleAuction(
    \Tatum\Model\SettleAuction $settle_auction
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction** | [**\Tatum\Model\SettleAuction**](../Model/SettleAuction.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Settle an NFT auction

<p><b>2 credits per API call</b></p> <p>Settle an auction once it has ended and there is a buyer of the asset at this auction. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.<br/>Both seller and buyer can settle the auction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When settling the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainAuctionSettleAuction.php"](../../examples/Api/AuctionApi/blockchainAuctionSettleAuction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSettleAuctionCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSettleAuctionCelo(
    \Tatum\Model\SettleAuctionCelo $settle_auction_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_celo** | [**\Tatum\Model\SettleAuctionCelo**](../Model/SettleAuctionCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Settle an NFT auction

SettleAuctionCelo operation

### Example

[✨ View "blockchainAuctionSettleAuctionCelo.php"](../../examples/Api/AuctionApi/blockchainAuctionSettleAuctionCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSettleAuctionCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSettleAuctionCeloKMS(
    \Tatum\Model\SettleAuctionCeloKMS $settle_auction_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_celo_kms** | [**\Tatum\Model\SettleAuctionCeloKMS**](../Model/SettleAuctionCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Settle an NFT auction

SettleAuctionCeloKMS operation

### Example

[✨ View "blockchainAuctionSettleAuctionCeloKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionSettleAuctionCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainAuctionSettleAuctionKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->auction()->blockchainAuctionSettleAuctionKMS(
    \Tatum\Model\SettleAuctionKMS $settle_auction_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$settle_auction_kms** | [**\Tatum\Model\SettleAuctionKMS**](../Model/SettleAuctionKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Settle an NFT auction

SettleAuctionKMS operation

### Example

[✨ View "blockchainAuctionSettleAuctionKMS.php"](../../examples/Api/AuctionApi/blockchainAuctionSettleAuctionKMS.php)

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
