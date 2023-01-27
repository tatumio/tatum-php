---
title: CreateTronTrc10BlockchainKMS
parent: Model
layout: page
---

# CreateTronTrc10BlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Sender address of TRON account in Base58 format. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getRecipient()** | **string** | Recipient address of created TRC 10 tokens. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getName()** | **string** | Name of the token. <br>Example: `My token` |
**getAbbreviation()** | **string** | Abbreviation of the token. <br>Example: `SYM` |
**getDescription()** | **string** | Description of the token. <br>Example: `My short description` |
**getUrl()** | **string** | URL of the token. <br>Example: `https://mytoken.com` |
**getTotalSupply()** | **float** | Total supply of the tokens. <br>Example: `100000` |
**getDecimals()** | **float** | Number of decimal places of the token. <br>Example: `10` |

