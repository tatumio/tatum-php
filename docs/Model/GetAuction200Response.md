# GetAuction200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount of NFTs to sold in this auction. Valid only for ERC1155 listings. | [optional]
**bidder** | **string** | Address of the highest buyer, if exists. | [optional]
**erc20_address** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset.. | [optional]
**is_erc721** | **bool** | If the listing is for ERC721 or ERC1155 token. | [optional]
**started_at** | **string** | Block height this auction started at. | [optional]
**ended_at** | **string** | Block height this auction ended at. | [optional]
**nft_address** | **string** | Address of the NFT smart contract. | [optional]
**ending_price** | **string** | Final auction price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. | [optional]
**seller** | **string** | Address of the seller. | [optional]
**highest_bid** | **string** | Current highest bid of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
