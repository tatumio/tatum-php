---
title: Error403TxBalance
parent: Model
layout: page
---

# Error403TxBalance

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | balance.insufficient | ex.: `balance.insufficient`
**getMessage()** | **string** | Insufficient balance for account ${transaction.senderAccountId} and payment amount ${transaction.amount}. Sender balance is ${senderAccount.balance.availableBalance as string}, amount is ${amount} | ex.: `Insufficient balance for account ${transaction.senderAccountId} and payment amount ${transaction.amount}. Sender balance is ${senderAccount.balance.availableBalance as string}, amount is ${amount}`
**getStatusCode()** | **float** | 403 | ex.: `403`

