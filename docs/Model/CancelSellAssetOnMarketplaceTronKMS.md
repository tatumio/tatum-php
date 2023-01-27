---
title: CancelSellAssetOnMarketplaceTronKMS
parent: Model
layout: page
---

# CancelSellAssetOnMarketplaceTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `TRON` |
**getContractAddress()** | **string** | Address of the marketplace smart contract. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getFrom()** | **string** | Address of the recipient of the fee for the trade. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getErc20Address()** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` | [optional]
**getFeeLimit()** | **float** | Fee in TRX to be paid. <br>Example: `0.01` |

