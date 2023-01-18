---
title: TransferAlgorandBlockchainKMS
parent: Model
layout: page
---

# TransferAlgorandBlockchainKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | The blockchain address of the sender |
**getTo()** | **string** | The blockchain address of the recipient |
**getFee()** | **string** | The transaction fee in Algos |
**getAmount()** | **string** | The amount to send in Algos |
**getNote()** | **string** | The note for the recipient; must not contain spaces | [optional]
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

