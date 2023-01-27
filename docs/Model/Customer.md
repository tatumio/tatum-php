---
title: Customer
parent: Model
layout: page
---

# Customer

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getExternalId()** | **string** | Customer external ID. <br>Example: `651234` |
**getId()** | **string** | Customer internal ID within Tatum. <br>Example: `5e68c66581f2ee32bc354087` |
**getEnabled()** | **bool** | Indicates whether customer is enabled or not <br>Example: `true` |
**getActive()** | **bool** | Indicates whether customer is active or not <br>Example: `true` |
**getAccountingCurrency()** | **string** | All transaction will be accounted in this currency for all accounts of the customer. Currency can be overridden per account level. ISO-4217 <br>Example: `USD` | [optional]
**getCustomerCountry()** | **string** | Country customer has to be compliant with <br>Example: `US` | [optional]
**getProviderCountry()** | **string** | Country service provider has to be compliant with <br>Example: `US` | [optional]

