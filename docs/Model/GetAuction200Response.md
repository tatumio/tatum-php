---
title: GetAuction200Response
parent: Model
layout: page
---

# GetAuction200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of NFTs to sold in this auction. Valid only for ERC1155 listings. <br>Example: `1` | [optional]
**getBidder()** | **string** | Address of the highest buyer, if exists. <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getErc20Address()** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset.. <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getIsErc721()** | **bool** | If the listing is for ERC721 or ERC1155 token. <br>Example: `true` | [optional]
**getStartedAt()** | **string** | Block height this auction started at. <br>Example: `12345` | [optional]
**getEndedAt()** | **string** | Block height this auction ended at. <br>Example: `12349` | [optional]
**getNftAddress()** | **string** | Address of the NFT smart contract. <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getEndingPrice()** | **string** | Final auction price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. <br>Example: `1.234` | [optional]
**getSeller()** | **string** | Address of the seller. <br>Example: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` | [optional]
**getHighestBid()** | **string** | Current highest bid of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. <br>Example: `1.234` | [optional]

