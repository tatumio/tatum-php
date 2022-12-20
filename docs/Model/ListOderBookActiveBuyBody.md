# ListOderBookActiveBuyBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Account ID. If present, list current active sell trades for that account. | [optional]
**customer_id** | **string** | Customer ID. If present, list current active buy trades for that customer. | [optional]
**page_size** | **float** | Max number of items per page is 50. |
**offset** | **float** | Offset to obtain next page of the data. | [optional]
**pair** | **string** | Trade pair. If present, list current active sell trades for that pair. | [optional]
**count** | **bool** | Get the total trade pair count based on the filter. Either count or pageSize is accepted. | [optional]
**trade_type** | **string** | Trade type. | [optional]
**amount** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Amount of the trade. AND is used between filter options. | [optional]
**fill** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Fill of the trade. AND is used between filter options. | [optional]
**price** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Price of the trade. AND is used between filter options. | [optional]
**created** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Created date of the trade. AND is used between filter options. | [optional]
**sort** | **string[]** | Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array. | [optional]

[[Back to Index]](../index.md)
