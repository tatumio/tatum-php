---
title: ChainMintCeloErc20KMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getAmount()** | **string** | Amount to be minted and transferred to the recipient. |
**getTo()** | **string** | Blockchain address to send ERC-20 tokens to. |
**getContractAddress()** | **string** | Address of ERC-20 token |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |

[[Back to Index]](../index.md)
