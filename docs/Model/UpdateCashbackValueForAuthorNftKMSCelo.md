---
title: UpdateCashbackValueForAuthorNftKMSCelo
parent: Model
layout: page
---

# UpdateCashbackValueForAuthorNftKMSCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `CELO`
**getTokenId()** | **string** | The ID of the NFT to update royalty information for | ex.: `123`
**getContractAddress()** | **string** | The blockchain address of the NFT to update royalty information for | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getCashbackValue()** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 | ex.: `0.1`
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid | ex.: `null`
**getSignatureId()** | **string** | The KMS identifier of the private key of the NFT author's address | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the NFT author's address that was generated from the mnemonic | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]

