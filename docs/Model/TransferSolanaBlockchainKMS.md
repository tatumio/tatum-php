---
title: TransferSolanaBlockchainKMS
parent: Model
layout: page
---

# TransferSolanaBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Blockchain address to send assets from | ex.: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ`
**getTo()** | **string** | Blockchain address to send assets to | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getAmount()** | **string** | Amount to be sent in SOL. | ex.: `100000`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFeePayer()** | **string** | Blockchain address to pay the fee for the transaction from | ex.: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` [optional]
**getFeePayerSignatureId()** | **string** | Identifier of the private key used for paying the gas costs in signing application. Defaults to the signatureId. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` [optional]

