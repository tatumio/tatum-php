# Model/CustomerUpdate

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getExternalId()** | **string** | External customer ID. If not set, it will not be updated. |
**getAccountingCurrency()** | **string** | All transaction will be accounted in this currency for all accounts. Currency can be overridden per account level. If not set, it will not be updated. ISO-4217 | [optional]
**getCustomerCountry()** | **string** | Country customer has to be compliant with. If not set, it will not be updated. ISO-3166-1. | [optional]
**getProviderCountry()** | **string** | Country service provider has to be compliant with. If not set, it will not be updated. ISO-3166-1 | [optional]

[[Back to Index]](../index.md)
