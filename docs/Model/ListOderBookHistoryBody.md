---
title: ListOderBookHistoryBody
parent: Model
layout: page
---

# ListOderBookHistoryBody

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | Account ID. If present, only closed trades for given account will be present. <br>Example: `5e68c66581f2ee32bc354087` | [optional]
**getCustomerId()** | **string** | Customer ID. If present, only closed trades for given customer will be present. <br>Example: `5e68c66581f2ee32bc354087` | [optional]
**getPageSize()** | **float** | Max number of items per page is 50. <br>Example: `10` |
**getOffset()** | **float** | Offset to obtain next page of the data. <br>Example: `0` | [optional]
**getPair()** | **string** | Trade pair. If present, list historical trades for that pair. <br>Example: `BTC/EUR` | [optional]
**getCount()** | **bool** | Get the total trade pair count based on the filter. Either count or pageSize is accepted. <br>Example: `true` | [optional]
**getTypes()** | **string[]** | Trade types. <br>Example: `null` | [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Amount of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getFill()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Fill of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getPrice()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Price of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getCreated()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Created date of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getSort()** | **string[]** | Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array. <br>Example: `null` | [optional]

