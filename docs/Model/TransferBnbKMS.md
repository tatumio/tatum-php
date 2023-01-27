---
title: TransferBnbKMS
parent: Model
layout: page
---

# TransferBnbKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `61b3bffddfb389cde19c73be` |
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39` |
**getAmount()** | **string** | Amount to be sent, in BNB. <br>Example: `10000` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getAttr()** | **string** | Memo of the recipient account, if any. <br>Example: `12355` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFromAddress()** | **string** | Blockchain address to send from. <br>Example: `tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39` |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. <br>Example: `Sender note` | [optional]

