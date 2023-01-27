---
title: ChainTransferSolanaSpl
parent: Model
layout: page
---

# ChainTransferSolanaSpl

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `SOL`
**getFrom()** | **string** | The blockchain address to send the fungible tokens from | ex.: `BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs`
**getTo()** | **string** | The blockchain address to send the fungible tokens to | ex.: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ`
**getContractAddress()** | **string** | The blockchain address of the fungible tokens | ex.: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ`
**getAmount()** | **string** | The amount of the fungible tokens to be sent | ex.: `100000`
**getDigits()** | **float** | The number of decimal places that the fungible tokens have | ex.: `18`
**getFromPrivateKey()** | **string** | The private key of the blockchain address that you are sending the fungible tokens from (the address that you specified in the <code>from</code> parameter); the transaction fee will be deducted from this address | ex.: `YdQ1iy2NYs93dtkHdz3ijDuhRJj6uXYAUZmixirCrgCsTMj42BN1Q1buYcGZaMxw5buk9VU5ogQ6zuzn8DMsGaf`
**getFeePayer()** | **string** | The blockchain address from which the fee will be deducted; if not set, defaults to the address that you specified in the <code>from</code> parameter | ex.: `BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs` [optional]
**getFeePayerPrivateKey()** | **string** | The private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the private key that you specified in the <code>fromPrivateKey</code> parameter | ex.: `YdQ1iy2NYs93dtkHdz3ijDuhRJj6uXYAUZmixirCrgCsTMj42BN1Q1buYcGZaMxw5buk9VU5ogQ6zuzn8DMsGaf` [optional]

