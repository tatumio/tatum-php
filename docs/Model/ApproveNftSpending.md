---
title: ApproveNftSpending
parent: Model
layout: page
---

# ApproveNftSpending

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ETH`
**getSpender()** | **string** | The blockchain address of the auction/marketplace smart contract | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getIsErc721()** | **bool** | Set to "true" if the asset is an NFT; set to "false" is the asset is a Multi Token | ex.: `true`
**getTokenId()** | **string** | The ID of the asset (NFT or Multi Token) | ex.: `100000`
**getContractAddress()** | **string** | The blockchain address of the smart contract from which the asset (NFT or Multi Token) was minted | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `1` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

