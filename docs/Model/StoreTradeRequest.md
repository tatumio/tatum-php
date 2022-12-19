# StoreTradeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of future the trade, FUTURE_BUY, FUTURE_SELL |
**price** | **string** | Price to buy / sell |
**amount** | **string** | Amount of the trade to be bought / sold |
**pair** | **string** | Trading pair |
**currency1_account_id** | **string** | ID of the account of the currency 1 trade currency |
**currency2_account_id** | **string** | ID of the account of the currency 2 trade currency |
**fee_account_id** | **string** | ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId. | [optional]
**fee** | **float** | Percentage of the trade amount to be paid as a fee. | [optional]
**attr** | [**\Tatum\Model\CreateFutureTradeAttr**](CreateFutureTradeAttr.md) |  |

[[Back to API list]](../../README.md#api-endpoints)
