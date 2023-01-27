---
title: AccountSettingsXrpBlockchainKMS
parent: Model
layout: page
---

# AccountSettingsXrpBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. <br>Example: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Secret or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. <br>Example: `10000` | [optional]
**getRippling()** | **bool** | Should be true, if an account is the issuer of assets. <br>Example: `true` | [optional]
**getRequireDestinationTag()** | **bool** | Should be true, if an account should support off-chain processing. <br>Example: `true` | [optional]

