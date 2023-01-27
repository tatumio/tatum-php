---
title: DeployNft
parent: Model
layout: page
---

# DeployNft

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getName()** | **string** | Name of the NFT token <br>Example: `My ERC721` |
**getSymbol()** | **string** | Symbol of the NFT token <br>Example: `ERC_SYMBOL` |
**getFromPrivateKey()** | **string** | Private key of account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getProvenance()** | **bool** | True if the contract is provenance percentage royalty type. False by default. <a href="https://github.com/tatumio/smart-contracts" target="_blank">Details and sources available here.</a> <br>Example: `false` | [optional]
**getCashback()** | **bool** | True if the contract is fixed price royalty type. False by default. <a href="https://github.com/tatumio/smart-contracts" target="_blank">Details and sources available here.</a> <br>Example: `false` | [optional]
**getPublicMint()** | **bool** | True if the contract is publicMint type. False by default. <br>Example: `true` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

