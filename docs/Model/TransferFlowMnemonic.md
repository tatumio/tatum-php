---
title: TransferFlowMnemonic
parent: Model
layout: page
---

# TransferFlowMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `61b3bffddfb389cde19c73be`
**getAccount()** | **string** | Blockchain account to send from | ex.: `0x955cd3f17b2fd8ad`
**getAddress()** | **string** | Blockchain address to send assets | ex.: `0x955cd3f17b2fd8ae`
**getAmount()** | **string** | Amount to be sent, in Flow. | ex.: `10000`
**getMnemonic()** | **string** | Mnemonic to generate private key. | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getIndex()** | **float** | Index to the specific address from mnemonic. | ex.: `null`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | ex.: `Sender note` [optional]

