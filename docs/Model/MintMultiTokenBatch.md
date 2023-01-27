---
title: MintMultiTokenBatch
parent: Model
layout: page
---

# MintMultiTokenBatch

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `ETH` |
**getTo()** | **string[]** | The blockchain address to send the Multi Tokens to. <br>Example: `[&quot;0x687422eEA2cB73B5d3e242bA5456b782919AFc85&quot;]` |
**getTokenId()** | **string[][]** | The IDs of the Multi Tokens to be created. <br>Example: `[[&quot;100000&quot;,&quot;100001&quot;]]` |
**getAmounts()** | **string[][]** | The amounts of the Multi Tokens to be created. <br>Example: `[[&quot;100&quot;,&quot;100&quot;]]` |
**getData()** | **string** | Data in bytes <br>Example: `0x1234` | [optional]
**getContractAddress()** | **string** | The address of the Multi Token smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

