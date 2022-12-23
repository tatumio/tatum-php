# GetAuction200Response

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of NFTs to sold in this auction. Valid only for ERC1155 listings. | [optional]
**getBidder()** | **string** | Address of the highest buyer, if exists. | [optional]
**getErc20Address()** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset.. | [optional]
**getIsErc721()** | **bool** | If the listing is for ERC721 or ERC1155 token. | [optional]
**getStartedAt()** | **string** | Block height this auction started at. | [optional]
**getEndedAt()** | **string** | Block height this auction ended at. | [optional]
**getNftAddress()** | **string** | Address of the NFT smart contract. | [optional]
**getEndingPrice()** | **string** | Final auction price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. | [optional]
**getSeller()** | **string** | Address of the seller. | [optional]
**getHighestBid()** | **string** | Current highest bid of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. | [optional]

[[Back to Index]](../index.md)
