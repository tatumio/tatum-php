---
title: TransferKlay20Blockchain
parent: Model
layout: page
---

# TransferKlay20Blockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send ERC20 token to <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getAmount()** | **string** | Amount to be sent. <br>Example: `100000` |
**getContractAddress()** | **string** | Address of ERC20 token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getDigits()** | **float** | Number of decimal points that ERC20 token has. <br>Example: `18` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Klaytn transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\TransferKlay20BlockchainFee**](../TransferKlay20BlockchainFee) |  <br>Example: `null` | [optional]

