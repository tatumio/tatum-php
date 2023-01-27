---
title: ChainDeployAlgoErc20
parent: Model
layout: page
---

# ChainDeployAlgoErc20

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
**getFromPrivateKey()** | **string** | Private key of Ethereum account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. <br>Example: `GDNQECUM2JDPTA4KXNSXHQBAYL56FDZ73NXCQ2OLB32PN2G5BLNO5GY3QD2BQOYVBPYPMMETQUGTJUQ7W3V2K4NRJFHAVVWVZVBG5G2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | **string** | The transaction fee in ALGO <br>Example: `0.001` |

