---
title: MintMultiTokenBatchKMSCelo
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getTo()** | **string[]** | The blockchain address to send the Multi Tokens to. |
**getTokenId()** | **string[][]** | The IDs of the Multi Tokens to be created. |
**getAmounts()** | **string[][]** | The amounts of the Multi Tokens to be created. |
**getData()** | **string** | Data in bytes | [optional]
**getContractAddress()** | **string** | The address of the Multi Token smart contract |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)
