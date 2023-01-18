---
title: TransferTron
parent: Model
layout: page
---

# TransferTron model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent in Tron. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 2.5 TRX is used. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderAccountId()** | **string** | Sender account ID |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]

