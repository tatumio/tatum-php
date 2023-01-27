---
title: TransferEth
parent: Model
layout: page
---

# TransferEth

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getAmount()** | **string** | Amount to be sent in Ether / MATIC / XDC / KCS. <br>Example: `100000` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getPrivateKey()** | **string** | Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account <br>Example: `Sender note` | [optional]
**getGasLimit()** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. <br>Example: `40000` | [optional]
**getGasPrice()** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. <br>Example: `20` | [optional]

