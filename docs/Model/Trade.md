# Trade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the trade | [optional]
**type** | **string** | Type of the trade, BUY or SELL | [optional]
**price** | **string** | Price to buy / sell | [optional]
**amount** | **string** | Amount of the trade to be bought / sold | [optional]
**pair** | **string** | Trading pair | [optional]
**is_maker** | **bool** | If closed trade was Maker or Taker trade | [optional]
**fill** | **string** | How much of the trade was already filled. | [optional]
**fee_account_id** | **string** | ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId. | [optional]
**fee** | **float** | Percentage of the trade amount to be paid as a fee. | [optional]
**currency1_account_id** | **string** | ID of the account of the currenc 1 trade currency | [optional]
**currency2_account_id** | **string** | ID of the account of the currenc 2 trade currency | [optional]
**created** | **float** | Creation date, UTC millis | [optional]
**attr** | [**\Tatum\Model\TradeAttr**](TradeAttr.md) |  | [optional]

[[Back to Index]](../index.md)
