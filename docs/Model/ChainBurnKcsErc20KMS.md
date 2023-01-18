---
title: ChainBurnKcsErc20KMS
parent: Model
layout: page
---

# ChainBurnKcsErc20KMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getAmount()** | **string** | Amount of tokens to be destroyed. |
**getContractAddress()** | **string** | Address of ERC20 token |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

