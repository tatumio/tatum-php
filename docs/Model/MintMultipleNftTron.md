---
title: MintMultipleNftTron
parent: Model
layout: page
---

# MintMultipleNftTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getTo()** | **string[]** | Blockchain address to send NFT token to. <br>Example: `[&quot;TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ&quot;]` |
**getTokenId()** | **string[]** | ID of token to be created. <br>Example: `[&quot;123&quot;]` |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `[&quot;https://my_token_data.com&quot;]` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) <br>Example: `600` |

