---
title: BurnMultiTokenCelo
parent: Model
layout: page
---

# BurnMultiTokenCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `CELO` |
**getAccount()** | **string** | Address of holder <br>Example: `0x4b812a77b109A150C2Fc89eD133EaBC78bC9EC8f` |
**getTokenId()** | **string** | ID of token to be destroyed. <br>Example: `100000` |
**getAmount()** | **string** | amount of token to be destroyed. <br>Example: `100000` |
**getContractAddress()** | **string** | Address of Multi Token token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas <br>Example: `null` |

