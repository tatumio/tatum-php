---
title: TransferXlmKMS
parent: Model
layout: page
---

# TransferXlmKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `61b3bffddfb389cde19c73be`
**getFromAccount()** | **string** | Blockchain account to send from | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H`
**getAddress()** | **string** | Blockchain address to send assets | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H`
**getAmount()** | **string** | Amount to be sent, in XLM or XLM-based Asset. | ex.: `10000`
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getAttr()** | **string** | Short message to recipient. Usually used as an account discriminator. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. When using as an account disciminator in Tatum Offchain ledger, can be in format of destination_acc/source_acc. | ex.: `12355` [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | ex.: `Sender note` [optional]

