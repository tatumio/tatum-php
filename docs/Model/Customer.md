---
title: Customer
parent: Model
layout: page
---

# Customer

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getExternalId()** | **string** | Customer external ID. | ex.: `651234`
**getId()** | **string** | Customer internal ID within Tatum. | ex.: `5e68c66581f2ee32bc354087`
**getEnabled()** | **bool** | Indicates whether customer is enabled or not | ex.: `true`
**getActive()** | **bool** | Indicates whether customer is active or not | ex.: `true`
**getAccountingCurrency()** | **string** | All transaction will be accounted in this currency for all accounts of the customer. Currency can be overridden per account level. ISO-4217 | ex.: `USD` [optional]
**getCustomerCountry()** | **string** | Country customer has to be compliant with | ex.: `US` [optional]
**getProviderCountry()** | **string** | Country service provider has to be compliant with | ex.: `US` [optional]

