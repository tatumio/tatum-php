---
title: VirtualCurrency
parent: Model
layout: page
---

# VirtualCurrency

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Virtual currency name. Must be prefixed with 'VC_'. <br>Example: `VC_VIRTUAL` |
**getSupply()** | **string** | Supply of virtual currency. <br>Example: `1000000` |
**getBasePair()** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. <br>Example: `BTC` |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. <br>Example: `1` | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]
**getDescription()** | **string** | Used as a description within Tatum system. <br>Example: `My Virtual Token description.` | [optional]
**getAccountCode()** | **string** | For bookkeeping to distinct account purpose. <br>Example: `AC_1011_B` | [optional]
**getAccountNumber()** | **string** | Account number from external system. <br>Example: `1234567890` | [optional]
**getAccountingCurrency()** | **string** | All transaction will be billed in this currency for created account associated with this currency. If not set, EUR is used. ISO-4217 <br>Example: `USD` | [optional]

