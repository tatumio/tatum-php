---
title: TransferAlgoErc20
parent: Model
layout: page
---

# TransferAlgoErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | The ID of the virtual account to send the ERC-20-equivalent Algorand tokens from | ex.: `61b3bffddfb389cde19c73be`
**getAddress()** | **string** | The blockchain address to send the ERC-20-equivalent Algorand tokens to | ex.: `5YVZBUH3STSQ5ABCTLEIEIJ7QOZFILM2DLAEEA4ZL6CU55ODZIQXO5EMYM`
**getAmount()** | **string** | The amount of the ERC-20-equivalent Algorand tokens to send | ex.: `10000`
**getPrivateKey()** | **string** | The secret of the Algorand wallet (account). Secret, or signature Id must be present. | ex.: `NBYMCVEEDFYV3TPWVRE6APE7PKHUJD4XAKXCKNCLKGUXOC3LFNJGZQCJCRA53HB7ZAHF6NFJH2QIVQ5USQNWG35QCJLD4KZ5IWMB24Q`
**getCompliant()** | **bool** | Compliance check; if the withdrawal is not compliant, it will not be processed | ex.: `false` [optional]
**getPaymentId()** | **string** | The identifier of the token transfer that is shown on the virtual account for the created transaction | ex.: `1234` [optional]
**getSenderNote()** | **string** | The note for the recipient; must not contain spaces | ex.: `Helloworld` [optional]

