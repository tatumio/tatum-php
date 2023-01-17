---
title: UpdateFeeRecipientTronKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getFrom()** | **string** | Address of the recipient of the fee for the trade. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getFeeRecipient()** | **string** | Recipient address of the marketplace fee. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | [optional]
**getFeeLimit()** | **float** | Fee in TRX to be paid. |

[[Back to Index]](../index.md)
