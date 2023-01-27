---
title: MintNftFlowMnemonic
parent: Model
layout: page
---

# MintNftFlowMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `FLOW`
**getTo()** | **string** | Blockchain address to send NFT token to. | ex.: `0xc1b45bc27b9c61c3`
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> | ex.: `https://my_token_data.com`
**getContractAddress()** | **string** | Address of NFT token | ex.: `17a50dad-bcb1-4f3d-ae2c-ea2bfb04419f`
**getAccount()** | **string** | Blockchain address of the sender account. | ex.: `0xc1b45bc27b9c61c3`
**getMnemonic()** | **string** | Mnemonic to generate private key of sender address. | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getIndex()** | **int** | Derivation index of sender address. | ex.: `0`

