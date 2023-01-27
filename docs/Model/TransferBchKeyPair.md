---
title: TransferBchKeyPair
parent: Model
layout: page
---

# TransferBchKeyPair

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getAddress()** | **string** | Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. <br>Example: `bitcoincash:qrd9khmeg4nqag3h5gzu8vjt537pm7le85lcauzez` |
**getAmount()** | **string** | Amount to be withdrawn to blockchain. <br>Example: `0.001` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getMultipleAmounts()** | **string[]** | For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. <br>Example: `null` | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.00005 BCH is used. <br>Example: `0.00005` | [optional]
**getKeyPair()** | [**\Tatum\Model\TransferBchKeyPairKeyPairInner[]**](../TransferBchKeyPairKeyPairInner) | Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. <br>Example: `null` |
**getAttr()** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used. <br>Example: `null` |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account <br>Example: `Sender note` | [optional]

