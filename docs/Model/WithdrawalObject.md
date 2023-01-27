---
title: WithdrawalObject
parent: Model
layout: page
---

# WithdrawalObject

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the withdrawal <br>Example: `5e68c66581f2ee32bc354088` |
**getTxId()** | **string** | Transaction ID of broadcast transaction <br>Example: `62BD544D1B9031EFC330A3E855CC3A0D51CA5131455C1AB3BCAC6D243F65460D` | [optional]
**getAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getStatus()** | **string** | Status of the withdrawal <br>Example: `InProgress` | [optional]
**getAddress()** | **string** | Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. <br>Example: `mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7` |
**getReference()** | **string** | Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems. <br>Example: `0c64cc04-5412-4e57-a51c-ee5727939bcb` |
**getAmount()** | **string** | Amount to be withdrawn to blockchain. <br>Example: `0.001` |
**getAttr()** | **string** | Used to parametrize withdrawal. Used for XRP withdrawal to define destination tag of recipient, or XLM memo of the recipient, if needed.<br/> For Bitcoin, Litecoin, Bitcoin Cash, used as a change address for left coins from transaction. <br>Example: `12345` | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. <br>Example: `0.0005` |
**getMultipleAmounts()** | **string[]** | For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. <br>Example: `null` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `12345` | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account <br>Example: `Sender note` | [optional]

