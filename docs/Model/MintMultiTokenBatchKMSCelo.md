---
title: MintMultiTokenBatchKMSCelo
parent: Model
layout: page
---

# MintMultiTokenBatchKMSCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `CELO` |
**getTo()** | **string[]** | The blockchain address to send the Multi Tokens to. <br>Example: `[&quot;0x687422eEA2cB73B5d3e242bA5456b782919AFc85&quot;]` |
**getTokenId()** | **string[][]** | The IDs of the Multi Tokens to be created. <br>Example: `[[&quot;100000&quot;,&quot;100001&quot;]]` |
**getAmounts()** | **string[][]** | The amounts of the Multi Tokens to be created. <br>Example: `[[&quot;100&quot;,&quot;100&quot;]]` |
**getData()** | **string** | Data in bytes <br>Example: `0x1234` | [optional]
**getContractAddress()** | **string** | The address of the Multi Token smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas <br>Example: `null` |

