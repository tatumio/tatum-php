---
title: BuyAssetOnMarketplaceTronKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getFrom()** | **string** | Address of the recipient of the fee for the trade. |
**getBuyer()** | **string** | In case of the ERC20 listing, it's possible to buy on behalf of someone else. This value is the address of the buyer, which should approve spending of the ERC20 tokens for the Marketplace contract. This could be used for a buying from the custodial wallet address. | [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getErc20Address()** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. | [optional]
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter 1. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | [optional]
**getFeeLimit()** | **float** | Fee in TRX to be paid. |

