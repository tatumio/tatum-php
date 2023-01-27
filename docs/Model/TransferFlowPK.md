---
title: TransferFlowPK
parent: Model
layout: page
---

# TransferFlowPK

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `61b3bffddfb389cde19c73be` |
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `10762710243615955000` |
**getAmount()** | **string** | Amount to be sent, in Flow. <br>Example: `10000` |
**getPrivateKey()** | **string** | Secret for account. Secret, or signature Id must be present. <br>Example: `37afa218d41d9cd6a2c6f2b96d9eaa3ad96c598252bc50e4d45d62f9356a51f8` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. <br>Example: `Sender note` | [optional]

