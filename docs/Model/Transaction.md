---
title: Transaction
parent: Model
layout: page
---

# Transaction

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountId()** | **string** | Source account - source of transaction(s) <br>Example: `5e6645712b55823de7ea82f1` |
**getCounterAccountId()** | **string** | Counter account - transaction(s) destination account. In case of blockchain recipient, this is addess of blockchain account. <br>Example: `5e6645712b55823de7ea82f1` | [optional]
**getCurrency()** | **string** | Transaction currency <br>Example: `BTC` |
**getAmount()** | **string** | Amount in account's currency <br>Example: `0.1` |
**getAnonymous()** | **bool** | Whether the transaction is anonymous. If true, counter account owner does not see source account. <br>Example: `false` |
**getCreated()** | **float** | Time in UTC of transaction. <br>Example: `1572031674384` |
**getMarketValue()** | [**\Tatum\Model\MarketValue**](../MarketValue) |  <br>Example: `null` |
**getOperationType()** | **string** | Type of operation. <br>Example: `PAYMENT` |
**getTransactionType()** | **string** | Type of payment. <br>Example: `CREDIT_PAYMENT` |
**getReference()** | **string** | Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems. <br>Example: `5e6be8e9e6aa436299950c41` |
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. <br>Example: `1_01_EXTERNAL_CODE` | [optional]
**getSenderNote()** | **string** | Note visible for sender. <br>Example: `Sender note` | [optional]
**getRecipientNote()** | **string** | Note visible for both sender and recipient. <br>Example: `Private note` | [optional]
**getPaymentId()** | **string** | Payment ID defined in payment order by sender. <br>Example: `65426` | [optional]
**getAttr()** | **string** | Present only for operationType WITHDRAWAL and XLM / XRP based accounts it represents message or destinationTag of the recipient, if present. <br>Example: `123` | [optional]
**getAddress()** | **string** | For operationType DEPOSIT it represents address, on which was deposit credited for the account. <br>Example: `qrppgud79n5h5ehqt9s7x8uc82pcag82es0w9tada0` | [optional]
**getTxId()** | **string** | For operationType DEPOSIT, BLOCKCHAIN_TRANSACTION it represents transaction id, for which deposit occured. <br>Example: `c6c176e3f6705596d58963f0ca79b34ffa5b78874a65df9c974e22cf86a7ba67` | [optional]

