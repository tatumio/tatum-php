---
title: TransferXrpBlockchain
parent: Model
layout: page
---

# TransferXrpBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getTo()** | **string** | Blockchain address to send assets | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getAmount()** | **string** | Amount to be sent, in XRP. | ex.: `10000`
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. | ex.: `snSFTHdvSYQKKkYntvEt8cnmZuPJB`
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | ex.: `10000` [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. | ex.: `12355` [optional]
**getDestinationTag()** | **int** | Destination tag of recipient account, if any. | ex.: `12355` [optional]

