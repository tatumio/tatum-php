---
title: TransactionFilter
parent: Model
layout: page
---

# TransactionFilter

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | Account ID - source of transaction(s). | ex.: `5e6be8e9e6aa436299950c41`
**getCounterAccount()** | **string** | Counter account - transaction(s) destination account. | ex.: `5e6be8e9e6aa436299950c41` [optional]
**getFrom()** | **int** | Starting date to search for transactions from in UTC millis. If not present, search all history. | ex.: `1571833231000` [optional]
**getTo()** | **int** | Date until to search for transactions in UTC millis. If not present, search up till now. | ex.: `1571833231000` [optional]
**getCurrency()** | **string** | Currency of the transactions. | ex.: `BTC` [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Amount of the transaction. AND is used between filter options. | ex.: `null` [optional]
**getCurrencies()** | **string[]** | List of currencies of the transactions. | ex.: `null` [optional]
**getTransactionType()** | **string** | Type of payment | ex.: `null` [optional]
**getTransactionTypes()** | **string[]** | Types of payment | ex.: `null` [optional]
**getOpType()** | **string** | Type of operation | ex.: `PAYMENT` [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. | ex.: `1_01_EXTERNAL_CODE` [optional]
**getPaymentId()** | **string** | Payment ID defined in payment order by sender. | ex.: `65426` [optional]
**getRecipientNote()** | **string** | Recipient note defined in payment order by sender. | ex.: `65426` [optional]
**getSenderNote()** | **string** | Sender note defined in payment order by sender. | ex.: `65426` [optional]

