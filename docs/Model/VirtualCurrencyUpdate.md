---
title: VirtualCurrencyUpdate
parent: Model
layout: page
---

# VirtualCurrencyUpdate

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Virtual currency name, which will be updated. It is not possible to update the name of the virtual currency. <br>Example: `VC_VIRTUAL` |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. <br>Example: `1` | [optional] [default to 1]
**getBasePair()** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. <br>Example: `EUR` | [optional]

