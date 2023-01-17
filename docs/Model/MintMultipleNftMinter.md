---
title: MintMultipleNftMinter
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string[]** | Blockchain address to send NFT token to. |
**getTokenId()** | **string[]** | ID of token to be created. |
**getMinter()** | **string** | Address of NFT minter, which will be used to mint the tokens. From this address, transaction fees will be deducted. |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getContractAddress()** | **string** | Address of NFT token |
**getFeeCurrency()** | **string** | (Celo only) The currency in which the transaction fee will be paid | [optional]

