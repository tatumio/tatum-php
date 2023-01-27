---
title: MintMultipleNftKMSTron
parent: Model
layout: page
---

# MintMultipleNftKMSTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getTo()** | **string[]** | Blockchain address to send NFT token to. <br>Example: `[&quot;TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ&quot;]` |
**getAccount()** | **string** | Blockchain address to perform transaction from <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getTokenId()** | **string[]** | ID of token to be created. <br>Example: `[&quot;123&quot;]` |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `[&quot;https://my_token_data.com&quot;]` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) <br>Example: `600` |

