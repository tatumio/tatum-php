---
title: TransactionFilterLedger
parent: Model
layout: page
---

# TransactionFilterLedger

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Source account - source of transaction(s). <br>Example: `5e6be8e9e6aa436299950c41` | [optional]
**getCounterAccount()** | **string** | Counter account - transaction(s) destination account. <br>Example: `5e6be8e9e6aa436299950c41` | [optional]
**getCurrency()** | **string** | Currency of the transactions. <br>Example: `BTC` | [optional]
**getFrom()** | **int** | Starting date to search for transactions from in UTC millis. If not present, search all history. <br>Example: `1571833231000` | [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](../TransactionFilterAmountInner) | Amount of the transaction. AND is used between filter options. <br>Example: `null` | [optional]
**getCurrencies()** | **string[]** | List of currencies of the transactions. <br>Example: `null` | [optional]
**getTransactionType()** | **string** | Type of payment <br>Example: `null` | [optional]
**getTransactionTypes()** | **string[]** | Types of payment <br>Example: `null` | [optional]
**getOpType()** | **string** | Type of operation. <br>Example: `PAYMENT` | [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. <br>Example: `1_01_EXTERNAL_CODE` | [optional]
**getPaymentId()** | **string** | Payment ID defined in payment order by sender. <br>Example: `65426` | [optional]
**getRecipientNote()** | **string** | Recipient note defined in payment order by sender. <br>Example: `65426` | [optional]
**getSenderNote()** | **string** | Sender note defined in payment order by sender. <br>Example: `65426` | [optional]
**getTo()** | **int** | Date until to search for transactions in UTC millis. If not present, search up till now. <br>Example: `1571833231000` | [optional]

