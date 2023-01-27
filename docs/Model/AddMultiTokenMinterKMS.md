---
title: AddMultiTokenMinterKMS
parent: Model
layout: page
---

# AddMultiTokenMinterKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. <br>Example: `ETH` |
**getContractAddress()** | **string** | Address of MultiToken token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMinter()** | **string** | Address of MultiToken minter <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas, only valid for CELO chain. <br>Example: `null` | [optional]

