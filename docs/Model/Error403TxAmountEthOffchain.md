---
title: Error403TxAmountEthOffchain
parent: Model
layout: page
---

# Error403TxAmountEthOffchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | transaction.amount.eth | ex.: `transaction.amount.eth`
**getMessage()** | **string** | ETH payment amount must be at least 0.000000000000000001, not ${transaction.amount}. | ex.: `ETH payment amount must be at least 0.000000000000000001, not ${transaction.amount}.`
**getStatusCode()** | **float** | 403 | ex.: `403`

