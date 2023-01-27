---
title: BurnMultiTokenBatchKMSCelo
parent: Model
layout: page
---

# BurnMultiTokenBatchKMSCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `CELO` |
**getAccount()** | **string** | Address of holder <br>Example: `0x4b812a77b109A150C2Fc89eD133EaBC78bC9EC8f` |
**getTokenId()** | **string[]** | The IDs of the Multi Tokens to be destroyed. <br>Example: `[&quot;100000&quot;]` |
**getAmounts()** | **string[]** | The amounts of the Multi Tokens to be destroyed. <br>Example: `[&quot;100000&quot;]` |
**getContractAddress()** | **string** | The address of the Multi Token smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas <br>Example: `null` |

