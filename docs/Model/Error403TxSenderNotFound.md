---
title: Error403TxSenderNotFound
parent: Model
layout: page
---

# Error403TxSenderNotFound

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | senderAccount.not.exists | ex.: `senderAccount.not.exists`
**getMessage()** | **string** | Unable to find sender account ${transaction.senderAccountId}. | ex.: `Unable to find sender account ${transaction.senderAccountId}.`
**getStatusCode()** | **float** | 403 | ex.: `403`

