---
title: EstimateFeeTransferFromCustodial
parent: Model
layout: page
---

# EstimateFeeTransferFromCustodial

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to estimate the fee for <br>Example: `null` |
**getType()** | **string** | The type of the transaction <br>Example: `null` |
**getSender()** | **string** | The blockchain address of the sender <br>Example: `0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef` |
**getRecipient()** | **string** | The blockchain address of the recipient <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getCustodialAddress()** | **string** | The blockchain address of the custodial wallet contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getTokenType()** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), <code>2</code> for Multi Tokens (ERC-1155 or equivalent), or <code>3</code> for native blockchain currencies. <br>Example: `0` |
**getAmount()** | **string** | If the asset to transfer is a fungible token, Multi Token, or a native blockchain currency, set this parameter to the amount to transfer. If the asset to transfer is an NFT, set this parameter to <code>1</code>. <br>Example: `100000` |
**getContractAddress()** | **string** | (Only if the asset to transfer is a fungible token) The address of the smart contract of the token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]

