---
title: TransferXrpBlockchain
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**getTo()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in XRP. |
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. | [optional]
**getDestinationTag()** | **int** | Destination tag of recipient account, if any. | [optional]

[[Back to Index]](../index.md)
