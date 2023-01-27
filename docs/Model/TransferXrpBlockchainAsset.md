---
title: TransferXrpBlockchainAsset
parent: Model
layout: page
---

# TransferXrpBlockchainAsset

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. <br>Example: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV` |
**getTo()** | **string** | Blockchain address to send assets <br>Example: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV` |
**getAmount()** | **string** | Amount to be sent, in XRP. <br>Example: `10000` |
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. <br>Example: `snSFTHdvSYQKKkYntvEt8cnmZuPJB` |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. <br>Example: `10000` | [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. <br>Example: `12355` | [optional]
**getDestinationTag()** | **int** | Destination tag of recipient account, if any. <br>Example: `12355` | [optional]
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to create trust line for. <br>Example: `rsP3mgGb2tcYUrxiLFiHJiQXhsziegtwBc` |
**getToken()** | **string** | Asset name. Must be 160bit HEX string, e.g. SHA1. <br>Example: `DA39A3EE5E6B4B0D3255BFEF95601890AFD80709` |

