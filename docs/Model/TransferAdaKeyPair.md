---
title: TransferAdaKeyPair
parent: Model
layout: page
---

# TransferAdaKeyPair model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAddress()** | **string** | Blockchain address to send assets to. |
**getAmount()** | **string** | Amount to be withdrawn to blockchain. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.5 ADA is used. | [optional]
**getKeyPair()** | [**\Tatum\Model\TransferAdaKeyPairKeyPairInner[]**](../TransferAdaKeyPairKeyPairInner) | Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. |
**getAttr()** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used. |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]

