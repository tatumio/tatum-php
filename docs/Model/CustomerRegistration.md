# CustomerRegistration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_currency** | **string** | All transaction will be accounted in this currency for all accounts. Currency can be overridden per account level. If not set, EUR is used. ISO-4217 | [optional]
**customer_country** | **string** | Country customer has to be compliant with. ISO-3166-1 | [optional]
**external_id** | **string** | Customer external ID. Use only anonymized identification you have in your system. If customer with externalId does not exists new customer is created. If customer with specified externalId already exists it is updated. |
**provider_country** | **string** | Country service provider has to be compliant with. ISO-3166-1 | [optional]

[[Back to API list]](../../README.md#api-endpoints)
