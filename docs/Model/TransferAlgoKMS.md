---
title: TransferAlgoKMS
parent: Model
layout: page
---

# TransferAlgoKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | The ID of the virtual account to send Algos from | ex.: `61b3bffddfb389cde19c73be`
**getAddress()** | **string** | The blockchain address to send Algos to | ex.: `5YVZBUH3STSQ5ABCTLEIEIJ7QOZFILM2DLAEEA4ZL6CU55ODZIQXO5EMYM`
**getAmount()** | **string** | The amount to send in Algos | ex.: `10000`
**getFee()** | **string** | The transaction fee in Algos | ex.: `0.001`
**getSignatureId()** | **string** | The identifier of the secret of the Algorand wallet (account) in the signing application. Secret, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getCompliant()** | **bool** | Compliance check; if the withdrawal is not compliant, it will not be processed | ex.: `false` [optional]
**getPaymentId()** | **string** | The identifier of the Algo transfer that is shown on the virtual account for the created transaction | ex.: `1234` [optional]
**getSenderNote()** | **string** | The note for the recipient; must not contain spaces | ex.: `Helloworld` [optional]

