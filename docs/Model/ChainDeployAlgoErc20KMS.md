---
title: ChainDeployAlgoErc20KMS
parent: Model
layout: page
---

# ChainDeployAlgoErc20KMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ALGO` |
**getSymbol()** | **string** | Symbol of the ERC20 token <br>Example: `ERC_SYMBOL` |
**getName()** | **string** | Name of the ERC20 token <br>Example: `MyERC20` |
**getTotalCap()** | **string** | Max supply of ERC20 token. <br>Example: `10000000` | [optional]
**getSupply()** | **string** | Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap. <br>Example: `10000000` |
**getDigits()** | **float** | Number of decimal points <br>Example: `18` |
**getAddress()** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. <br>Example: `52NRXAHUDA5RKC7Q6YYJHBINGTJB7NXLUVY3CSKOBLLNLTKCN2NGPRGTN0` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | **string** | The transaction fee in ALGO <br>Example: `0.001` |

