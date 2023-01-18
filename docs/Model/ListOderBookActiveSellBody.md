---
title: ListOderBookActiveSellBody
parent: Model
layout: page
---

# ListOderBookActiveSellBody model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | Account ID. If present, list current active sell trades for that account. | [optional]
**getCustomerId()** | **string** | Customer ID. If present, list current active buy trades for that customer. | [optional]
**getPageSize()** | **float** | Max number of items per page is 50. |
**getOffset()** | **float** | Offset to obtain next page of the data. | [optional]
**getPair()** | **string** | Trade pair. If present, list current active sell trades for that pair. | [optional]
**getCount()** | **bool** | Get the total trade pair count based on the filter. Either count or pageSize is accepted. | [optional]
**getTradeType()** | **string** | Trade type. | [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Amount of the trade. AND is used between filter options. | [optional]
**getFill()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Fill of the trade. AND is used between filter options. | [optional]
**getPrice()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Price of the trade. AND is used between filter options. | [optional]
**getCreated()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Created date of the trade. AND is used between filter options. | [optional]
**getSort()** | **string[]** | Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array. | [optional]

