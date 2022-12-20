# VirtualCurrency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Virtual currency name. Must be prefixed with &#39;VC_&#39;. |
**supply** | **string** | Supply of virtual currency. |
**base_pair** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. |
**base_rate** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**description** | **string** | Used as a description within Tatum system. | [optional]
**account_code** | **string** | For bookkeeping to distinct account purpose. | [optional]
**account_number** | **string** | Account number from external system. | [optional]
**accounting_currency** | **string** | All transaction will be billed in this currency for created account associated with this currency. If not set, EUR is used. ISO-4217 | [optional]

[[Back to Index]](../index.md)
