---
title: SettleAuction
parent: Model
layout: page
---

# SettleAuction

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ETH`
**getContractAddress()** | **string** | The blockchain address of the auction smart contract | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getId()** | **string** | The ID of the auction | ex.: `null`
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `1` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

