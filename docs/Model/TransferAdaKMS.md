---
title: TransferAdaKMS
parent: Model
layout: page
---

# TransferAdaKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Blockchain address to send assets to <br>Example: `addr1qyyxyhaa2e7kxeqcc72w7f747zqlgwwwstlzsg9umuxc40wnhawldxl4nan95rhtlcnju9q2r8j9qz8vslwsmrkj5r4spxhep9` |
**getAmount()** | **string** | Amount to be sent in ADA. <br>Example: `100000` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is used. <br>Example: `2.5` | [optional]
**getFrom()** | **string** | Blockchain address to send assets from <br>Example: `addr1qyyxyhaa2e7kxeqcc72w7f747zqlgwwwstlzsg9umuxc40wnhawldxl4nan95rhtlcnju9q2r8j9qz8vslwsmrkj5r4spxhep9` |
**getSignatureId()** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getXpub()** | **string** | Extended public key (xpub) of the wallet associated with the accounts. XPub or attr must be used with signatureId. <br>Example: `41253768cd7c5831988e580cfc7eeecaa78bf52a1ede2bd2f245406605adfbadd5911ab567bc3dc7713e29c2c14bb898b24bb1f01a4992605343ad14703037b9` | [optional]
**getAttr()** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used with signatureId. <br>Example: `null` | [optional]
**getIndex()** | **int** | Derivation index of sender address. <br>Example: `0` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account <br>Example: `Sender note` | [optional]

