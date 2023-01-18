---
title: CancelSellAssetOnMarketplaceTronKMS
parent: Model
layout: page
---

# CancelSellAssetOnMarketplaceTronKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getFrom()** | **string** | Address of the recipient of the fee for the trade. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getErc20Address()** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | [optional]
**getFeeLimit()** | **float** | Fee in TRX to be paid. |

