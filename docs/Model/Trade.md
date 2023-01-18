---
title: Trade
parent: Model
layout: page
---

# Trade model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the trade | [optional]
**getType()** | **string** | Type of the trade, BUY or SELL | [optional]
**getPrice()** | **string** | Price to buy / sell | [optional]
**getAmount()** | **string** | Amount of the trade to be bought / sold | [optional]
**getPair()** | **string** | Trading pair | [optional]
**getIsMaker()** | **bool** | If closed trade was Maker or Taker trade | [optional]
**getFill()** | **string** | How much of the trade was already filled. | [optional]
**getFeeAccountId()** | **string** | ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId. | [optional]
**getFee()** | **float** | Percentage of the trade amount to be paid as a fee. | [optional]
**getCurrency1AccountId()** | **string** | ID of the account of the currenc 1 trade currency | [optional]
**getCurrency2AccountId()** | **string** | ID of the account of the currenc 2 trade currency | [optional]
**getCreated()** | **float** | Creation date, UTC millis | [optional]
**getAttr()** | [**\Tatum\Model\TradeAttr**](../TradeAttr) |  | [optional]

