---
title: MintErc20KMSCelo
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount to be minted and transfered to the recipient. |
**getTo()** | **string** | Blockchain address to send ERC-20 tokens to. |
**getContractAddress()** | **string** | Address of ERC-20 token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)
