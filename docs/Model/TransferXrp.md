---
title: TransferXrp
parent: Model
layout: page
---

# TransferXrp

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `61b3bffddfb389cde19c73be`
**getAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getAddress()** | **string** | Blockchain address to send assets | ex.: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV`
**getAmount()** | **string** | Amount to be sent, in XRP. | ex.: `10000`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getAttr()** | **string** | Destination tag of the recipient account, if any. Must be stringified uint32. | ex.: `12355` [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. | ex.: `12355` [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSecret()** | **string** | Secret for account. Secret, or signature Id must be present. | ex.: `snSFTHdvSYQKKkYntvEt8cnmZuPJB`
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | ex.: `Sender note` [optional]

