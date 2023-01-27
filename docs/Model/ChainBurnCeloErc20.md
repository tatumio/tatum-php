---
title: ChainBurnCeloErc20
parent: Model
layout: page
---

# ChainBurnCeloErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `CELO`
**getAmount()** | **string** | Amount of tokens to be destroyed. | ex.: `100000`
**getContractAddress()** | **string** | Address of ERC20 token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid | ex.: `null`

