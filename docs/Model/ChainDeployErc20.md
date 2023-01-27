---
title: ChainDeployErc20
parent: Model
layout: page
---

# ChainDeployErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ETH`
**getSymbol()** | **string** | Symbol of the ERC20 token | ex.: `ERC_SYMBOL`
**getName()** | **string** | Name of the ERC20 token | ex.: `MyERC20`
**getTotalCap()** | **string** | Max supply of ERC20 token. | ex.: `10000000` [optional]
**getSupply()** | **string** | Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap. | ex.: `10000000`
**getDigits()** | **float** | Number of decimal points | ex.: `18`
**getAddress()** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. | ex.: `0xa0Ca9FF38Bad06eBe64f0fDfF279cAE35129F5C6`
**getFromPrivateKey()** | **string** | Private key of Ethereum account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

