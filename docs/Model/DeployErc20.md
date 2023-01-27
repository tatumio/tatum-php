---
title: DeployErc20
parent: Model
layout: page
---

# DeployErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | Symbol of the ERC20 token | ex.: `ERC_SYMBOL`
**getName()** | **string** | Name of the ERC20 token | ex.: `MyERC20`
**getTotalCap()** | **string** | Max supply of ERC20 token. | ex.: `10000000` [optional]
**getSupply()** | **string** | Max supply of ERC20 token. | ex.: `10000000`
**getDigits()** | **float** | Number of decimal points | ex.: `18`
**getAddress()** | **string** | Address on XDC blockchain, where all created ERC20 tokens will be transferred. | ex.: `xdca0Ca9FF38Bad06eBe64f0fDfF279cAE35129F5C6`
**getFromPrivateKey()** | **string** | Private key of XDC account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

