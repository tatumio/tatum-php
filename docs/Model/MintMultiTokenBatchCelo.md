---
title: MintMultiTokenBatchCelo
parent: Model
layout: page
---

# MintMultiTokenBatchCelo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getTokenId()** | **string[][]** | The IDs of the Multi Tokens to be created. |
**getAmounts()** | **string[][]** | The amounts of the Multi Tokens to be created. |
**getData()** | **string** | Data in bytes | [optional]
**getTo()** | **string[]** | The blockchain address to send the Multi Tokens to |
**getContractAddress()** | **string** | The address of the Multi Token smart contract |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

