---
title: XrpAccountTx
parent: Model
layout: page
---

# XrpAccountTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Unique Address identifying the related account. | ex.: `rPT1Sjq2YGrBMTttX4GZHjKu9dyfzbpAYe` [optional]
**getLedgerIndexMax()** | **float** | The ledger index of the earliest ledger actually searched for transactions. | ex.: `760762` [optional]
**getLedgerIndexMin()** | **float** | The ledger index of the most recent ledger actually searched for transactions. | ex.: `614` [optional]
**getMarker()** | [**\Tatum\Model\XrpAccountTxMarker**](../XrpAccountTxMarker) |  | ex.: `null` [optional]
**getTransactions()** | [**\Tatum\Model\XrpAccountTxTransactionsInner[]**](../XrpAccountTxTransactionsInner) | Array of transactions matching the request's criteria, as explained below. | ex.: `null` [optional]

