---
title: TransferXrpBlockchainAsset
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**getTo()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in XRP. |
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. | [optional]
**getDestinationTag()** | **int** | Destination tag of recipient account, if any. | [optional]
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to create trust line for. |
**getToken()** | **string** | Asset name. Must be 160bit HEX string, e.g. SHA1. |

[[Back to Index]](../index.md)
