---
title: Error403TxAmountBtc
parent: Model
layout: page
---

# Error403TxAmountBtc

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | amount.btc | ex.: `amount.btc`
**getMessage()** | **string** | BTC/LTC/BCH payment amount must be at least 0.00000000000001, not ${transaction.amount}. | ex.: `BTC/LTC/BCH payment amount must be at least 0.00000000000001, not ${transaction.amount}.`
**getStatusCode()** | **float** | 403 | ex.: `403`

