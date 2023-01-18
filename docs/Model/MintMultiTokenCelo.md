---
title: MintMultiTokenCelo
parent: Model
layout: page
---

# MintMultiTokenCelo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getTokenId()** | **string** | ID of token to be created. |
**getAmount()** | **string** | amount of token to be created. |
**getTo()** | **string** | Blockchain address to send Multi Token token to |
**getContractAddress()** | **string** | Address of Multi Token token |
**getData()** | **string** | Data in bytes | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

