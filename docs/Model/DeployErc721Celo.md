---
title: DeployErc721Celo
parent: Model
layout: page
---

# DeployErc721Celo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Name of the ERC721 token <br>Example: `My ERC721` |
**getSymbol()** | **string** | Symbol of the ERC721 token <br>Example: `ERC_SYMBOL` |
**getFromPrivateKey()** | **string** | Private key of Celo account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas <br>Example: `null` |

