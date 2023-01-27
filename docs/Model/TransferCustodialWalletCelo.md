---
title: TransferCustodialWalletCelo
parent: Model
layout: page
---

# TransferCustodialWalletCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `CELO` |
**getCustodialAddress()** | **string** | The gas pump address that transfers the asset; this is the address that you precalculated and activated earlier and that is assigned to a customer in your custodial application; this is not the "master address" <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getRecipient()** | **string** | The blockchain address that receives the asset <br>Example: `0xe242bA5456b782919AFc85687422eEA2cB73B5d3` |
**getContractType()** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), <code>2</code> for Multi Tokens (ERC-1155 or equivalent), or <code>3</code> for native blockchain currencies. <br>Example: `0` |
**getTokenAddress()** | **string** | (Only if the asset is a fungible token, NFT, or Multi Token) The address of the token to transfer. Do not use if the asset is a native blockchain currency. <br>Example: `0x782919AFc85eEA2cB736874225456bB5d3e242bA` | [optional]
**getAmount()** | **string** | (Only if the asset is a fungible token, Multi Token, or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT. <br>Example: `100000` | [optional]
**getTokenId()** | **string** | (Only if the asset is a Multi Token or NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency. <br>Example: `100000` | [optional]
**getFromPrivateKey()** | **string** | The private key of the blockchain address that owns the gas pump address ("master address") <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid <br>Example: `null` | [optional] [default to 'CELO']
**getNonce()** | **float** | The nonce to be set to the transfer transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

