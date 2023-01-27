---
title: Trade
parent: Model
layout: page
---

# Trade

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the trade <br>Example: `7c21ed165e294db78b95f0f1` | [optional]
**getType()** | **string** | Type of the trade, BUY or SELL <br>Example: `BUY` | [optional]
**getPrice()** | **string** | Price to buy / sell <br>Example: `8650.4` | [optional]
**getAmount()** | **string** | Amount of the trade to be bought / sold <br>Example: `15000` | [optional]
**getPair()** | **string** | Trading pair <br>Example: `BTC/EUR` | [optional]
**getIsMaker()** | **bool** | If closed trade was Maker or Taker trade <br>Example: `true` | [optional]
**getFill()** | **string** | How much of the trade was already filled. <br>Example: `1500` | [optional]
**getFeeAccountId()** | **string** | ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId. <br>Example: `7c21ed165e294db78b95f0f1` | [optional]
**getFee()** | **float** | Percentage of the trade amount to be paid as a fee. <br>Example: `1.5` | [optional]
**getCurrency1AccountId()** | **string** | ID of the account of the currenc 1 trade currency <br>Example: `7c21ed165e294db78b95f0f1` | [optional]
**getCurrency2AccountId()** | **string** | ID of the account of the currenc 2 trade currency <br>Example: `7c21ed165e294db78b95f0f1` | [optional]
**getCreated()** | **float** | Creation date, UTC millis <br>Example: `1585170363103` | [optional]
**getAttr()** | [**\Tatum\Model\TradeAttr**](../TradeAttr) |  <br>Example: `null` | [optional]

