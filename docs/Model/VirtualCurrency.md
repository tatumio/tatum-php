# VirtualCurrency

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Virtual currency name. Must be prefixed with 'VC_'. |
**getSupply()** | **string** | Supply of virtual currency. |
**getBasePair()** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**getDescription()** | **string** | Used as a description within Tatum system. | [optional]
**getAccountCode()** | **string** | For bookkeeping to distinct account purpose. | [optional]
**getAccountNumber()** | **string** | Account number from external system. | [optional]
**getAccountingCurrency()** | **string** | All transaction will be billed in this currency for created account associated with this currency. If not set, EUR is used. ISO-4217 | [optional]

[[Back to Index]](../index.md)
