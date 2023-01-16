# Model/CustomerRegistration

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getExternalId()** | **string** | The external ID of the customer; use only anonymized identification that you have in your system<br/>If a customer with the specified external ID does not exist, a new customer is created. If a customer with the specified external ID exists, it is updated with the provided information. |
**getAccountingCurrency()** | **string** | The ISO 4217 code of the currency in which all transactions for all virtual accounts of the customer will be billed; to overwrite the currency for this specific virtual account, set the <code>accountingCurrency</code> parameter at the account level. | [optional] [default to 'EUR']
**getCustomerCountry()** | **string** | The ISO 3166-1 code of the country that the customer has to be compliant with | [optional]
**getProviderCountry()** | **string** | The ISO 3166-1 code of the country that the service provider has to be compliant with | [optional]

[[Back to Index]](../index.md)
