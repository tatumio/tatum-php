---
title: CreateTronTrc20BlockchainKMS
parent: Model
layout: page
---

# CreateTronTrc20BlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Sender address of TRON account in Base58 format. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getRecipient()** | **string** | Recipient address of created TRC20 tokens. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getName()** | **string** | Name of the token. | ex.: `My token`
**getSymbol()** | **string** | Symbol of the token. | ex.: `SYM`
**getTotalSupply()** | **float** | Total supply of the tokens. | ex.: `100000`
**getDecimals()** | **float** | Number of decimal places of the token. | ex.: `10`

