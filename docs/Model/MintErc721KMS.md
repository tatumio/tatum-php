---
title: MintErc721KMS
parent: Model
layout: page
---

# MintErc721KMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTokenId()** | **string** | ID of token to be created. <br>Example: `100000` |
**getTo()** | **string** | Blockchain address to send ERC721 token to <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getContractAddress()** | **string** | Address of ERC721 token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getUrl()** | **string** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. <br>Example: `https://my_token_data.com` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

