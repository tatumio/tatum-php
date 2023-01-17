---
title: CreateTransaction
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Internal sender account ID within Tatum platform |
**getRecipientAccountId()** | **string** | Internal recipient account ID within Tatum platform |
**getAmount()** | **string** | Amount to be sent. |
**getAnonymous()** | **bool** | Anonymous transaction does not show sender account to recipient, default is false | [optional] [default to false]
**getCompliant()** | **bool** | Enable compliant checks. Transaction will not be processed, if compliant check fails. | [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**getPaymentId()** | **string** | Payment ID, External identifier of the payment, which can be used to pair transactions within Tatum accounts. | [optional]
**getRecipientNote()** | **string** | Note visible to both, sender and recipient | [optional]
**getBaseRate()** | **float** | Exchange rate of the base pair. Only applicable for Tatum's Virtual currencies Ledger transactions. Override default exchange rate for the Virtual Currency. | [optional] [default to 1]
**getSenderNote()** | **string** | Note visible to sender | [optional]

[[Back to Index]](../index.md)
