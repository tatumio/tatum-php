---
title: MintMultiTokenBatch
parent: Model
layout: page
---

# MintMultiTokenBatch model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getTo()** | **string[]** | The blockchain address to send the Multi Tokens to. |
**getTokenId()** | **string[][]** | The IDs of the Multi Tokens to be created. |
**getAmounts()** | **string[][]** | The amounts of the Multi Tokens to be created. |
**getData()** | **string** | Data in bytes | [optional]
**getContractAddress()** | **string** | The address of the Multi Token smart contract |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | [optional]

