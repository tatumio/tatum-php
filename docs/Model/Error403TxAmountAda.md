---
title: Error403TxAmountAda
parent: Model
layout: page
---

# Error403TxAmountAda

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | transaction.amount.ada <br>Example: `transaction.amount.ada` |
**getMessage()** | **string** | ADA payment amount must be at least 0.000001, not ${transaction.amount}. <br>Example: `ADA payment amount must be at least 0.000001, not ${transaction.amount}.` |
**getStatusCode()** | **float** | 403 <br>Example: `403` |

