---
title: EvmListingData
parent: Model
layout: page
---

# EvmListingData

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of NFTs to sold in this listing. Valid only for ERC1155 listings. <br>Example: `1` | [optional]
**getBuyer()** | **string** | Address of the buyer, if exists. <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getErc20Address()** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155 <br>Example: `true` | [optional]
**getListingId()** | **string** | ID of the listing. <br>Example: `12345` | [optional]
**getNftAddress()** | **string** | Address of the NFT smart contract. <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getPrice()** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. <br>Example: `1.234` | [optional]
**getSeller()** | **string** | Address of the seller. <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getState()** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled <br>Example: `1` | [optional]

