---
title: EvmListingData
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of NFTs to sold in this listing. Valid only for ERC1155 listings. | [optional]
**getBuyer()** | **string** | Address of the buyer, if exists. | [optional]
**getErc20Address()** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset | [optional]
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155 | [optional]
**getListingId()** | **string** | ID of the listing. | [optional]
**getNftAddress()** | **string** | Address of the NFT smart contract. | [optional]
**getPrice()** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. | [optional]
**getSeller()** | **string** | Address of the seller. | [optional]
**getState()** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled | [optional]

