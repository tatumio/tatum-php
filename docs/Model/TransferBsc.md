---
title: TransferBsc
parent: Model
layout: page
---

# TransferBsc model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getPrivateKey()** | **string** | Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderAccountId()** | **string** | Sender account ID |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]
**getGasLimit()** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. | [optional]
**getGasPrice()** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. | [optional]

