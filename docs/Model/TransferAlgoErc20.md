---
title: TransferAlgoErc20
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | The ID of the virtual account to send the ERC-20-equivalent Algorand tokens from |
**getAddress()** | **string** | The blockchain address to send the ERC-20-equivalent Algorand tokens to |
**getAmount()** | **string** | The amount of the ERC-20-equivalent Algorand tokens to send |
**getPrivateKey()** | **string** | The secret of the Algorand wallet (account). Secret, or signature Id must be present. |
**getCompliant()** | **bool** | Compliance check; if the withdrawal is not compliant, it will not be processed | [optional]
**getPaymentId()** | **string** | The identifier of the token transfer that is shown on the virtual account for the created transaction | [optional]
**getSenderNote()** | **string** | The note for the recipient; must not contain spaces | [optional]

