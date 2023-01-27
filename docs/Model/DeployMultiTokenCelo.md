---
title: DeployMultiTokenCelo
parent: Model
layout: page
---

# DeployMultiTokenCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. | ex.: `CELO`
**getUri()** | **string** | URI of the Multi Token contract | ex.: `example.com`
**getPublicMint()** | **bool** | True if the contract is publicMint type | ex.: `true` [optional]
**getFromPrivateKey()** | **string** | Private key of account address, from which gas for deployment of ERC1155 will be paid. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas | ex.: `null`

