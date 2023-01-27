---
title: VirtualCurrencyOperation
parent: Model
layout: page
---

# VirtualCurrencyOperation

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountId()** | **string** | Ledger account with currency of the virtual currency, on which the operation will be performed. <br>Example: `5e68c66581f2ee32bc354087` |
**getAmount()** | **string** | Amount of virtual currency to operate within this operation. <br>Example: `1.5` |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `My Payment` | [optional]
**getReference()** | **string** | Reference of the payment. <br>Example: `akjsndakjsdn-asd-kjasnd-asdkn-asdjnasjkdn` | [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. <br>Example: `1_01_EXTERNAL_CODE` | [optional]
**getRecipientNote()** | **string** | Note visible to both, sender and recipient. Available for both Mint and Revoke operations <br>Example: `Private note` | [optional]
**getCounterAccount()** | **string** | External account identifier. By default, there is no counterAccount present in the transaction. <br>Example: `5e6645712b55823de7ea82f1` | [optional]
**getSenderNote()** | **string** | Note visible to sender. Available in Revoke operation. <br>Example: `Sender note` | [optional]

