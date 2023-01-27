---
title: UpdateFeeRecipient
parent: Model
layout: page
---

# UpdateFeeRecipient

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `ETH`
**getContractAddress()** | **string** | Address of the marketplace smart contract. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getFeeRecipient()** | **string** | Recipient address of the marketplace fee. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `1` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

