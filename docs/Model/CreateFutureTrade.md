---
title: CreateFutureTrade
parent: Model
layout: page
---

# CreateFutureTrade

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getType()** | **string** | Type of future the trade, FUTURE_BUY, FUTURE_SELL | ex.: `BUY`
**getPrice()** | **string** | Price to buy / sell | ex.: `8650.4`
**getAmount()** | **string** | Amount of the trade to be bought / sold | ex.: `15000`
**getPair()** | **string** | Trading pair | ex.: `BTC/EUR`
**getCurrency1AccountId()** | **string** | ID of the account of the currency 1 trade currency | ex.: `7c21ed165e294db78b95f0f1`
**getCurrency2AccountId()** | **string** | ID of the account of the currency 2 trade currency | ex.: `7c21ed165e294db78b95f0f1`
**getFeeAccountId()** | **string** | ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId. | ex.: `7c21ed165e294db78b95f0f1` [optional]
**getFee()** | **float** | Percentage of the trade amount to be paid as a fee. | ex.: `1.5` [optional]
**getAttr()** | [**\Tatum\Model\CreateFutureTradeAttr**](../CreateFutureTradeAttr) |  | ex.: `null`

