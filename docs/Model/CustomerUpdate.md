---
title: CustomerUpdate
parent: Model
layout: page
---

# CustomerUpdate

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getExternalId()** | **string** | External customer ID. If not set, it will not be updated. <br>Example: `123654` |
**getAccountingCurrency()** | **string** | All transaction will be accounted in this currency for all accounts. Currency can be overridden per account level. If not set, it will not be updated. ISO-4217 <br>Example: `USD` | [optional]
**getCustomerCountry()** | **string** | Country customer has to be compliant with. If not set, it will not be updated. ISO-3166-1. <br>Example: `US` | [optional]
**getProviderCountry()** | **string** | Country service provider has to be compliant with. If not set, it will not be updated. ISO-3166-1 <br>Example: `US` | [optional]

