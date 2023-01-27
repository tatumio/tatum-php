---
title: FlowCustomTransactionMnemonic
parent: Model
layout: page
---

# FlowCustomTransactionMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from | ex.: `0x955cd3f17b2fd8ad`
**getTransaction()** | **string** | Transaction string to send to the chain. | ex.: `transaction(publicKey: String) {  prepare(signer: AuthAccount) {    signer.addPublicKey(publicKey.decodeHex())  }}`
**getArgs()** | [**\Tatum\Model\FlowCustomTransactionPKArgsInner[]**](../FlowCustomTransactionPKArgsInner) |  | ex.: `null`
**getMnemonic()** | **string** | Mnemonic to generate private key. | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getIndex()** | **float** | Index to the specific address from mnemonic. | ex.: `null`

