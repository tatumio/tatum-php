---
title: GenerateAuction
parent: Model
layout: page
---

# GenerateAuction

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `ETH` |
**getFeeRecipient()** | **string** | Address of the recipient of the fee for the trade. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getAuctionFee()** | **float** | Percentage of the selling amount of the NFT asset. 100 - 1% <br>Example: `150` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

