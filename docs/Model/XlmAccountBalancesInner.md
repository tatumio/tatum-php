---
title: XlmAccountBalancesInner
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBalance()** | **string** | The number of units of an asset held by this account. | [optional]
**getLimit()** | **string** | The maximum amount of this asset that this account is willing to accept. Specified when opening a trustline. | [optional]
**getBuyingLiabilities()** | **string** | The sum of all buy offers owned by this account for this asset. | [optional]
**getSellingLiabilities()** | **string** | The sum of all sell offers owned by this account for this asset. | [optional]
**getAssetType()** | **string** | Either native, credit_alphanum4, or credit_alphanum12. | [optional]
**getAssetCode()** | **string** | The code for this asset. | [optional]
**getAssetIssuer()** | **string** | The Stellar address of this asset’s issuer. | [optional]

