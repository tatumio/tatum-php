# GetMarketplaceListing200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount of NFTs to sold in this listing. |
**buyer** | **string** | Address of the buyer, if exists. | [optional]
**erc20_address** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset | [optional]
**is_erc721** | **bool** | True if asset is NFT of type ERC721, false if ERC1155 | [optional]
**listing_id** | **string** | ID of the listing |
**nft_address** | **string** | Address of the NFT smart contract. | [optional]
**price** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. |
**seller** | **string** | Address of the seller. |
**state** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled |
**nft** | [**\Tatum\Model\SolanaListingDataNft**](SolanaListingDataNft.md) |  |
**created_at** | **float** | Timestamp when this listing was created |
**purchased_at** | **float** | Timestamp when this listing was purchased | [optional]
**cancelled_at** | **float** | Timestamp when this listing was cancelled | [optional]

[[Back to API list]](../../README.md#api-endpoints)
