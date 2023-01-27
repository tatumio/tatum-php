---
title: XrpAccountTx
parent: Model
layout: page
---

# XrpAccountTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Unique Address identifying the related account. <br>Example: `rPT1Sjq2YGrBMTttX4GZHjKu9dyfzbpAYe` | [optional]
**getLedgerIndexMax()** | **float** | The ledger index of the earliest ledger actually searched for transactions. <br>Example: `760762` | [optional]
**getLedgerIndexMin()** | **float** | The ledger index of the most recent ledger actually searched for transactions. <br>Example: `614` | [optional]
**getMarker()** | [**\Tatum\Model\XrpAccountTxMarker**](../XrpAccountTxMarker) |  <br>Example: `null` | [optional]
**getTransactions()** | [**\Tatum\Model\XrpAccountTxTransactionsInner[]**](../XrpAccountTxTransactionsInner) | Array of transactions matching the request's criteria, as explained below. <br>Example: `null` | [optional]

