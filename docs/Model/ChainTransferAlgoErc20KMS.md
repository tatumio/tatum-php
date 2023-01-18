---
title: ChainTransferAlgoErc20KMS
parent: Model
layout: page
---

# ChainTransferAlgoErc20KMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getFrom()** | **string** | The blockchain address to send the fungible tokens from |
**getTo()** | **string** | The blockchain address to send the fungible tokens to |
**getContractAddress()** | **string** | The asset ID (the ID of the fungible tokens) |
**getAmount()** | **string** | The amount of the fungible tokens to be sent |
**getDigits()** | **float** | The number of decimal places that the fungible tokens have |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you are sending the fungible tokens from (the address that you specified in the <code>from</code> parameter); the transaction fee will be deducted from this address |

