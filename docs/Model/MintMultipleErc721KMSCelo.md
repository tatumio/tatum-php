---
title: MintMultipleErc721KMSCelo
parent: Model
layout: page
---

# MintMultipleErc721KMSCelo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string[]** | Blockchain address to send ERC721 token to. |
**getTokenId()** | **string[]** | ID of token to be created. |
**getUrl()** | **string[]** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. |
**getContractAddress()** | **string** | Address of ERC721 token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

