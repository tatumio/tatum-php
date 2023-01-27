---
title: MintErc721KMSCelo
parent: Model
layout: page
---

# MintErc721KMSCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTokenId()** | **string** | ID of token to be created. | ex.: `100000`
**getTo()** | **string** | Blockchain address to send ERC721 token to | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getContractAddress()** | **string** | Address of ERC721 token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getUrl()** | **string** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. | ex.: `https://my_token_data.com`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas | ex.: `null`

