---
title: FlowCustomTransactionKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from |
**getTransaction()** | **string** | Transaction string to send to the chain. |
**getArgs()** | [**\Tatum\Model\FlowCustomTransactionPKArgsInner[]**](FlowCustomTransactionPKArgsInner.md) |  |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to Index]](../index.md)
