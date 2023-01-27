---
title: MintMultiTokenBatchKMS
parent: Model
layout: page
---

# MintMultiTokenBatchKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. | ex.: `ETH`
**getTo()** | **string[]** | The blockchain address to send the Multi Tokens to. | ex.: `[&quot;0x687422eEA2cB73B5d3e242bA5456b782919AFc85&quot;]`
**getTokenId()** | **string[][]** | The IDs of the Multi Tokens to be created. | ex.: `[[&quot;100000&quot;,&quot;100001&quot;]]`
**getAmounts()** | **string[][]** | The amounts of the Multi Tokens to be created. | ex.: `[[&quot;100&quot;,&quot;100&quot;]]`
**getData()** | **string** | Data in bytes | ex.: `0x1234` [optional]
**getContractAddress()** | **string** | The address of the Multi Token smart contract | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

