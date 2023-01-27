---
title: ChainDeployKcsErc20KMS
parent: Model
layout: page
---

# ChainDeployKcsErc20KMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `KCS` |
**getSymbol()** | **string** | Symbol of the ERC20 token <br>Example: `ERC_SYMBOL` |
**getName()** | **string** | Name of the ERC20 token <br>Example: `MyERC20` |
**getTotalCap()** | **string** | Max supply of ERC20 token. <br>Example: `10000000` | [optional]
**getSupply()** | **string** | Max supply of ERC20 token. <br>Example: `10000000` |
**getDigits()** | **float** | Number of decimal points <br>Example: `18` |
**getAddress()** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. <br>Example: `0xa0Ca9FF38Bad06eBe64f0fDfF279cAE35129F5C6` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

