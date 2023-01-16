# Model/Customer

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getExternalId()** | **string** | Customer external ID. |
**getId()** | **string** | Customer internal ID within Tatum. |
**getEnabled()** | **bool** | Indicates whether customer is enabled or not |
**getActive()** | **bool** | Indicates whether customer is active or not |
**getAccountingCurrency()** | **string** | All transaction will be accounted in this currency for all accounts of the customer. Currency can be overridden per account level. ISO-4217 | [optional]
**getCustomerCountry()** | **string** | Country customer has to be compliant with | [optional]
**getProviderCountry()** | **string** | Country service provider has to be compliant with | [optional]

[[Back to Index]](../index.md)
