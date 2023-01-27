---
title: BuyAssetOnMarketplaceCelo
parent: Model
layout: page
---

# BuyAssetOnMarketplaceCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `CELO` |
**getContractAddress()** | **string** | The blockchain address of the marketplace smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getListingId()** | **string** | The ID of the listing with the asset that you want to buy <br>Example: `null` |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getAmount()** | **string** | (Only if you pay with the native blockchain currency) The price of the asset that you want to buy plus the marketplace fee. Do not use if you pay with fungible tokens. <br>Example: `1` | [optional]
**getErc20Address()** | **string** | (Only if you pay with the fungible tokens) The blockchain address of the fungible tokens. Do not use if you pay with the native blockchain currency. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getBuyer()** | **string** | (Only if you want to buy the asset on behalf of someone else and this person wants to pay with the fungible tokens; for example, for buying the asset from a custodial wallet address) The blockchain address of the buyer on whose behalf you are buying the asset<br/>The buyer must <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the marketplace smart contract to access their tokens</a> before you make the purchase. <br>Example: `0x587422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

