---
title: BurnNftKMSTron
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getAccount()** | **string** | Blockchain address to perform transaction from |
**getTokenId()** | **string** | ID of token to be destroyed. |
**getContractAddress()** | **string** | Address of NFT token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |

