---
title: ApproveErc20
parent: Model
layout: page
---

# ApproveErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ETH`
**getContractAddress()** | **string** | The address of the smart contract | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getSpender()** | **string** | The blockchain address to be allowed to transfer or burn the fungible tokens | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getAmount()** | **string** | The amount of the tokens allowed to be transferred or burnt | ex.: `100000`
**getFromPrivateKey()** | **string** | The private key of the smart contract's owner; the fee will be deducted from the owner's address | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]

