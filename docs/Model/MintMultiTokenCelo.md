---
title: MintMultiTokenCelo
parent: Model
layout: page
---

# MintMultiTokenCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. | ex.: `CELO`
**getTokenId()** | **string** | ID of token to be created. | ex.: `100000`
**getAmount()** | **string** | amount of token to be created. | ex.: `100000`
**getTo()** | **string** | Blockchain address to send Multi Token token to | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getContractAddress()** | **string** | Address of Multi Token token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getData()** | **string** | Data in bytes | ex.: `0x1234` [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas | ex.: `null`

