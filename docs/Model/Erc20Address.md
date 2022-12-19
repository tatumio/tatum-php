# Erc20Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain |
**supply** | **string** | The supply of the token |
**decimals** | **float** | The number of decimal places that the token has |
**description** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain |
**address** | **string** | The blockchain address to be assigned to the virtual account as a deposit address; the supply of the token will be stored on this address |
**base_pair** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction |
**base_rate** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of &lt;code&gt;basePair&lt;/code&gt;*&lt;code&gt;baseRate&lt;/code&gt; | [optional] [default to 1]
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**accounting_currency** | **string** | AThe ISO 4217 code of the currency in which all transactions for the created virtual account will be billed | [optional] [default to 'EUR']

[[Back to API list]](../../README.md#api-endpoints)
