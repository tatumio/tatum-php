# SolanaListingData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount of NFTs to sold in this listing. |
**buyer** | **string** | Address of the buyer, if exists. | [optional]
**listing_id** | **string** | ID of the listing |
**nft** | [**\Tatum\Model\SolanaListingDataNft**](SolanaListingDataNft.md) |  |
**price** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. |
**seller** | **string** | Address of the seller. |
**state** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled |
**created_at** | **float** | Timestamp when this listing was created |
**purchased_at** | **float** | Timestamp when this listing was purchased | [optional]
**cancelled_at** | **float** | Timestamp when this listing was cancelled | [optional]

[[Back to Index]](../index.md)
