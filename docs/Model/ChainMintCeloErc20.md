---
title: ChainMintCeloErc20
parent: Model
layout: page
---

# ChainMintCeloErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `CELO` |
**getAmount()** | **string** | Amount to be minted and transferred to the recipient. <br>Example: `100000` |
**getTo()** | **string** | Blockchain address to send ERC-20 tokens to. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getContractAddress()** | **string** | Address of ERC-20 token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |

