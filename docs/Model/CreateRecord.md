---
title: CreateRecord
parent: Model
layout: page
---

# CreateRecord

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | The data to be stored on the blockchain <br>Example: `My example log data` |
**getChain()** | **string** | The blockchain to store the data on <br>Example: `ETH` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getFrom()** | **string** | (Elrond only; required) The blockchain address from which the transaction will be made<br/>This is a mandatory parameter for Elrond. Do not use it with any other blockchain. <br>Example: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7` | [optional]
**getTo()** | **string** | The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFromShardId()** | **float** | (Harmony only) The ID of the shard from which the data should be read <br>Example: `null` | [optional]
**getToShardId()** | **float** | (Harmony only) The ID of the shard to which the data should be recorded <br>Example: `null` | [optional]
**getEthFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

