---
title: TransferMultiTokenBatchCelo
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getTo()** | **string** | Blockchain address to send Multi Token token to |
**getTokenId()** | **string[]** | ID of token. |
**getAmounts()** | **string[]** | Amount of token to be transferred |
**getData()** | **string** | Data in bytes | [optional]
**getContractAddress()** | **string** | Address of Multi Token token |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas | [optional]

