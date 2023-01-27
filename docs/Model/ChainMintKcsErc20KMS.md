---
title: ChainMintKcsErc20KMS
parent: Model
layout: page
---

# ChainMintKcsErc20KMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `KCS` |
**getAmount()** | **string** | Amount to be minted and transferred to the recipient. <br>Example: `100000` |
**getTo()** | **string** | Blockchain address to send ERC-20 tokens to. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getContractAddress()** | **string** | Address of ERC-20 token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]

