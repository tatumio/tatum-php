---
title: MintErc20Celo
parent: Model
layout: page
---

# MintErc20Celo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount to be minted and transfered to the recipient. <br>Example: `100000` |
**getTo()** | **string** | Blockchain address to send ERC-20 tokens to. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getContractAddress()** | **string** | Address of ERC-20 token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas <br>Example: `null` |

