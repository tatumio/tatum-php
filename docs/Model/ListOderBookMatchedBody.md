---
title: ListOderBookMatchedBody
parent: Model
layout: page
---

# ListOderBookMatchedBody

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | Account ID. If present, list matched FUTURE_BUY/FUTURE_SELL orders trades for that account. <br>Example: `5e68c66581f2ee32bc354087` | [optional]
**getCustomerId()** | **string** | Customer ID. If present, list matched FUTURE_BUY/FUTURE_SELL orders trades for that customer. <br>Example: `5e68c66581f2ee32bc354087` | [optional]
**getPageSize()** | **float** | Max number of items per page is 50. <br>Example: `10` |
**getOffset()** | **float** | Offset to obtain next page of the data. <br>Example: `0` | [optional]
**getPair()** | **string** | Trade pair. If present, list matched FUTURE_BUY/FUTURE_SELL orders trades for that pair. <br>Example: `BTC/EUR` | [optional]
**getCount()** | **bool** | Get the total trade pair count based on the filter. Either count or pageSize is accepted. <br>Example: `true` | [optional]
**getType()** | **string** | Trade type. <br>Example: `FUTURE_SELL` | [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Amount of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getFill()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Fill of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getPrice()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Price of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getCreated()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Created date of the trade. AND is used between filter options. <br>Example: `null` | [optional]
**getSort()** | **string[]** | Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array. <br>Example: `null` | [optional]

