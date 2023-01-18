---
title: BurnNft
parent: Model
layout: page
---

# BurnNft model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTokenId()** | **string** | The ID of the NFT to burn |
**getContractAddress()** | **string** | The blockchain address of the NFT to burn |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]

