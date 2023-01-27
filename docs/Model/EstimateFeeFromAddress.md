---
title: EstimateFeeFromAddress
parent: Model
layout: page
---

# EstimateFeeFromAddress

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to estimate fee for. <br>Example: `null` |
**getType()** | **string** | Type of transaction <br>Example: `null` |
**getFromAddress()** | **string[]** | Array of addresses. Tatum will automatically scan last 100 transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only. <br>Example: `null` |
**getTo()** | [**\Tatum\Model\EstimateFeeFromAddressToInner[]**](../EstimateFeeFromAddressToInner) | Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee. <br>Example: `null` |

