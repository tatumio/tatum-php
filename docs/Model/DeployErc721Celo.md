---
title: DeployErc721Celo
parent: Model
layout: page
---

# DeployErc721Celo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Name of the ERC721 token |
**getSymbol()** | **string** | Symbol of the ERC721 token |
**getFromPrivateKey()** | **string** | Private key of Celo account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

