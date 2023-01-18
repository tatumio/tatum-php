---
title: ChainTransferEthErc20KMS
parent: Model
layout: page
---

# ChainTransferEthErc20KMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | The blockchain address to send the fungible tokens to |
**getContractAddress()** | **string** | The blockchain address of the fungible token smart contract |
**getAmount()** | **string** | The amount of the fungible tokens to be sent |
**getDigits()** | **float** | The number of decimal places that the fungible tokens have; to find out how many decimal places are used in the fungible tokens, check out the <a href="https://apidoc.tatum.io/tag/Blockchain-utils#operation/SCGetContractAddress" target="_blank">smart contract</a> |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]

