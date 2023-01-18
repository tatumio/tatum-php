---
title: BurnErc20Celo
parent: Model
layout: page
---

# BurnErc20Celo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount of tokens to be destroyed. |
**getContractAddress()** | **string** | Address of ERC721 token |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

