---
title: FlowCustomTransactionPK
parent: Model
layout: page
---

# FlowCustomTransactionPK

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getTransaction()** | **string** | Transaction string to send to the chain. <br>Example: `transaction(publicKey: String) {  prepare(signer: AuthAccount) {    signer.addPublicKey(publicKey.decodeHex())  }}` |
**getArgs()** | [**\Tatum\Model\FlowCustomTransactionPKArgsInner[]**](../FlowCustomTransactionPKArgsInner) |  <br>Example: `null` |
**getPrivateKey()** | **string** | Secret for account. Secret, or signature Id must be present. <br>Example: `37afa218d41d9cd6a2c6f2b96d9eaa3ad96c598252bc50e4d45d62f9356a51f8` |

