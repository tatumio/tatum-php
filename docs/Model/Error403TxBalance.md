---
title: Error403TxBalance
parent: Model
layout: page
---

# Error403TxBalance model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | balance.insufficient |
**getMessage()** | **string** | Insufficient balance for account ${transaction.senderAccountId} and payment amount ${transaction.amount}. Sender balance is ${senderAccount.balance.availableBalance as string}, amount is ${amount} |
**getStatusCode()** | **float** | 403 |

