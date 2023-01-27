---
title: GetMarketplaceListing200Response
parent: Model
layout: page
---

# GetMarketplaceListing200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of NFTs to sold in this listing. | ex.: `1`
**getBuyer()** | **string** | Address of the buyer, if exists. | ex.: `9qhKAgVRebMnjVM4AHdHcseYQG47Mns3U8e7dRz24kg5` [optional]
**getErc20Address()** | **string** | Address of the ERC20 token smart contract, which should be used for paying for the asset | ex.: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` [optional]
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155 | ex.: `true` [optional]
**getListingId()** | **string** | ID of the listing | ex.: `9qhKAgVRebMnjVM4AHdHcseYQG47Mns3U8e7dRz24kg5`
**getNftAddress()** | **string** | Address of the NFT smart contract. | ex.: `0xc21C81ef03f98898Fb155E00C364e8a7b9D158b8` [optional]
**getPrice()** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. | ex.: `1.234`
**getSeller()** | **string** | Address of the seller. | ex.: `9qhKAgVRebMnjVM4AHdHcseYQG47Mns3U8e7dRz24kg5`
**getState()** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled | ex.: `1`
**getNft()** | [**\Tatum\Model\SolanaListingDataNft**](../SolanaListingDataNft) |  | ex.: `null`
**getCreatedAt()** | **float** | Timestamp when this listing was created | ex.: `1669751911`
**getPurchasedAt()** | **float** | Timestamp when this listing was purchased | ex.: `1669751911` [optional]
**getCancelledAt()** | **float** | Timestamp when this listing was cancelled | ex.: `1669751911` [optional]

