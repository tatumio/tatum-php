---
title: Trade
parent: Model
layout: page
---

# Trade

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the trade | ex.: `7c21ed165e294db78b95f0f1` [optional]
**getType()** | **string** | Type of the trade, BUY or SELL | ex.: `BUY` [optional]
**getPrice()** | **string** | Price to buy / sell | ex.: `8650.4` [optional]
**getAmount()** | **string** | Amount of the trade to be bought / sold | ex.: `15000` [optional]
**getPair()** | **string** | Trading pair | ex.: `BTC/EUR` [optional]
**getIsMaker()** | **bool** | If closed trade was Maker or Taker trade | ex.: `true` [optional]
**getFill()** | **string** | How much of the trade was already filled. | ex.: `1500` [optional]
**getFeeAccountId()** | **string** | ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId. | ex.: `7c21ed165e294db78b95f0f1` [optional]
**getFee()** | **float** | Percentage of the trade amount to be paid as a fee. | ex.: `1.5` [optional]
**getCurrency1AccountId()** | **string** | ID of the account of the currenc 1 trade currency | ex.: `7c21ed165e294db78b95f0f1` [optional]
**getCurrency2AccountId()** | **string** | ID of the account of the currenc 2 trade currency | ex.: `7c21ed165e294db78b95f0f1` [optional]
**getCreated()** | **float** | Creation date, UTC millis | ex.: `1585170363103` [optional]
**getAttr()** | [**\Tatum\Model\TradeAttr**](../TradeAttr) |  | ex.: `null` [optional]

