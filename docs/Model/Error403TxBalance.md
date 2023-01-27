---
title: Error403TxBalance
parent: Model
layout: page
---

# Error403TxBalance

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | balance.insufficient <br>Example: `balance.insufficient` |
**getMessage()** | **string** | Insufficient balance for account ${transaction.senderAccountId} and payment amount ${transaction.amount}. Sender balance is ${senderAccount.balance.availableBalance as string}, amount is ${amount} <br>Example: `Insufficient balance for account ${transaction.senderAccountId} and payment amount ${transaction.amount}. Sender balance is ${senderAccount.balance.availableBalance as string}, amount is ${amount}` |
**getStatusCode()** | **float** | 403 <br>Example: `403` |

