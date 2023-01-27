---
title: ListOderBookActiveSellBody
parent: Model
layout: page
---

# ListOderBookActiveSellBody

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | Account ID. If present, list current active sell trades for that account. | ex.: `5e68c66581f2ee32bc354087` [optional]
**getCustomerId()** | **string** | Customer ID. If present, list current active buy trades for that customer. | ex.: `5e68c66581f2ee32bc354087` [optional]
**getPageSize()** | **float** | Max number of items per page is 50. | ex.: `10`
**getOffset()** | **float** | Offset to obtain next page of the data. | ex.: `0` [optional]
**getPair()** | **string** | Trade pair. If present, list current active sell trades for that pair. | ex.: `BTC/EUR` [optional]
**getCount()** | **bool** | Get the total trade pair count based on the filter. Either count or pageSize is accepted. | ex.: `true` [optional]
**getTradeType()** | **string** | Trade type. | ex.: `SELL` [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Amount of the trade. AND is used between filter options. | ex.: `null` [optional]
**getFill()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Fill of the trade. AND is used between filter options. | ex.: `null` [optional]
**getPrice()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Price of the trade. AND is used between filter options. | ex.: `null` [optional]
**getCreated()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Created date of the trade. AND is used between filter options. | ex.: `null` [optional]
**getSort()** | **string[]** | Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array. | ex.: `null` [optional]

