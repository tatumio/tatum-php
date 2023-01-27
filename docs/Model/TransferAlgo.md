---
title: TransferAlgo
parent: Model
layout: page
---

# TransferAlgo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | The ID of the virtual account to send Algos from <br>Example: `61b3bffddfb389cde19c73be` |
**getAddress()** | **string** | The blockchain address to send Algos to <br>Example: `5YVZBUH3STSQ5ABCTLEIEIJ7QOZFILM2DLAEEA4ZL6CU55ODZIQXO5EMYM` |
**getAmount()** | **string** | The amount to send in Algos <br>Example: `10000` |
**getFee()** | **string** | The transaction fee in Algos <br>Example: `0.001` |
**getPrivateKey()** | **string** | The secret of the Algorand wallet (account). Secret, or signature Id must be present. <br>Example: `NBYMCVEEDFYV3TPWVRE6APE7PKHUJD4XAKXCKNCLKGUXOC3LFNJGZQCJCRA53HB7ZAHF6NFJH2QIVQ5USQNWG35QCJLD4KZ5IWMB24Q` |
**getCompliant()** | **bool** | Compliance check; if the withdrawal is not compliant, it will not be processed <br>Example: `false` | [optional]
**getPaymentId()** | **string** | The identifier of the Algo transfer that is shown on the virtual account for the created transaction <br>Example: `1234` | [optional]
**getSenderNote()** | **string** | The note for the recipient; must not contain spaces <br>Example: `Helloworld` | [optional]

