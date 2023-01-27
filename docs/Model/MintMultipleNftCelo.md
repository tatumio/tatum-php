---
title: MintMultipleNftCelo
parent: Model
layout: page
---

# MintMultipleNftCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `CELO` |
**getTo()** | **string[]** | Blockchain address to send NFT token to. <br>Example: `[&quot;0x687422eEA2cB73B5d3e242bA5456b782919AFc85&quot;]` |
**getTokenId()** | **string[]** | ID of token to be created. <br>Example: `[&quot;123&quot;]` |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `[&quot;https://my_token_data.com&quot;]` |
**getAuthorAddresses()** | **string[][]** | List of addresses for every token, where royalty cashback for every transfer of this NFT will be send. Royalties are paid in native blockchain currency CELO. <br>Example: `null` | [optional]
**getCashbackValues()** | **string[][]** | List of values for every token, which will be paid as a royalty for author of the NFT token with every token transfer. This is exact value in native blockchain currency. <br>Example: `null` | [optional]
**getContractAddress()** | **string** | Address of NFT token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |

