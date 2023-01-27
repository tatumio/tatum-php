---
title: Error403TxAmountAdaOffchain
parent: Model
layout: page
---

# Error403TxAmountAdaOffchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | amount.ada | ex.: `amount.ada`
**getMessage()** | **string** | ADA payment amount must be at least 0.000000000001, not ${transaction.amount}. | ex.: `ADA payment amount must be at least 0.000000000001, not ${transaction.amount}.`
**getStatusCode()** | **float** | 403 | ex.: `403`

