---
title: TransferEth
parent: Model
layout: page
---

# TransferEth

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getAddress()** | **string** | Blockchain address to send assets | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getAmount()** | **string** | Amount to be sent in Ether / MATIC / XDC / KCS. | ex.: `100000`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getPrivateKey()** | **string** | Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderAccountId()** | **string** | Sender account ID | ex.: `5e68c66581f2ee32bc354087`
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | ex.: `Sender note` [optional]
**getGasLimit()** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. | ex.: `40000` [optional]
**getGasPrice()** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. | ex.: `20` [optional]

