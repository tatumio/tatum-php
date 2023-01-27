---
title: AddMultiTokenMinter
parent: Model
layout: page
---

# AddMultiTokenMinter

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `ETH` |
**getContractAddress()** | **string** | Address of MultiToken token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMinter()** | **string** | Address of MultiToken minter <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas, only valid for CELO chain. <br>Example: `null` | [optional]

