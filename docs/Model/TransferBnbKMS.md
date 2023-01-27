---
title: TransferBnbKMS
parent: Model
layout: page
---

# TransferBnbKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `61b3bffddfb389cde19c73be`
**getAddress()** | **string** | Blockchain address to send assets | ex.: `tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39`
**getAmount()** | **string** | Amount to be sent, in BNB. | ex.: `10000`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getAttr()** | **string** | Memo of the recipient account, if any. | ex.: `12355` [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFromAddress()** | **string** | Blockchain address to send from. | ex.: `tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39`
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | ex.: `Sender note` [optional]

