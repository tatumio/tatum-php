---
title: SolanaListingData
parent: Model
layout: page
---

# SolanaListingData

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of NFTs to sold in this listing. <br>Example: `1` |
**getBuyer()** | **string** | Address of the buyer, if exists. <br>Example: `9qhKAgVRebMnjVM4AHdHcseYQG47Mns3U8e7dRz24kg5` | [optional]
**getListingId()** | **string** | ID of the listing <br>Example: `9qhKAgVRebMnjVM4AHdHcseYQG47Mns3U8e7dRz24kg5` |
**getNft()** | [**\Tatum\Model\SolanaListingDataNft**](../SolanaListingDataNft) |  <br>Example: `null` |
**getPrice()** | **string** | Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field. <br>Example: `1.234` |
**getSeller()** | **string** | Address of the seller. <br>Example: `9qhKAgVRebMnjVM4AHdHcseYQG47Mns3U8e7dRz24kg5` |
**getState()** | **string** | State of the listing. 0 - available, 1 - sold, 2 - cancelled <br>Example: `1` |
**getCreatedAt()** | **float** | Timestamp when this listing was created <br>Example: `1669751911` |
**getPurchasedAt()** | **float** | Timestamp when this listing was purchased <br>Example: `1669751911` | [optional]
**getCancelledAt()** | **float** | Timestamp when this listing was cancelled <br>Example: `1669751911` | [optional]

