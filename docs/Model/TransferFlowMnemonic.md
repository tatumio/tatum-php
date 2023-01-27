---
title: TransferFlowMnemonic
parent: Model
layout: page
---

# TransferFlowMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `61b3bffddfb389cde19c73be` |
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `0x955cd3f17b2fd8ae` |
**getAmount()** | **string** | Amount to be sent, in Flow. <br>Example: `10000` |
**getMnemonic()** | **string** | Mnemonic to generate private key. <br>Example: `urge pulp usage sister evidence arrest palm math please chief egg abuse` |
**getIndex()** | **float** | Index to the specific address from mnemonic. <br>Example: `null` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. <br>Example: `Sender note` | [optional]

