---
title: MintMultipleNftFlowMnemonic
parent: Model
layout: page
---

# MintMultipleNftFlowMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `FLOW` |
**getTo()** | **string[]** | Blockchain address to send NFT token to. <br>Example: `[&quot;0xc1b45bc27b9c61c3&quot;]` |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `[&quot;https://my_token_data.com&quot;]` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `17a50dad-bcb1-4f3d-ae2c-ea2bfb04419f` |
**getAccount()** | **string** | Blockchain address of the sender account. <br>Example: `0xc1b45bc27b9c61c3` |
**getMnemonic()** | **string** | Mnemonic to generate private key of sender address. <br>Example: `urge pulp usage sister evidence arrest palm math please chief egg abuse` |
**getIndex()** | **int** | Derivation index of sender address. <br>Example: `0` |

