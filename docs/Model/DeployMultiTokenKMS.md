---
title: DeployMultiTokenKMS
parent: Model
layout: page
---

# DeployMultiTokenKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `ETH` |
**getUri()** | **string** | URI of the Multi Token token <br>Example: `example.com` |
**getPublicMint()** | **bool** | True if the contract is publicMint type <br>Example: `true` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

