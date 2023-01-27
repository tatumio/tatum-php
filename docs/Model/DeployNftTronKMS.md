---
title: DeployNftTronKMS
parent: Model
layout: page
---

# DeployNftTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getAccount()** | **string** | Blockchain address to perform transaction from <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getName()** | **string** | Name of the NFT token <br>Example: `My ERC721` |
**getSymbol()** | **string** | Symbol of the NFT token <br>Example: `ERC_SYMBOL` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX); deployment of a smart contract on TRON costs around 580 TRX <br>Example: `600` |

