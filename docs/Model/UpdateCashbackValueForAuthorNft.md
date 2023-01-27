---
title: UpdateCashbackValueForAuthorNft
parent: Model
layout: page
---

# UpdateCashbackValueForAuthorNft

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ETH`
**getTokenId()** | **string** | The ID of the NFT to update royalty information for | ex.: `123`
**getContractAddress()** | **string** | The blockchain address of the NFT to update royalty information for | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getCashbackValue()** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 | ex.: `0.1`
**getFromPrivateKey()** | **string** | The private key of the NFT author's address | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

