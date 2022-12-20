# EvmListingData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount of NFTs to sold in this listing. Valid only for ERC1155 listings. | [optional]
**buyer** | **string** | Address of the buyer, if exists. | [optional]
**erc20_address** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset | [optional]
**is_erc721** | **bool** | True if asset is NFT of type ERC721, false if ERC1155 | [optional]
**listing_id** | **string** | ID of the listing. | [optional]
**nft_address** | **string** | Address of the NFT smart contract. | [optional]
**price** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. | [optional]
**seller** | **string** | Address of the seller. | [optional]
**state** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled | [optional]

[[Back to Index]](../index.md)
