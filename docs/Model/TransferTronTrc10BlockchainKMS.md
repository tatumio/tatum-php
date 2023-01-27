---
title: TransferTronTrc10BlockchainKMS
parent: Model
layout: page
---

# TransferTronTrc10BlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Sender address of TRON account in Base58 format. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getTo()** | **string** | Recipient address of TRON account in Base58 format. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getTokenId()** | **string** | ID of the token to transfer. | ex.: `1000538`
**getAmount()** | **string** | Amount to be sent in TRX. | ex.: `100000`

