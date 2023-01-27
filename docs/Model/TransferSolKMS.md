---
title: TransferSolKMS
parent: Model
layout: page
---

# TransferSolKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `61b3bffddfb389cde19c73be`
**getFrom()** | **string** | Blockchain account to send from | ex.: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ`
**getAddress()** | **string** | Blockchain address to send assets | ex.: `9B5XszUGdMaxCZ7uSQhPzdks5ZQSmWxrmzCSvtJ6Ns6g`
**getAmount()** | **string** | Amount to be sent, in SOL. | ex.: `10000`
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFee()** | **string** | Fee to be charged for the operation. For SOL, fee is decided by the blockchain, but default SOL fee is 0.000005. This fee will be only charged on top of the withdrawal amount to the virtual account. | ex.: `10000` [optional]
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | ex.: `Sender note` [optional]

