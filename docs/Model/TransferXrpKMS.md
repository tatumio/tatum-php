---
title: TransferXrpKMS
parent: Model
layout: page
---

# TransferXrpKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `61b3bffddfb389cde19c73be` |
**getAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. <br>Example: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV` |
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV` |
**getAmount()** | **string** | Amount to be sent, in XRP. <br>Example: `10000` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getAttr()** | **string** | Destination tag of the recipient account, if any. Must be stringified uint32. <br>Example: `12355` | [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. <br>Example: `12355` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. <br>Example: `Sender note` | [optional]

