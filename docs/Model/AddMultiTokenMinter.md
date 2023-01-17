---
title: AddMultiTokenMinter
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getContractAddress()** | **string** | Address of MultiToken token |
**getMinter()** | **string** | Address of MultiToken minter |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas, only valid for CELO chain. | [optional]

[[Back to Index]](../index.md)
