---
title: MintMultiTokenCelo
parent: Model
layout: page
---

# MintMultiTokenCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `CELO` |
**getTokenId()** | **string** | ID of token to be created. <br>Example: `100000` |
**getAmount()** | **string** | amount of token to be created. <br>Example: `100000` |
**getTo()** | **string** | Blockchain address to send Multi Token token to <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getContractAddress()** | **string** | Address of Multi Token token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getData()** | **string** | Data in bytes <br>Example: `0x1234` | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas <br>Example: `null` |

