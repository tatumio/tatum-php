---
title: CancelAuctionCelo
parent: Model
layout: page
---

# CancelAuctionCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `CELO` |
**getContractAddress()** | **string** | The blockchain address of the auction smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getId()** | **string** | The ID of the auction <br>Example: `null` |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]

