---
title: TransferXrpBlockchainAssetKMS
parent: Model
layout: page
---

# TransferXrpBlockchainAssetKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getTo()** | **string** | Blockchain address to send assets | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getAmount()** | **string** | Amount to be sent, in XRP. | ex.: `10000`
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | ex.: `10000` [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. | ex.: `12355` [optional]
**getDestinationTag()** | **int** | Destination tag of recipient account, if any. | ex.: `12355` [optional]
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to create trust line for. | ex.: `rsP3mgGb2tcYUrxiLFiHJiQXhsziegtwBc`
**getToken()** | **string** | Asset name. Must be 160bit HEX string, e.g. SHA1. | ex.: `DA39A3EE5E6B4B0D3255BFEF95601890AFD80709`

