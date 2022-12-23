# TrcAddress

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain |
**getSupply()** | **string** | The supply of the token |
**getDecimals()** | **float** | The number of decimal places that the token has |
**getType()** | **string** | The type of the token |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain |
**getAddress()** | **string** | The blockchain address to be assigned to the virtual account as a deposit address. |
**getUrl()** | **string** | (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter only with TRC-10 tokens. Do <b>not</b> use this parameter with TRC-20 tokens. |
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**getAccountingCurrency()** | **string** | The ISO 4217 code of the currency in which all transactions for the created virtual account will be billed | [optional] [default to 'EUR']

[[Back to Index]](../index.md)
