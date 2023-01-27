---
title: TransferFlowKMS
parent: Model
layout: page
---

# TransferFlowKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `61b3bffddfb389cde19c73be` |
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `10762710243615955000` |
**getAmount()** | **string** | Amount to be sent, in Flow. <br>Example: `10000` |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. <br>Example: `Sender note` | [optional]

