---
title: MintErc721Celo
parent: Model
layout: page
---

# MintErc721Celo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTokenId()** | **string** | ID of token to be created. |
**getTo()** | **string** | Blockchain address to send ERC721 token to |
**getContractAddress()** | **string** | Address of ERC721 token |
**getUrl()** | **string** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

