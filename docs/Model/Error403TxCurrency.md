---
title: Error403TxCurrency
parent: Model
layout: page
---

# Error403TxCurrency

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | transaction.currency.incompatible <br>Example: `transaction.currency.incompatible` |
**getMessage()** | **string** | Incompatible currencies for sender account ${transaction.senderAccountId} and recipient account ${transaction.recipientAccountId}. <br>Example: `Incompatible currencies for sender account ${transaction.senderAccountId} and recipient account ${transaction.recipientAccountId}.` |
**getStatusCode()** | **float** | 403 <br>Example: `403` |

