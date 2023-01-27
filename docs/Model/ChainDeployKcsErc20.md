---
title: ChainDeployKcsErc20
parent: Model
layout: page
---

# ChainDeployKcsErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `KCS` |
**getSymbol()** | **string** | Symbol of the ERC20 token <br>Example: `ERC_SYMBOL` |
**getName()** | **string** | Name of the ERC20 token <br>Example: `MyERC20` |
**getTotalCap()** | **string** | Max supply of ERC20 token. <br>Example: `10000000` | [optional]
**getSupply()** | **string** | Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap. <br>Example: `10000000` |
**getDigits()** | **float** | Number of decimal points <br>Example: `18` |
**getAddress()** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. <br>Example: `0xa0Ca9FF38Bad06eBe64f0fDfF279cAE35129F5C6` |
**getFromPrivateKey()** | **string** | Private key of Ethereum account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

