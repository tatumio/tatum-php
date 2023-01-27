---
title: DeployErc721
parent: Model
layout: page
---

# DeployErc721

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Name of the ERC721 token <br>Example: `My ERC721` |
**getSymbol()** | **string** | Symbol of the ERC721 token <br>Example: `ERC_SYMBOL` |
**getFromPrivateKey()** | **string** | Private key of Ethereum account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

