# SolanaListingData

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of NFTs to sold in this listing. |
**getBuyer()** | **string** | Address of the buyer, if exists. | [optional]
**getListingId()** | **string** | ID of the listing |
**getNft()** | [**\Tatum\Model\SolanaListingDataNft**](SolanaListingDataNft.md) |  |
**getPrice()** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. |
**getSeller()** | **string** | Address of the seller. |
**getState()** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled |
**getCreatedAt()** | **float** | Timestamp when this listing was created |
**getPurchasedAt()** | **float** | Timestamp when this listing was purchased | [optional]
**getCancelledAt()** | **float** | Timestamp when this listing was cancelled | [optional]

[[Back to Index]](../index.md)
