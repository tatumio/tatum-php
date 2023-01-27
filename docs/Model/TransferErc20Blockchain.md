---
title: TransferErc20Blockchain
parent: Model
layout: page
---

# TransferErc20Blockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send ERC20 token to <br>Example: `xdc687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getAmount()** | **string** | Amount to be sent. <br>Example: `100000` |
**getContractAddress()** | **string** | Address of ERC20 token <br>Example: `xdc687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getDigits()** | **float** | Number of decimal points that ERC20 token has. <br>Example: `18` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

