---
title: GenerateAuctionKMS
parent: Model
layout: page
---

# GenerateAuctionKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `ETH`
**getFeeRecipient()** | **string** | Address of the recipient of the fee for the trade. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getAuctionFee()** | **float** | Percentage of the selling amount of the NFT asset. 100 - 1% | ex.: `150`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `1` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

