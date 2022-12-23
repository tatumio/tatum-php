# CreateFutureTrade

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getType()** | **string** | Type of future the trade, FUTURE_BUY, FUTURE_SELL |
**getPrice()** | **string** | Price to buy / sell |
**getAmount()** | **string** | Amount of the trade to be bought / sold |
**getPair()** | **string** | Trading pair |
**getCurrency1AccountId()** | **string** | ID of the account of the currency 1 trade currency |
**getCurrency2AccountId()** | **string** | ID of the account of the currency 2 trade currency |
**getFeeAccountId()** | **string** | ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId. | [optional]
**getFee()** | **float** | Percentage of the trade amount to be paid as a fee. | [optional]
**getAttr()** | [**\Tatum\Model\CreateFutureTradeAttr**](CreateFutureTradeAttr.md) |  |

[[Back to Index]](../index.md)
