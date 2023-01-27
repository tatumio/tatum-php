---
title: Error403TxAmountBtcOffchain
parent: Model
layout: page
---

# Error403TxAmountBtcOffchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | transaction.amount.btc | ex.: `transaction.amount.btc`
**getMessage()** | **string** | BTC/LTC/BCH payment amount must be at least 0.00000001, not ${transaction.amount}. | ex.: `BTC/LTC/BCH payment amount must be at least 0.00000001, not ${transaction.amount}.`
**getStatusCode()** | **float** | 403 | ex.: `403`

