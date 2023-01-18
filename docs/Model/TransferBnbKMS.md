---
title: TransferBnbKMS
parent: Model
layout: page
---

# TransferBnbKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in BNB. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getAttr()** | **string** | Memo of the recipient account, if any. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getFromAddress()** | **string** | Blockchain address to send from. |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | [optional]

