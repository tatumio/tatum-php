---
title: GenerateCustodialWalletBatchTronKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFrom()** | **string** | Sender address. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getBatchCount()** | **float** | Number of addresses to generate. |
**getOwner()** | **string** | Owner of the addresses. |
**getFeeLimit()** | **float** | Fee limit to be set, in TRX |

[[Back to Index]](../index.md)
