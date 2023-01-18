---
title: BurnMultiTokenCelo
parent: Model
layout: page
---

# BurnMultiTokenCelo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getAccount()** | **string** | Address of holder |
**getTokenId()** | **string** | ID of token to be destroyed. |
**getAmount()** | **string** | amount of token to be destroyed. |
**getContractAddress()** | **string** | Address of Multi Token token |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

