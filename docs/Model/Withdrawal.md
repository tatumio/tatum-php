---
title: Withdrawal
parent: Model
layout: page
---

# Withdrawal

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getAddress()** | **string** | Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. <br>Example: `mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7` |
**getAmount()** | **string** | Amount to be withdrawn to blockchain. <br>Example: `0.001` |
**getAttr()** | **string** | Used to parametrize withdrawal. Used for XRP withdrawal to define destination tag of recipient, or XLM memo of the recipient, if needed.<br/> For Bitcoin, Litecoin, Bitcoin Cash, used as a change address for left coins from transaction. <br>Example: `12345` | [optional]
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. <br>Example: `0.0005` |
**getMultipleAmounts()** | **string[]** | For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. <br>Example: `null` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `12345` | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account <br>Example: `Sender note` | [optional]

