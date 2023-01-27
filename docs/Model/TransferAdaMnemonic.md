---
title: TransferAdaMnemonic
parent: Model
layout: page
---

# TransferAdaMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Blockchain address to send assets | ex.: `addr1qyyxyhaa2e7kxeqcc72w7f747zqlgwwwstlzsg9umuxc40wnhawldxl4nan95rhtlcnju9q2r8j9qz8vslwsmrkj5r4spxhep9`
**getAmount()** | **string** | Amount to be sent in ADA. | ex.: `100000`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is used. | ex.: `2.5` [optional]
**getIndex()** | **int** | Derivation index of sender address. | ex.: `0`
**getMnemonic()** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getXpub()** | **string** | Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mnemonic is used. | ex.: `41253768cd7c5831988e580cfc7eeecaa78bf52a1ede2bd2f245406605adfbadd5911ab567bc3dc7713e29c2c14bb898b24bb1f01a4992605343ad14703037b9`
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderAccountId()** | **string** | Sender account ID | ex.: `5e68c66581f2ee32bc354087`
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | ex.: `Sender note` [optional]

