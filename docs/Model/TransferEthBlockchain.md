---
title: TransferEthBlockchain
parent: Model
layout: page
---

# TransferEthBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | The blockchain address of the recipient <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getAmount()** | **string** | The amount to be sent <br>Example: `100000` |
**getCurrency()** | [**\Tatum\Model\Erc20Currency**](../Erc20Currency) |  <br>Example: `null` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address of the sender; the fee will be deducted from this address <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format <br>Example: `4d79206e6f746520746f2074686520726563697069656e74` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]

