---
title: WithdrawalObject
parent: Model
layout: page
---

# WithdrawalObject model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the withdrawal |
**getTxId()** | **string** | Transaction ID of broadcast transaction | [optional]
**getAccountId()** | **string** | Sender account ID |
**getStatus()** | **string** | Status of the withdrawal | [optional]
**getAddress()** | **string** | Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. |
**getReference()** | **string** | Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems. |
**getAmount()** | **string** | Amount to be withdrawn to blockchain. |
**getAttr()** | **string** | <p>Used to parametrize withdrawal. Used for XRP withdrawal to define destination tag of recipient, or XLM memo of the recipient, if needed.<br/> For Bitcoin, Litecoin, Bitcoin Cash, used as a change address for left coins from transaction.</p> | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. |
**getMultipleAmounts()** | **string[]** | For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]

