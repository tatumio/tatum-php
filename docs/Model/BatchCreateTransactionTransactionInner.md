---
title: BatchCreateTransactionTransactionInner
parent: Model
layout: page
---

# BatchCreateTransactionTransactionInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getRecipientAccountId()** | **string** | Internal recipient account ID within Tatum platform | ex.: `5e6645712b55823de7ea82f2`
**getAmount()** | **string** | Amount to be sent. | ex.: `5`
**getAnonymous()** | **bool** | Anonymous transaction does not show sender account to recipient, default is false | ex.: `false` [optional] [default to false]
**getCompliant()** | **bool** | Enable compliant checks. Transaction will not be processed, if compliant check fails. | ex.: `false` [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. | ex.: `1_01_EXTERNAL_CODE` [optional]
**getPaymentId()** | **string** | Payment ID, External identifier of the payment, which can be used to pair transactions within Tatum accounts. | ex.: `9625` [optional]
**getRecipientNote()** | **string** | Note visible to both, sender and recipient | ex.: `Private note` [optional]
**getBaseRate()** | **float** | Exchange rate of the base pair. Only applicable for Tatum's Virtual currencies Ledger transactions. Override default exchange rate for the Virtual Currency. | ex.: `1` [optional] [default to 1]
**getSenderNote()** | **string** | Note visible to sender | ex.: `Sender note` [optional]

