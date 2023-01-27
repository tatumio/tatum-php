---
title: AccountSettingsXrpBlockchainKMS
parent: Model
layout: page
---

# AccountSettingsXrpBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Secret or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | ex.: `10000` [optional]
**getRippling()** | **bool** | Should be true, if an account is the issuer of assets. | ex.: `true` [optional]
**getRequireDestinationTag()** | **bool** | Should be true, if an account should support off-chain processing. | ex.: `true` [optional]

