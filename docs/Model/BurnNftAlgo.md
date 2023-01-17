---
title: BurnNftAlgo
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getContractAddress()** | **string** | The ID of the NFT to burn; this is the ID from the <code>assetIndex</code> parameter returned in the response body of the <a href="#operation/NftMintErc721">minting call</a> |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted |

