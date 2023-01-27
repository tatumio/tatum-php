---
title: TransferXrpBlockchainKMS
parent: Model
layout: page
---

# TransferXrpBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. <br>Example: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV` |
**getTo()** | **string** | Blockchain address to send assets <br>Example: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV` |
**getAmount()** | **string** | Amount to be sent, in XRP. <br>Example: `10000` |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. <br>Example: `10000` | [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. <br>Example: `12355` | [optional]
**getDestinationTag()** | **int** | Destination tag of recipient account, if any. <br>Example: `12355` | [optional]

