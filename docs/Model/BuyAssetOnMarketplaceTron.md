---
title: BuyAssetOnMarketplaceTron
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getErc20Address()** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. | [optional]
**getBuyer()** | **string** | In case of the ERC20 listing, it's possible to buy on behalf of someone else. This value is the address of the buyer, which should approve spending of the ERC20 tokens for the Marketplace contract. This could be used for a buying from the custodial wallet address. | [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID |
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter 1. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getFeeLimit()** | **float** | Fee in TRX to be paid. |

[[Back to Index]](../index.md)
