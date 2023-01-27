---
title: DeployNftCeloKMS
parent: Model
layout: page
---

# DeployNftCeloKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `CELO` |
**getName()** | **string** | Name of the NFT token <br>Example: `My ERC721` |
**getSymbol()** | **string** | Symbol of the NFT token <br>Example: `ERC_SYMBOL` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getProvenance()** | **bool** | True if the contract is provenance percentage royalty type. False by default. <a href="https://github.com/tatumio/smart-contracts" target="_blank">Details and sources available here.</a> <br>Example: `false` | [optional]
**getCashback()** | **bool** | True if the contract is fixed price royalty type. False by default. <a href="https://github.com/tatumio/smart-contracts" target="_blank">Details and sources available here.</a> <br>Example: `false` | [optional]
**getPublicMint()** | **bool** | True if the contract is publicMint type. False by default. <br>Example: `true` | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |

