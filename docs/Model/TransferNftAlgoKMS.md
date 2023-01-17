---
title: TransferNftAlgoKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getFrom()** | **string** | The blockchain address to transfer the NFT from |
**getTo()** | **string** | The blockchain address to transfer the NFT to |
**getContractAddress()** | **string** | The asset ID (the ID of the NFT) |
**getSignatureId()** | **string** | The KMS identifier of the private key of the sender's blockchain address |
**getAmount()** | **float** | (For <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional NFTs</a> only) The number of NFT fractions to transfer; if not set, defaults to 1, which means that one fraction of the NFT will be transferred | [optional] [default to 1]

[[Back to Index]](../index.md)
