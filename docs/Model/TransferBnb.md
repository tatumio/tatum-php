---
title: TransferBnb
parent: Model
layout: page
---

# TransferBnb

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `61b3bffddfb389cde19c73be`
**getAddress()** | **string** | Blockchain address to send assets | ex.: `tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39`
**getAmount()** | **string** | Amount to be sent, in BNB. | ex.: `10000`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getAttr()** | **string** | Memo of the recipient account, if any. | ex.: `12355` [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. | ex.: `8ac4b14b38d8a5af58019088ce5a24b764536bccd1981cf79d3e09e9d1f2ad31`
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | ex.: `Sender note` [optional]

