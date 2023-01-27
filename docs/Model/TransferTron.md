---
title: TransferTron
parent: Model
layout: page
---

# TransferTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW` |
**getAmount()** | **string** | Amount to be sent in Tron. <br>Example: `100000` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. <br>Example: `e75d702ce00987633f8009fbb1eabb5b187cb5b50fe9179a8d6cee6bab076b66` |
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 2.5 TRX is used. <br>Example: `2.5` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account <br>Example: `Sender note` | [optional]

