---
title: TransferEgldBlockchainKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Account address of the sender |
**getTo()** | **string** | Account address of the receiver or smart contract |
**getAmount()** | **string** | Value to be sent. |
**getFee()** | [**\Tatum\Model\TransferEgldBlockchainKMSFee**](../TransferEgldBlockchainKMSFee) |  | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

