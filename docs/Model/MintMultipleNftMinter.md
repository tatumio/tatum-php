---
title: MintMultipleNftMinter
parent: Model
layout: page
---

# MintMultipleNftMinter

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getTo()** | **string[]** | Blockchain address to send NFT token to. <br>Example: `[&quot;0x687422eEA2cB73B5d3e242bA5456b782919AFc85&quot;]` |
**getTokenId()** | **string[]** | ID of token to be created. <br>Example: `[&quot;123&quot;]` |
**getMinter()** | **string** | Address of NFT minter, which will be used to mint the tokens. From this address, transaction fees will be deducted. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `[&quot;https://my_token_data.com&quot;]` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFeeCurrency()** | **string** | (Celo only) The currency in which the transaction fee will be paid <br>Example: `null` | [optional]

