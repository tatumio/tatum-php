---
title: ChainTransferSolanaSplKMS
parent: Model
layout: page
---

# ChainTransferSolanaSplKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getFrom()** | **string** | The blockchain address to send the fungible tokens from <br>Example: `BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs` |
**getTo()** | **string** | The blockchain address to send the fungible tokens to <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getContractAddress()** | **string** | The blockchain address of the fungible tokens <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getAmount()** | **string** | The amount of the fungible tokens to be sent <br>Example: `100000` |
**getDigits()** | **float** | The number of decimal places that the fungible tokens have <br>Example: `18` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you are sending the fungible tokens from (the address that you specified in the <code>from</code> parameter); the transaction fee will be deducted from this address <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFeePayer()** | **string** | The blockchain address from which the fee will be deducted; if not set, defaults to the address that you specified in the <code>from</code> parameter <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` | [optional]
**getFeePayerSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the signature ID that you specified in the <code>signatureId</code> parameter <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` | [optional]

