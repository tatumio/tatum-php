---
title: BuyAssetOnMarketplaceSolana
parent: Model
layout: page
---

# BuyAssetOnMarketplaceSolana model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getContractAddress()** | **string** | The blockchain address of the marketplace smart contract |
**getListingId()** | **mixed** | The blockchain address of the listing with the asset that you want to buy |
**getFrom()** | **mixed** | The blockchain address of the buyer |
**getAuthorityPrivateKey()** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]
**getFromPrivateKey()** | **string** | The private key of the buyer |

