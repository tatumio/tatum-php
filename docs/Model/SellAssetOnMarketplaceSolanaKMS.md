---
title: SellAssetOnMarketplaceSolanaKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Blockchain address of the smart contract |
**getNftAddress()** | **string** | Blockchain address of the asset to sell |
**getFrom()** | **mixed** | Blockchain address of the seller |
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. |
**getAuthoritySignatureId()** | **string** | The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the seller |

