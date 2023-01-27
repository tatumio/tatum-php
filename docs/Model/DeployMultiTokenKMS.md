---
title: DeployMultiTokenKMS
parent: Model
layout: page
---

# DeployMultiTokenKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. | ex.: `ETH`
**getUri()** | **string** | URI of the Multi Token token | ex.: `example.com`
**getPublicMint()** | **bool** | True if the contract is publicMint type | ex.: `true` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

