---
title: VirtualCurrencyOperation
parent: Model
layout: page
---

# VirtualCurrencyOperation

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountId()** | **string** | Ledger account with currency of the virtual currency, on which the operation will be performed. | ex.: `5e68c66581f2ee32bc354087`
**getAmount()** | **string** | Amount of virtual currency to operate within this operation. | ex.: `1.5`
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `My Payment` [optional]
**getReference()** | **string** | Reference of the payment. | ex.: `akjsndakjsdn-asd-kjasnd-asdkn-asdjnasjkdn` [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. | ex.: `1_01_EXTERNAL_CODE` [optional]
**getRecipientNote()** | **string** | Note visible to both, sender and recipient. Available for both Mint and Revoke operations | ex.: `Private note` [optional]
**getCounterAccount()** | **string** | External account identifier. By default, there is no counterAccount present in the transaction. | ex.: `5e6645712b55823de7ea82f1` [optional]
**getSenderNote()** | **string** | Note visible to sender. Available in Revoke operation. | ex.: `Sender note` [optional]

