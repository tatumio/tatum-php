---
title: TransferKCSMnemonic
parent: Model
layout: page
---

# TransferKCSMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getAddress()** | **string** | Blockchain address to send assets | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getAmount()** | **string** | Amount to be sent in KCS. | ex.: `100000`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getIndex()** | **int** | Derivation index of sender address. | ex.: `0`
**getGasLimit()** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. | ex.: `40000` [optional]
**getGasPrice()** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. | ex.: `20` [optional]
**getMnemonic()** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderAccountId()** | **string** | Sender account ID | ex.: `5e68c66581f2ee32bc354087`
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | ex.: `Sender note` [optional]

