---
title: TransferMultiTokenBatch
parent: Model
layout: page
---

# TransferMultiTokenBatch model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getTo()** | **string** | Blockchain address to send Multi Token token to |
**getTokenId()** | **string[]** | ID of token. |
**getAmounts()** | **string[]** | amounts of token. |
**getData()** | **string** | Data in bytes | [optional]
**getContractAddress()** | **string** | Address of Multi Token token |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | [optional]

