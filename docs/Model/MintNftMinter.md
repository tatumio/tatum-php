---
title: MintNftMinter
parent: Model
layout: page
---

# MintNftMinter

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getContractAddress()** | **string** | The blockchain address of the smart contract to build the NFT on <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMinter()** | **string** | The blockchain address of the Tatum NFT minter; this is the address that you added as an NFT minter to your NFT smart contract <br>Example: `0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94` |
**getTo()** | **string** | The blockchain address to send the NFT to <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getTokenId()** | **string** | The ID of the NFT <br>Example: `123` |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `https://my_token_data.com` |

