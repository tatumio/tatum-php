---
title: MintNftFlowPK
parent: Model
layout: page
---

# MintNftFlowPK

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `FLOW` |
**getTo()** | **string** | Blockchain address to send NFT token to. <br>Example: `0xc1b45bc27b9c61c3` |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `https://my_token_data.com` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `17a50dad-bcb1-4f3d-ae2c-ea2bfb04419f` |
**getAccount()** | **string** | Blockchain address of the sender account. <br>Example: `0xc1b45bc27b9c61c3` |
**getPrivateKey()** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. <br>Example: `05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |

