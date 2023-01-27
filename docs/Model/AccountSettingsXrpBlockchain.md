---
title: AccountSettingsXrpBlockchain
parent: Model
layout: page
---

# AccountSettingsXrpBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. | ex.: `snSFTHdvSYQKKkYntvEt8cnmZuPJB`
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | ex.: `10000` [optional]
**getRippling()** | **bool** | Should be true, if an account is the issuer of assets. | ex.: `true` [optional]
**getRequireDestinationTag()** | **bool** | Should be true, if an account should support off-chain processing. | ex.: `true` [optional]

