---
title: MintMultipleNftKMSCelo
parent: Model
layout: page
---

# MintMultipleNftKMSCelo model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string[]** | Blockchain address to send NFT token to. |
**getTokenId()** | **string[]** | ID of token to be created. |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getAuthorAddresses()** | **string[][]** | List of addresses for every token, where royalty cashback for every transfer of this NFT will be send. Royalties are paid in native blockchain currency CELO. | [optional]
**getCashbackValues()** | **string[][]** | List of values for every token, which will be paid as a royalty for author of the NFT token with every token transfer. This is exact value in native blockchain currency. | [optional]
**getContractAddress()** | **string** | Address of NFT token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |

