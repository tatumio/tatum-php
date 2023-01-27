---
title: FlowTransactionKMS
parent: Model
layout: page
---

# FlowTransactionKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from | ex.: `0x955cd3f17b2fd8ad`
**getCurrency()** | **string** | Type of asset to send | ex.: `null`
**getTo()** | **string** | Blockchain address to send assets | ex.: `0x955cd3f17b2fd8ae`
**getAmount()** | **string** | Amount to be sent | ex.: `10000`
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]

