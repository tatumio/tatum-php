---
title: DeployMultiTokenCelo
parent: Model
layout: page
---

# DeployMultiTokenCelo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getUri()** | **string** | URI of the Multi Token contract |
**getPublicMint()** | **bool** | True if the contract is publicMint type | [optional]
**getFromPrivateKey()** | **string** | Private key of account address, from which gas for deployment of ERC1155 will be paid. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

