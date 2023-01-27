---
title: Error403TxRecipientNotFound
parent: Model
layout: page
---

# Error403TxRecipientNotFound

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | recipientAccount.not.exists | ex.: `recipientAccount.not.exists`
**getMessage()** | **string** | Unable to find recipient account ${transaction.recipientAccountId}. | ex.: `Unable to find recipient account ${transaction.recipientAccountId}.`
**getStatusCode()** | **float** | 403 | ex.: `403`

