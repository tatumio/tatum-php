---
title: TransferTronKMS
parent: Model
layout: page
---

# TransferTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Blockchain address to send assets to <br>Example: `TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW` |
**getAmount()** | **string** | Amount to be sent in Tron. <br>Example: `100000` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 2.5 TRX is used. <br>Example: `2.5` | [optional]
**getFrom()** | **string** | Blockchain address to send assets from <br>Example: `TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW` |
**getSignatureId()** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **int** | Derivation index of sender address. <br>Example: `0` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account <br>Example: `Sender note` | [optional]

