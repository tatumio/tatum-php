---
title: DeployMultiTokenCeloKMS
parent: Model
layout: page
---

# DeployMultiTokenCeloKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. | ex.: `CELO`
**getUri()** | **string** | URI of the Multi Token contract | ex.: `example.com`
**getPublicMint()** | **bool** | True if the contract is publicMint type | ex.: `true` [optional]
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** |  | ex.: `null` [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas | ex.: `null`

