---
title: FlowTransactionKMS
parent: Model
layout: page
---

# FlowTransactionKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getCurrency()** | **string** | Type of asset to send <br>Example: `null` |
**getTo()** | **string** | Blockchain address to send assets <br>Example: `0x955cd3f17b2fd8ae` |
**getAmount()** | **string** | Amount to be sent <br>Example: `10000` |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]

