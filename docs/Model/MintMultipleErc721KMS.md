---
title: MintMultipleErc721KMS
parent: Model
layout: page
---

# MintMultipleErc721KMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string[]** | Blockchain address to send ERC721 token to. |
**getTokenId()** | **string[]** | ID of token to be created. |
**getUrl()** | **string[]** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. |
**getContractAddress()** | **string** | Address of ERC721 token |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | [optional]

