---
title: ChainTransferAlgoErc20KMS
parent: Model
layout: page
---

# ChainTransferAlgoErc20KMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ALGO` |
**getFrom()** | **string** | The blockchain address to send the fungible tokens from <br>Example: `NTAESFCB3WOD7SAOL42KSPVARLB3JFA3MNX3AESWHYVT2RMYDVZI6YLG4Y` |
**getTo()** | **string** | The blockchain address to send the fungible tokens to <br>Example: `TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4` |
**getContractAddress()** | **string** | The asset ID (the ID of the fungible tokens) <br>Example: `1` |
**getAmount()** | **string** | The amount of the fungible tokens to be sent <br>Example: `100000` |
**getDigits()** | **float** | The number of decimal places that the fungible tokens have <br>Example: `18` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you are sending the fungible tokens from (the address that you specified in the <code>from</code> parameter); the transaction fee will be deducted from this address <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |

