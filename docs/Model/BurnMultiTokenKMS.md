---
title: BurnMultiTokenKMS
parent: Model
layout: page
---

# BurnMultiTokenKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getAccount()** | **string** | Address of holder |
**getTokenId()** | **string** | ID of token to be destroyed. |
**getAmount()** | **string** | amount of token to be destroyed. |
**getData()** | **string** | Data in bytes | [optional]
**getContractAddress()** | **string** | Address of Multi Token token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | [optional]

