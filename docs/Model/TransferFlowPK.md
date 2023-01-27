---
title: TransferFlowPK
parent: Model
layout: page
---

# TransferFlowPK

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `61b3bffddfb389cde19c73be`
**getAccount()** | **string** | Blockchain account to send from | ex.: `0x955cd3f17b2fd8ad`
**getAddress()** | **string** | Blockchain address to send assets | ex.: `10762710243615955000`
**getAmount()** | **string** | Amount to be sent, in Flow. | ex.: `10000`
**getPrivateKey()** | **string** | Secret for account. Secret, or signature Id must be present. | ex.: `37afa218d41d9cd6a2c6f2b96d9eaa3ad96c598252bc50e4d45d62f9356a51f8`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | ex.: `Sender note` [optional]

