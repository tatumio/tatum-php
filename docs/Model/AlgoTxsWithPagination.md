---
title: AlgoTxsWithPagination
parent: Model
layout: page
---

# AlgoTxsWithPagination

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNextToken()** | **string** | Used for pagination, when making another request provide this token with the next parameter. <br>Example: `ywAAAAAAAAAAAAAA` | [optional]
**getTransactions()** | [**\Tatum\Model\AlgoTx[]**](../AlgoTx) | Array of transactions. <br>Example: `null` | [optional]

